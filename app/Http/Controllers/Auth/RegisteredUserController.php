<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class RegisteredUserController extends Controller
{
    public function store(RegisterRequest $request, AuthService $auth): JsonResponse
    {
        $result = $auth->register($request->validated());

        return response()->json([
            'token' => $result['token'],
            'data' => UserResource::make($result['user'])->resolve($request),
        ], 201);
    }
}
