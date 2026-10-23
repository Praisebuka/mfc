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

    public function test_empty_registration_body_returns_field_errors_as_json_without_accept_header(): void
    {
        $response = $this->post('/api/v1/auth/register', [], [
            'Accept' => 'text/html',
        ]);

        $response->assertUnprocessable()
            ->assertHeader('content-type', 'application/json')
            ->assertJsonValidationErrors(['name', 'email', 'phone_no', 'password'])
            ->assertJsonPath('errors.name.0', 'Please provide your name.')
            ->assertJsonPath('errors.email.0', 'Please provide your email address.')
            ->assertJsonPath('errors.phone_no.0', 'Please provide your phone number.')
            ->assertJsonPath('errors.password.0', 'Please provide a password.');
    }

    public function test_get_request_to_registration_endpoint_returns_json_method_error(): void
    {
        $this->get('/api/v1/auth/register')
            ->assertStatus(405)
            ->assertHeader('content-type', 'application/json')
            ->assertExactJson([
                'message' => 'The HTTP method is not allowed for this API endpoint.',
            ]);
    }

    public function test_unknown_api_endpoint_returns_json_not_found_error(): void
    {
        $this->get('/api/v1/auth/not-a-route')
            ->assertNotFound()
            ->assertHeader('content-type', 'application/json')
            ->assertExactJson([
                'message' => 'The requested API endpoint was not found.',
            ]);
    }
}
