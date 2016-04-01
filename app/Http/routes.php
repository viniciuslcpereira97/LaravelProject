<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'loggedin.index' , function () {
        return view('pages.home');
    }]);

    Route::get('/register', 'UserController@register');

    Route::post('/register' ,   ['as'   =>  'auth.register' ,   'uses'  =>  'UserController@store']);

    Route::get('/login' , function(){
        return view('pages.authentication.login');
    });

    Route::post('/login'    ,   ['as'   =>  'login.user'    ,   'uses'  =>  'UserController@login']);

    Route::get('/logout'    ,   ['as'   =>  'logout.user'   ,   'uses'  =>  'UserController@logout']);


    foreach (File::allFiles(__DIR__.'/loggedinRoutes') as $partial){
        require $partial->getPathname();
    }

});