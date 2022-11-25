<?php

namespace Domain\Core\City\Models;

use Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{

    use HasFactory;


    protected static function newFactory()
    {
        return CityFactory::new();
    }
}
