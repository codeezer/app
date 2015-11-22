<?php

namespace App\Http\Controllers;
use Response;
use App\User;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResponseController extends Controller
{
    //
    public function response()
    {
        $user ='Ramesh Neupane';
        $json ='[{"firstName":"John", "lastName":"Doe"},
                {"firstName":"Anna", "lastName":"Smith"},
                {"firstName":"Peter","lastName":"Jones"}]';

        $pjson = json_decode($json);
        echo $user .'<br>';
        echo $pjson[0]->firstName;
        echo ' '.$pjson[0]->lastName;
        
    }


    public function show()
    {
        $users = User::all();
        return $users;
    }


    public function add()
    {
        $input = Request::all();
        User::create($input);
        return $input;
    }


    public function login()
    {
        return response()->json(['success' => 'Successfull', 'message' => 'Hey , I will kill you ', 'user_id' => '1']);
    }


    public function user($id)
    {
        $user = User::find($id);
        echo 'The user id of '.$id.' has email : '. $user->email;
    }
    
}