<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /**
     * Relation with User
     * Return the post's owner
     */
    public function author(){
        return $this->belongsTo(User::class , 'owner');
    }

    /**
     * Relation with Comment
     * Return the post's comments
     */
    public function comments(){
        return $this->hasMany(Comment::class , 'post_id');
    }

    /**
     * Relation with Like
     * Return all post's likes
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
