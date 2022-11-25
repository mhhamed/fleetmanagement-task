<?php

namespace App\Http\Resources\Process;

use App\Http\Resources\Process\BusResource;
use Illuminate\Http\Resources\Json\JsonResource;


class TripResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'id'                  => $this->id,
          'code'                => $this->code,
          'tv'                  => $this->tv,
          'conditioning'        => $this->conditioning,
          'food'                => $this->food,
          'drink'               => $this->drink,
          'wifi'                => $this->wifi,
          'classes'             => $this->classes->name,
          'relations'           => [
            'bus'         =>    new BusResource($this->bus),        
            'points'      =>    PointResource::collection($this->points),        
          ]
        ];
    }
}
