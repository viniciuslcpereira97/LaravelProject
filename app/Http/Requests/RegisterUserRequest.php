<?php

namespace App\Http\Requests;

use App\User;
use App\Http\Requests\Request;

class RegisterUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'email' =>  'required|max:150',
            'password'  =>  'required|confirmed',
            'password_confirmation' =>  'required'
        ];
    }

    /**
     * Return the personalized error messages if validation fails
     */
    public function messages(){
        return [
            'name.required' =>  'The name field is required',
            'name.max'  =>  'The name field max is 150',
            'email.required'    =>  'The email field is required',
            'email.max'    =>  'The email field max is 150',
            'password.required' =>  'The password field is required',
            'password.confirmed' =>  'The password confirmation doesnt match',
            'password_confirmation.required'    =>  'The password confirmation is required'
        ];
    }

}