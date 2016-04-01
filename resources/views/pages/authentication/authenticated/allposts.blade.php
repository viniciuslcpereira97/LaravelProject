@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All posts
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-5">
                                    {{ $post->title }}
                                </div>
                                <div class="col-md-offset-10">
                                    {{ $post->author->name }}
                                </div> 
                            </div>
                            <div class="divider" style='width: 100%; height: 1px; background: #F5F5F5; margin: 5px 0px 5px 0px;'></div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $post->description }}
                                </div>
                            </div>
                            <div class="row">
                                @if(Auth::user()->email == $post->author->email)
                                <div class="col-md-offset-9 col-md-1">
                                @else
                                <div class="col-md-offset-10 col-md-1">
                                @endif
                                    <a href="{{ route('post.comments' , $post->id) }}">Comments</a>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('post.like' , $post->id) }}">Like</a>
                                </div>
                                @if(Auth::user()->email == $post->author->email)
                                    <div class="col-md-1">
                                        <a href="#">Delete</a>
                                    </div>
                                @endif
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection