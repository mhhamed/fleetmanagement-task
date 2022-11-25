<?php

namespace Domain\Process\Seat\Actions;

use Domain\Process\Trip\Models\Trip;
use Domain\Process\Seat\Models\UserSeat;
use Illuminate\Validation\ValidationException;
use Domain\Process\Seat\Actions\IndexSeatAction;
use Domain\Process\Seat\DataObjects\UserSeatObject;

class StoreUserSeatAction {

    protected IndexSeatAction $indexSeatAction;

    public function __construct(
        IndexSeatAction $indexSeatAction,
    )
    {
       $this->indexSeatAction = $indexSeatAction; 
    }

    public function __invoke(UserSeatObject $dto){
       
        $trip = Trip::findOrFail($dto->trip_id);
  
        UserSeat::create([
            'user_id'        => auth()->user()->id,   
            'to_point_id'    => $dto->to_point_id,
            'from_point_id'  => $dto->from_point_id,
            'trip_id'        => $dto->trip_id,
            'seat_id'        => $dto->seat_id, 
            'bus_id'         => $trip->bus_id,
            'date'           => $dto->date
        ]);
      
    }

}