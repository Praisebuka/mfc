<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if (is_string($this->input('email'))) {
            $this->merge(['email' => Str::lower(trim($this->input('email')))]);
        }
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone_no' => ['required', 'string', 'regex:/\A[0-9]{10,15}\z/', 'unique:users,phone_no'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your name.',
            'name.string' => 'Your name must be text.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'An account with this email address already exists.',
            'phone_no.required' => 'Please provide your phone number.',
            'phone_no.regex' => 'Your phone number must contain 10 to 15 digits only.',
            'phone_no.unique' => 'An account with this phone number already exists.',
            'password.required' => 'Please provide a password.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
