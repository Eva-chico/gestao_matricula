<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrarController extends Controller
{
    //
    public function login()
    {
        return view('entrar.login');
    }
}
