<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^(?=.*[a-zA-Z])[a-zA-Z\s\-\'\.]{2,}$/'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'message' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.string' => 'The name must be a valid string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'name.regex' => 'The name must contain at least one letter and can only include letters, spaces, hyphens, apostrophes, or periods.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'The email may not be greater than 255 characters.',

            'message.required' => 'Please enter a message.',
            'message.string' => 'The message must be a valid string.',
        ];
    }
}
