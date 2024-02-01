<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\DayImage;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = Travel::getAll();
        $responseData = [
            'travels' => $travels,
        ];

        return response()->json($responseData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $credentials = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'image' => 'mimes:jpg,png,svg',
            'days' => 'required|integer',
            'country' => 'required',
        ]);

        $fileName = time() . '.' .$request->image->getClientOriginalName();
        $path = $request->image->storeAs('public/images', $fileName);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $travel = Travel::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileName,
                'alt' => $fileName,
                'days' => $request->days,
                'country' => $request->country,
                'user_id' => $request->user_id,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        $dayImages = [];

        $travelDays = TravelDay::where('travel_id', $travel['id'])->get();

        foreach ($travelDays as $travelDay) {
            $dayImages[] = DayImage::where('travel_day_id', $travelDay->id)->get();
        };

        $travel = Travel::select('travels.*')
            ->where('id', $travel['id'])
            ->with('legislations')
            ->get();

        $responseData = [
            'travel' => $travel,
            'travelDays' => $travelDays,
            'dayImages' => $dayImages,
        ];

        return response()->json($responseData);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
