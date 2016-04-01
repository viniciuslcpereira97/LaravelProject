@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @include('partials.flash')
        @include('partials.errors')
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Auth::guest())
                        Welcome
                    @else
                        Welcome {{ Auth::user()->name }}
                    @endif
                </div>

                <div class="panel-body">
                    @if(Auth::guest())
                        Login to explore more of our service
                    @else
                        @include('pages.authentication.authenticated.home')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
