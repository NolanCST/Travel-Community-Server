<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function register (Request $request) {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'pseudo' => 'required',
            'email' => 'required',
            'password' => 'required',
            'country' => 'required',
            'status' => 'required'
        ]);

        $user = User::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'pseudo' => $request->pseudo,
            'email' => $request->email,
            'password' => $request->password,
            'country' => $request->country,
            'status' => $request->status
        ]);
    }

    public function login () {

    }

    public function logout () {

    }
}
