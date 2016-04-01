<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Http\Requests\RegisterUserRequest;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Create a new user
     * @param RegisterUserRequest
     */
    public static function createUser(RegisterUserRequest $request){
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
    }

}

