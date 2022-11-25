<?php

namespace Domain\Process\Seat\Models;

use Illuminate\Database\Eloquent\Model;


class UserSeat extends Model
{

    protected $fillable = ['user_id', 'trip_id', 'bus_id' ,'from_point_id', 'to_point_id', 'seat_id', 'date'];

}
