<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthService
{
    /**
     * @param  array{name: string, email: string, password: string}  $attributes
     * @return array{user: User, token: string}
     */
    public function register(array $attributes): array
    {
        $user = User::create($attributes);

        event(new Registered($user));

        return [
            'user' => $user,
            'token' => $this->issueToken($user),
        ];
    }

    /**
     * Authenticate through the configured provider without establishing a session.
     */
    public function authenticate(string $email, string $password): ?User
    {
        $provider = Auth::guard(config('auth.defaults.guard'))->getProvider();
        $user = $provider->retrieveByCredentials(['email' => $email]);

        if (! $user instanceof User ||
            ! $provider->validateCredentials($user, ['password' => $password])) {
            return null;
        }

        return $user;
    }

    public function issueToken(User $user): string
    {
        return $user->createToken('App Token')->plainTextToken;
    }

    public function logout(User $user): void
    {
        $token = $user->currentAccessToken();

        if ($token instanceof PersonalAccessToken) {
            $token->delete();

            return;
        }

        Auth::guard(config('auth.defaults.guard'))->logout();
    }
}
