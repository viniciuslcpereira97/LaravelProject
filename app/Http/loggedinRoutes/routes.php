<?php
    
    Route::group(['prefix'  =>  '/'  ,   'middleware'    =>  'auth'] , function(){

        /**
         * Return all posts
         */
        Route::get('/posts' , 'PostsController@index');

        /**
         * Return all post's comments
         */
        Route::get('/post/{post_id}/comments' , ['as'   =>  'post.comments' , 'uses'    => 'CommentsController@postComments']);

        /**
         * Like a post
         */
        Route::get('/post/{post_id}/like' , ['as'   =>  'post.like' , 'uses'    => 'LikesController@like']);
        

        /**
         * Like a comment
         */
        Route::get('/post/{post_id}/comment/{comment_id}' , ['as'   =>  'post.comment.like' , 'uses'    => 'LikesController@like']);

    });

?>