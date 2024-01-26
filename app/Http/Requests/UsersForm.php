<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UsersForm extends FormRequest
{
    /**
 * Indicates if the validator should stop on the first rule failure.
 *
 * @var bool
 */
    protected $trim = true;
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
                'name' => 'required',
                'email' => 'required|unique:users|max:255',
                'password' => ['required',Password::default(), 'confirmed'],
            ];
        }
    /*public function messages():array{

        return[
            'email.unique' => 'email already in use',
            'email.required' => 'A email is required',
            'password.required' => 'A password required'
        ];
    }*/

    protected function prepareForValidation(): void
    {
        $this->email = Str::of($this->email)->trim();
    }
}
