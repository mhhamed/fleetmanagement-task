<?php

namespace App\Http\Resources\Process;

use Illuminate\Http\Resources\Json\JsonResource;


class PointResource extends JsonResource
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
          'id'                   => $this->id,
          'city'                 => $this->city->name,
          'leaving_time'         => $this->leaving_time,
          'fee'                  => $this->fee,
         
        ];
    }
}
