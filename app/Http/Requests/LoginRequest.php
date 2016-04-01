<?php

namespace App\Http\Requests;

use Auth;
use App\User;
use App\Http\Requests\Request;

class LoginRequest extends Request
{

    protected $user = null;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $active = User::where('email' , $this->email)->first()->active;
        if($active){
            return $this->user = User::where('email' , $this->email)->first(); 
        }

        return $this->user = null;
    }

    public function getUser(){
        return $this->user;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
