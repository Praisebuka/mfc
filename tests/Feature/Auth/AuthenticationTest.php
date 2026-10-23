<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_can_authenticate_and_receive_a_sanctum_token(): void
    {
        $user = User::factory()->unverified()->create();

        $response = $this->postJson('/api/v1/auth/login', [
            'email' => strtoupper($user->email),
            'password' => 'password',
        ]);

        $response
            ->assertOk()
            ->assertJsonStructure(['token', 'data' => ['id', 'name', 'email', 'email_verified_at']])
            ->assertJsonMissingPath('data.password')
            ->assertJsonMissingPath('data.remember_token');

        $this->assertGuest();
        $this->assertDatabaseHas('personal_access_tokens', [
            'tokenable_id' => $user->id,
            'name' => 'App Token',
        ]);
    }

    public function test_invalid_credentials_return_a_generic_error_without_authenticating(): void
    {
        $user = User::factory()->create();

        $response = $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'incorrect-password',
        ]);

        $response->assertUnprocessable()
            ->assertExactJson(['message' => 'These credentials do not match our records.']);

        $this->assertGuest();
        $this->assertDatabaseCount('personal_access_tokens', 0);
    }

    public function test_login_throttling_is_keyed_by_email_and_ip(): void
    {
        $user = User::factory()->create();

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->postJson('/api/v1/auth/login', [
                'email' => 'unknown@example.com',
                'password' => 'incorrect-password',
            ])->assertUnprocessable();
        }

        $this->postJson('/api/v1/auth/login', [
            'email' => 'unknown@example.com',
            'password' => 'incorrect-password',
        ])->assertUnprocessable()->assertJsonValidationErrors('email');

        $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertOk();
    }

    public function test_users_can_revoke_their_current_token_on_logout(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('App Token');

        $response = $this->withToken($token->plainTextToken)
            ->postJson('/api/v1/auth/logout');

        $response->assertOk()->assertJson(['message' => 'Logged out successfully.']);
        $this->assertDatabaseMissing('personal_access_tokens', ['id' => $token->accessToken->id]);
    }
}
