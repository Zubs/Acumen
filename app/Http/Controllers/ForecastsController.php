<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Http\Resources\ForecastsResource;

class ForecastsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = Cities::find($id);

        if ($city) {
            return new ForecastsResource($city);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'City not found',
            ]);
        };
    }
}
