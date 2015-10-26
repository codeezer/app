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
    public function rest()
    {
        $response = $this->jsonResponseTest();
        $user = array('Ramesh Neupane');
        $json = '{"foo":12345}';
        $pjson = json_decode($json);
        return $json;
    }

    private function jsonResponseTest()
    {
        return Response::json([
            'data' => 'it works'
        ],200);
    }

    public function show()
    {
        $users = User::all();
        return $users;
    }
}
