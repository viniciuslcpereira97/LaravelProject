<?php

namespace App\Http\Requests;

use App\Post;
use App\Comment;
use App\Http\Requests\Request;

class LikeRequest extends Request
{
    
    protected $model;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * get the segment from URL
         * return the model if exists
         */
        if ($this->segment(3) == 'comment') {
            return $this->model = Comment::find($this->comment_id);
        }
        
        return $this->model = Post::find($this->post_id);
    }

    public function getLikeable()
    {
        return $this->model;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
