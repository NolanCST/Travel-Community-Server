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
}
