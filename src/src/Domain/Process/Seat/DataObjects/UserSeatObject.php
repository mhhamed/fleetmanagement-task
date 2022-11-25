<?php

namespace Domain\Process\Seat\DataObjects;

class UserSeatObject{
 
    public function __construct(
        public int $trip_id ,
        public int $from_point_id ,
        public int $to_point_id ,
        public int $seat_id ,
        public string $date ,
        ){}


     

}