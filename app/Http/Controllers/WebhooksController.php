<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webhooks;
use App\Http\Resources\WebhooksResource;

class WebhooksController extends Controller
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
            'callback_url' => ['required'],
            'cities_id' => ['required'],
        ]);

        $webhook = new Webhooks;
        $webhook->callback_url = $request->callback_url;
        $webhook->cities_id = $request->cities_id;
        $webhook->save();

        return new WebhooksResource($webhook);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $webhook = Webhooks::find($id);

        $webhook->delete();

        return new WebhooksResource($webhook);
    }
}
