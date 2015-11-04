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

Route::get('login',function(){
    return response()->json(['success' => 'Successfull', 'message' => 'Hey , I will kill you ', 'user_id' => '1']);
});


    // public function response()
    // {
    //     $user ='Ramesh Neupane';
    //     $json ='[{"firstName":"John", "lastName":"Doe"},
    //             {"firstName":"Anna", "lastName":"Smith"},
    //             {"firstName":"Peter","lastName":"Jones"}]';

    //     $pjson = json_decode($json);
    //     echo $user .'<br>';
    //     echo $pjson[0]->firstName;
    //     echo ' '.$pjson[0]->lastName;
        
    // }
