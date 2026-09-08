<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        $title = 'SchoolChamp - Register';

        return view('auth.register', [
            'title' => $title
        ]);
    }
}
