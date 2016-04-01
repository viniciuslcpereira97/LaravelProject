<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $loggedUser = null;

    public function __construct(){
        
        if(Auth::check()){
            $this->loggedUser = auth()->user();
        }
        
        view()->share(['loggedUser' => auth()->user()]);
    
    }



}
