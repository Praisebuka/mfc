<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function store(LoginRequest $request, AuthService $auth): JsonResponse
    {
        $request->ensureIsNotRateLimited();

        $user = $auth->authenticate(
            (string) $request->input('email'),
            (string) $request->input('password')
        );

        if (! $user) {
            $request->recordFailedAttempt();

            return response()->json(['message' => __('auth.failed')], 422);
        }

        $request->clearFailedAttempts();

        return response()->json([
            'token' => $auth->issueToken($user),
            'data' => UserResource::make($user)->resolve($request),
        ]);
    }

    public function destroy(Request $request, AuthService $auth): JsonResponse
    {
        $auth->logout($request->user());

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return response()->json(['message' => 'Logged out successfully.']);
    }
}
