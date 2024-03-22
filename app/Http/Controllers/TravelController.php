<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\DayImage;
use App\Models\Legislation;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $travels = Travel::orderBy('created_at', 'desc')->with('legislations')->take(3)->get();
        
        $travels = Travel::getAll();

        foreach ($travels as $element) {
            $element->image = asset('storage/images/' . $element->image);
        }

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
            'user_id' => 'required',
            'travelDays' => 'required',
        ]);

        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $fileName = time() . '.' .$request->image->getClientOriginalName();
            $path = $request->image->storeAs('public/images', $fileName);

            $travel = Travel::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileName,
                'alt' => $fileName,
                'days' => $request->days,
                'country' => $request->country,
                'user_id' => $request->user_id,
            ]);

            if (isset($request->country)) {
                $travel->legislations()->attach($request->country);
            }
            
            foreach ($request->travelDays as $travelDay) {
                
                $addDay = TravelDay::create([
                    'title_day' => $travelDay['titleDay'],
                    'description_day' => $travelDay['descriptionDay'],
                    'travel_id' => $travel->id,
                ]);
                
                foreach ($travelDay['images'] as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $path = $image->storeAs('public/images', $imageName);
                
                    $addImage = DayImage::create([
                        'image' => $imageName,
                        'alt' => $imageName,
                        'travel_day_id' => $addDay->id,
                    ]);
                }
            }

            return Response()->json([
                'Response'=>'création du voyage réussi',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Travel $travel)
    {
        $rates = Rate::with('user')->where('travel_id', $travel['id'])->orderBy('id', 'desc')->get()->toArray();

        $ratingsSum = Rate::where('travel_id', $travel['id'])->sum('rate');
        $ratingsCount = Rate::where('travel_id', $travel['id'])->count();
        $avgRating = 0;
        $avgStarRating = 0;
        if ($ratingsCount>0){
            $avgRating = round($ratingsSum/$ratingsCount,2);
            $avgStarRating = round($ratingsSum/$ratingsCount);
        }
        
        $dayImages = [];

        $travelDays = TravelDay::where('travel_id', $travel['id'])->get();

        foreach ($travelDays as $travelImages) {
            $dayImages[] = DayImage::where('travel_day_id', $travelImages->id)->get();
        };

        foreach ($dayImages as $images) {
            foreach ($images as $image) {
                $image->image = asset('storage/images/' . $image->image);
            }
        }

        $travel = Travel::select('travels.*')
            ->where('id', $travel['id'])
            ->with('legislations')
            ->get();

        foreach ($travel as $element) {
            $element->image = asset('storage/images/' . $element->image);
        }
        
        $responseData = [
            'travel' => $travel,
            'travelDays' => $travelDays,
            'dayImages' => $dayImages,
            'rates' => $rates,
            'avgRating' => $avgRating,
            'avgStarRating' => $avgStarRating,
            'ratingsCount' => $ratingsCount,
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
    public function update(Request $request, $id)
    {
        $credentials = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'image' => 'mimes:jpg,png,svg',
            'travelDays' => 'required',
        ]);
        if (!$credentials) {
            return Response()->json([
                'validation_errors'=>$credentials->message(),
            ]);
        } else {
            $travel = Travel::findOrFail($id);

            if(isset($request->image)) {
                Storage::delete('public/images/'.$travel->image);
            
                $fileName = time() . '.' .$request->image->getClientOriginalName();
                $path = $request->image->storeAs('public/images', $fileName);
                
                $travel->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $fileName,
                    'alt' => $fileName,
                ]);
            } else {
                $travel->update([
                    'title' => $request->title,
                    'description' => $request->description,
                ]);
            }

            foreach ($request->travelDays as $travelDay) {
                $editDay = TravelDay::findOrFail($travelDay['id']);

                $editDay->update([
                    'title_day' => $travelDay['title_day'],
                    'description_day' => $travelDay['description_day'],
                ]);
                 
                if (isset($travelDay['images'])) {
                    foreach ($travelDay['images'] as $image) {
                        $imageName = time() . '.' . $image->getClientOriginalName();
                        $path = $image->storeAs('public/images', $imageName);
                    
                        $addImage = DayImage::create([
                            'image' => $imageName,
                            'alt' => $imageName,
                            'travel_day_id' => $editDay->id,
                        ]);
                    }
                }
                
            }

            return response()->json(['message'=>'Modification du voyage effectuée avec succès']);
        }
    }

    public function destroyImgDay($id)
    {
        $imgDay = DayImage::findOrFail($id);

        $result = $imgDay->delete();
        
        if($result) {
            return ['message' => 'Image supprimé avec succès'];
        } else {
            return ['message' => 'Erreur dans la suppression de votre image'];
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $result = $travel->delete();
        
        if($result) {
            return ['message' => 'Voyage supprimé avec succès.'];
        } else {
            return ['message' => 'Erreur dans la suppression de votre voyage'];
        }
    }
}
