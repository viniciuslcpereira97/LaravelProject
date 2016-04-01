<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use App\Comment;
use App\Http\Requests;
use App\Http\Requests\LikeRequest;



class LikesController extends Controller
{

    /**
     * LikeRequest
     * Model->getLikeable returns the model type
     * Model->like save a like into Model type
     */
    public function like($id, LikeRequest $request){
        $request->getLikeable()->like();

        return redirect()->back();
    }

}
