<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;
use src\Users\DTO\CreateUserDto;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|string|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6',
            'role' => 'string|nullable'
        ];
    }

    /**
     * @throws UnknownProperties
     */
    public function toDto(): CreateUserDto
    {
        return new CreateUserDto($this->all());
    }
}
