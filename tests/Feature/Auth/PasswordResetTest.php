<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_response_does_not_reveal_account_existence(): void
    {
        Notification::fake();

        $user = User::factory()->create();
        $known = $this->postJson('/api/v1/auth/forgot-password', ['email' => $user->email]);
        $unknown = $this->postJson('/api/v1/auth/forgot-password', ['email' => 'unknown@example.com']);

        $message = 'If an account exists for this email address, a password reset link has been sent.';

        $known->assertOk()->assertExactJson(['message' => $message]);
        $unknown->assertOk()->assertExactJson(['message' => $message]);
        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_password_can_be_reset_with_a_valid_token_and_existing_tokens_are_revoked(): void
    {
        Notification::fake();

        $user = User::factory()->create();
        $user->createToken('Existing token');

        $this->postJson('/api/v1/auth/forgot-password', ['email' => $user->email])
            ->assertOk();

        Notification::assertSentTo($user, ResetPassword::class, function (ResetPassword $notification) use ($user) {
            $response = $this->postJson('/api/v1/auth/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

            $response->assertOk()
                ->assertJson(['message' => 'Password has been reset successfully.']);

            return true;
        });

        $this->assertTrue(Hash::check('new-password', $user->fresh()->password));
        $this->assertDatabaseCount('personal_access_tokens', 0);
    }
}
