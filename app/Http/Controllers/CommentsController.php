<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class CommentsController extends Controller
{
    
    public function postComments($post_id){
        $comments = Post::find($post_id)->comments;

        return view('pages.authentication.authenticated.comments' , compact('comments' , 'post_id')); 
    }

}
