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

Route::get('/', function () {
    return view('homepage');
});

Route::get('default', function () {
    return view('welcome');
});

Route::get('home',function(){
    if(Auth::guest()){
        return Redirect::to('auth/login');
    }else{
        echo "welcome you're logged in";
    }
    
});

Route::get('show','ResponseController@show');
Route::get('response','ResponseController@response');
Route::post('add','ResponseController@add');
Route::get('login','ResponseController@login');
Route::get('user/{id}','ResponseController@user');

//**********************************************************************8
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin'); 
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//########################################################################
Route::get('/happy',function(){
    return view('iptrace');
});

Route::get('/ipview',function(){
    return view('ipview');
});