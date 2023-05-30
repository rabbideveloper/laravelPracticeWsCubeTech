<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
         return view('form');
    }

    public function register(Request $request) {

        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255',
            'password_confirmation' => 'required|confirmed|min:6|max:255'
        ]);

        echo "<pre>";
        print_r($request->all());
        exit();
    }
}
