<?php

namespace App\Http\Controllers;
use Response;
use App\User;
use Illuminate\Http\Request;
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
}
