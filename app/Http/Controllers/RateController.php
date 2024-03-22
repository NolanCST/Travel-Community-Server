<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function create (Request $request) {

        $credentials = $request->validate([
            "rate" => "required",
            "review" => "required",
            "travel_id" => "required",
        ]);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
        $rate = Rate::create([
            'rate' => $request->rate,
            'review' => $request->review,
            'user_id' => Auth::user()->id,
            'travel_id' => $request->travel_id,
        ]);
        }
    }

    public function update(Request $request, Rate $rate)
    {
        $credentials = $request->validate([
            'rate' => 'required|min:1|max:5',
            'review' => 'max:1000',
        ]);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
        $rate->rate = $request->rate;
        $rate->review = $request->review;

        $rate->save();

        return ['message'=>'Modification de l\'avis réussie'];
        }
    }


    public function destroy (Rate $rate) {
        $result = $rate->delete();
        if ($result) {
            return ['message' => 'Avis supprimé avec succès'];
        } else {
            return ['message' => 'Erreur dans la suppression de votre avis'];
        }
        
    }
}
