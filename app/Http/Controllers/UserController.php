<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // echo "User Index";
        return view('welcome');
    }
}
