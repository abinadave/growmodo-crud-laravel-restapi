<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers(){
        $response = [
            'users' => User::orderBy('id', 'desc')->get()
        ];
        return response($response, 201);
    }
}
