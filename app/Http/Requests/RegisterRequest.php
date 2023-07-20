<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => ['required', 'string'],
            'from_school' => ['required', 'string'],
            'competency_pick_1' => ['required', 'string'],
            'competency_pick_2' => ['required', 'string'],
            'competency_pick_3' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ];
    }
}
