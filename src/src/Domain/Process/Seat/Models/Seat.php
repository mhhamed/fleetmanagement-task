<?php

namespace Domain\Process\Seat\Models;

use Database\Factories\SeatFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Seat extends Model
{
    use HasFactory;




    protected static function newFactory()
    {
        return SeatFactory::new();
    }
}
