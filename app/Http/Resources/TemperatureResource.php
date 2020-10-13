<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TemperatureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'min' => $this->min,
            'max' => $this->max,
            'cities_id' => $this->cities_id,
            'timestamp' => $this->created_at,
        ];
    }
}
