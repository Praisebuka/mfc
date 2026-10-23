<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register_and_receive_a_verification_email(): void
    {
        Notification::fake();

        $response = $this->postJson('/api/v1/auth/register', [
            'name' => 'Test User',
            'email' => '  TEST@example.com ',
            'phone_no' => '0123456789',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertCreated()
            ->assertJsonStructure(['token', 'data' => ['id', 'name', 'email', 'phone_no', 'email_verified_at']])
            ->assertJsonPath('data.email', 'test@example.com')
            ->assertJsonPath('data.phone_no', '0123456789')
            ->assertJsonMissingPath('data.password');

        $user = User::where('email', 'test@example.com')->firstOrFail();

        Notification::assertSentTo($user, VerifyEmail::class);
        $this->assertGuest();
        $this->assertDatabaseHas('personal_access_tokens', [
            'tokenable_id' => $user->id,
            'name' => 'App Token',
        ]);
    }

    public function test_registration_requires_a_unique_phone_number_of_10_to_15_digits(): void
    {
        $user = User::factory()->create(['phone_no' => '1234567890']);

        $this->postJson('/api/v1/auth/register', [
            'name' => 'Fifteen Digit User',
            'email' => 'fifteen@example.com',
            'phone_no' => '123456789012345',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertCreated()->assertJsonPath('data.phone_no', '123456789012345');

        foreach (['123456789', '1234567890123456', '12345abcde'] as $phoneNumber) {
            $this->postJson('/api/v1/auth/register', [
                'name' => 'Test User',
                'email' => 'test-'.$phoneNumber.'@example.com',
                'phone_no' => $phoneNumber,
                'password' => 'password',
                'password_confirmation' => 'password',
            ])->assertUnprocessable()->assertJsonValidationErrors('phone_no');
        }

        $this->postJson('/api/v1/auth/register', [
            'name' => 'Another User',
            'email' => 'another@example.com',
            'phone_no' => $user->phone_no,
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertUnprocessable()->assertJsonValidationErrors('phone_no');
    }
}
