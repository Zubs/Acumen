<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ForecastsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $min = [];
        $max = [];

        foreach ($this->temperature as $shit) {
            array_push($min, $shit->min);
            array_push($max, $shit->max);
        }

        return [
            'city_id' => $this->id,
            'max' => (int) (array_sum($min) / count($min)),
            'min' => (int) (array_sum($max) / count($max)),
            'sample' => count($this->temperature),
        ];
    }
}
