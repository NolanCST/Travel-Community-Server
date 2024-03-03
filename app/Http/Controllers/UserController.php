<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update (Request $request, $id) {
        $credentials = $request->validate([
            'lastname' => 'required|max:50',
            'firstname' => 'required|max:50',
            'pseudo' => 'required|max:20',
            'email' => 'required',
        ]);
        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $user = User::findOrFail($id);

            $data = [
                'lastname' => $request->lastname,
                'firstname' => $request->firstname,
                'pseudo' => $request->pseudo,
                'email' => $request->email,
            ];
            
            if ($request->password) {
                $data['password'] = $request->password;
            }
            
            $user->update($data);

            return response()->json(['message'=>'Modification du profil effectuée avec succès']);
        }
    }

    public function destroy ($id) {
        $user = User::findOrFail($id);

        $result = $user->delete();
        
        if($result) {
            return ['message' => 'Compte supprimé avec succès'];
        } else {
            return ['message' => 'Erreur dans la suppression de votre compte'];
        }
    }
}
