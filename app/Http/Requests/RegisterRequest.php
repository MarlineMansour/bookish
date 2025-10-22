<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\PhoneNumber;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name'=>'bail|required|regex:/^[A-Za-z\s\-]+$/|min:3|max:30',
                'email' => 'bail|required|email|unique:users,email',
                'gender' => 'required',
                'password' =>[
                    'bail',
                    'required',
                    'min:8',
                    'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$%&*?!])+$/'
                ],
                'phone'=>[
                     'bail',
                    'required',
                    'phone:EG'
                    ],
        ];
    }

    public function message(): array
    {
        return[
            'name.required'=>'Name is required',
            'name.regex'=>'Name must be only alphabetic characters',
            'name.min'=>'Name is too short',
            'name.max'=>'Name is too long',
            'email.required' => 'Email is required',
            'email.email'=>'Provide a valid email address ',
            'email.unique'=>'This email is already registered',
            'password.required'=> 'Password is required',
            'password.min'=>'Password must be at least 8 characters',
            'password.regex'=> 'Password must include at least one uppercase letter , one special character and one number ',
            'phone.required'=> 'Phone is required',
            'phone.phone'=> 'Please enter a valid Egyptian phone number',
            'gender.required'=> 'The gender is required'
        ];
    }
}
