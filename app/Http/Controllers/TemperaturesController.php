<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Models\Temperature;
use App\Http\Resources\TemperatureResource;
use Carbon\Carbon;

class TemperaturesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'min' => ['required',],
            'max' => ['required'],
            'cities_id' => ['required'],
        ]);

        // Check if the city exists
        $city = Cities::where('id', $request->cities_id)->first();

        if ($city) {      
            $temperature = new Temperature;
            $temperature->min = $request->min;
            $temperature->max = $request->max;
            $temperature->cities_id = $request->cities_id;
            $temperature->timestamp = Carbon::now()->timestamp;
            $temperature->save();

            return new TemperatureResource($temperature);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'City not found',
            ]);
        };
    }
}
