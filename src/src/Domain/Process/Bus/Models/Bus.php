<?php

namespace Domain\Process\Bus\Models;

use Database\Factories\BusFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bus extends Model
{
    use HasFactory;

    

    protected static function newFactory()
    {
        return BusFactory::new();
    }
}
