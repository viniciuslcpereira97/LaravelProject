<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Remove the mass 
     */
    protected $guarded = [];

    /**
     * Relation with Post
     * Return the comment's post
     */
    public function post(){
        return $this->belongsTo(Post::class , 'post_id');
    }

    /**
     * Relation with User
     * Return the comment's owner
     */
    public function author(){
        return $this->belongsTo(User::class , 'owner');
    }

    /**
     * Relation with Like
     * return all comment's likes
     */
    public function likes(){
        return $this->morphMany(Like::class , 'likeable');
    }

    /**
     * Create a new like in this model 
     */
    public function like(){
        $this->likes()->save(new Like());
    }
}
