@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All comments from post - {{ $post_id }}
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    @foreach($comments as $comment)
                        <li class="list-group-item">
                            <div class="row">
                                 <div class="col-md-5">
                                    {{ $comment->author->name }}
                                </div>
                            </div>
                            <div class="divider" style='width: 100%; height: 1px; background: #F5F5F5; margin: 5px 0px 5px 0px;'></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Comment:</p>
                                    {{ $comment->description }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                <a href="{{ route('post.comment.like' , [
                                    'comment_id'    =>  $comment->id,
                                    'post_id'   =>  $post_id
                                ]) }}">Like</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection