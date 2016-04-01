<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;

class UserController extends Controller
{

    public function register(){
        return view('pages.authentication.register');
    }

    public function store(RegisterUserRequest $request){
        User::createUser($request);
        flash()->success('User successfully registered!');
        return redirect('/register');
    }

    public function login(Request $request){
        if(Auth::attempt(['email'   =>  $request->email, 'password'    =>  $request->password , 'active'    =>  1])){
            flash()->success('Successfully logged in!');
            return redirect('/');
        }

        flash()->error('Invalid credentials or user may be inactive!');
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        flash()->success('Successfully logged out!');
        return redirect('/');
    }

}
