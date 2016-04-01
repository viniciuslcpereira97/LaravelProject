@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
    @include('partials.flash')
    @include('partials.errors')
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                @include('pages.authentication.partials.login')
            </div>
        </div>
    </div>
</div>    
@endsection