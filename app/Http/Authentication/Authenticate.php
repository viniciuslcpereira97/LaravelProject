<?php 

namespace App\Http\Authentication;

use Auth;
use App\User;
use Illuminate\Http\Request;

class Authenticate
{

    public static function tryAuthentication(Request $request){
        if(Auth::attempt(['email'   =>  $request->email, 'password'    =>  $request->password , 'active'    =>  1])){
            flash()->success('Successfully logged in!');
            return redirect()->route('loggedin.index');
        }
    }
}
