<?php

namespace Domain\Process\Seat\DataObjects;

class IndexSeatObject{
 
    public function __construct(
        public int $from_point_id ,
        public int $to_point_id ,
        public string $date ,
        public null|string $time ,
        ){}


     

}