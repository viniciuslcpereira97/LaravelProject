@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
    @include('partials.flash')
    @include('partials.errors')
        <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                @include('pages.authentication.partials.register')
            </div>
        </div>
    </div>
</div>    
@endsection