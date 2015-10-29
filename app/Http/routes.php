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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('show','ResponseController@show');
Route::get('response','ResponseController@response');

/*Route::get('json', function()
{
    $users = App\User::all();
    $kaka = json_decode($users);
    foreach ($kaka[0] as $key=>$value) {
        echo $key.' = '.$value.'<br>';
    }
    foreach ($kaka[1] as $key=>$value) {
        echo $key.' = '.$value.'<br>';
    }
    foreach ($kaka[2] as $key=>$value) {
        echo $key.' = '.$value.'<br>';
    }
});*/

Route::get('/save',function(){

    $user = new App\User;
    $user->name='Rashila Neupane';
    $user->email='rashila@gmail.com';
    $user->password='rashu';
    $user->remember_token='1818';
    $user->save();
});

Route::get('/form',function(){
    return view('form');
});

Route::get('/elu',function(){
    return view('form');
});