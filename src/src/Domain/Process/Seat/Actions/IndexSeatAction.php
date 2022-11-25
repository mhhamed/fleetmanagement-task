<?php

namespace Domain\Process\Seat\Actions;

use Illuminate\Support\Facades\DB;
use Domain\Process\Seat\DataObjects\IndexSeatObject;

class IndexSeatAction {

    public function __invoke($id,IndexSeatObject $dto){
       
   
       return DB::table('trips')
            ->join('seats', 'trips.bus_id', '=', 'seats.bus_id')
            ->select('trips.id AS trip_id','seats.id AS seat_id ', 'seats.unique_id')
            ->where('trips.id',$id)
            ->whereNotExists(function ($query) use($dto){
                $query->select(DB::raw(1))
                      ->from('user_seats')
                      ->where(function($query) use($dto){
                        $query
                        ->where('from_point_id', '<=', $dto->from_point_id )
                        ->orWhere('from_point_id','<', $dto->to_point_id );
                      })
                      ->where(function($query) use( $dto){
                          $query->where('to_point_id','>', $dto->from_point_id);
                          $query->orWhere('to_point_id','>=', $dto->to_point_id );
                       })
                      ->where('user_seats.date', $dto->date)
                      ->whereColumn('user_seats.seat_id', 'seats.id');
            })
            ->whereExists(function ($query) use($dto){
                $query->select(DB::raw(1))
                      ->from('points')
                      ->where('points.leaving_time','>=', request('time',now()->format('H:i:s')))
                      ->where('points.id', $dto->from_point_id);
            })
            ->get();
   
    }

}