<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'SchoolChamp - Login';

        return view('auth.login', [
            'title' => $title
        ]);
    }

    public function register()
    {
        $title = 'SchoolChamp - Register';

        return view('auth.register', [
            'title' => $title
        ]);
    }
}
