<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostsController extends Controller
{
    
    public function index(){
        return view('pages.authentication.authenticated.allposts' , ['posts' => Post::all()]);
    }

}
