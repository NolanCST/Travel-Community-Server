<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;

class ConnexionController extends Controller
{
    public function register (Request $request) {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'pseudo' => 'required',
            'email' => 'required',
            'password' => 'required',
            'country' => 'required'
        ]);

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

    public function login (Request $request) {

        $credentials = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($credentials->fails()) {
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
            } else {
                $token = $user->createToken($user->email.'_token')->plainTextToken;

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
