<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class ConnexionController extends Controller
{
    public function register (Request $request) {
        $credentials = $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'pseudo' => 'required',
            'email' => 'required',
            'password' => 'required',
            'country' => 'required'
        ]);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $user = User::create([
                'lastname' => $request->lastname,
                'firstname' => $request->firstname,
                'pseudo' => $request->pseudo,
                'email' => $request->email,
                'password' => $request->password,
                'country' => $request->country,
                'status' => 0 // A voir comment je gère le status
            ]);
        }
    }

    public function login (Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $user = User::where('email', $request->email)->first();

            if(! $user || ! Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status'=>401,
                    'message'=>'L\'email ou le mot de passe est invalide',
                ]);
            } else if(Auth::attempt($credentials)) {
                $token = Auth::user()->createToken('authToken')->plainTextToken;

                return response()->json([
                    'status'=>200,
                    'email'=>$user->email,
                    'token'=>$token,
                    'message'=>'Connexion réussie',
                ]);
            }
        }
    }

    public function logout () {

    }
}
