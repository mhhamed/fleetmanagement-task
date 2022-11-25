<?php

namespace App\Http\Resources\Process;

use Illuminate\Http\Resources\Json\JsonResource;


class BusResource extends JsonResource
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
          'name'                 => $this->name,
          'plate_letters'        => $this->plate_letters,
          'plate_numbers'        => $this->plate_numbers,
         
        ];
    }
}
