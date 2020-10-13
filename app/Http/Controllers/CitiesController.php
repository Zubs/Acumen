<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Http\Resources\CitiesResource;

class CitiesController extends Controller
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
            'name' => ['required', 'string'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);

        // Just some additional security, already set the name to be unique though
        $city = Cities::where('name', $request->name)->first();

        if ($city) {
            return response()->json([
                'data' => null,
                'message' => 'City exists already'
            ]);
        } else {
            $city = new Cities;
            $city->name = $request->name;
            $city->longitude = $request->longitude;
            $city->latitude = $request->latitude;
            $city->save();

            return new CitiesResource($city);
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);

        $city = Cities::find($id);
        $city->name = $request->name;
        $city->longitude = $request->longitude;
        $city->latitude = $request->latitude;
        $city->save();

        return new CitiesResource($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = Cities::find($id);

        $city->delete();

        return new CitiesResource($city);
    }
}
