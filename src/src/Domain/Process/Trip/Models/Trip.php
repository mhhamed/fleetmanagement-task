<?php

namespace Domain\Process\Trip\Models;

use Database\Factories\TripFactory;
use Domain\Process\Point\Models\Point;
use Illuminate\Database\Eloquent\Model;
use Domain\Process\Trip\Enums\ClassEnum;
use Domain\Process\Trip\Models\Concerns\TripRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use TripRelations,HasFactory;
 
    protected $casts = [
        'classes'    => ClassEnum::class,
    ];


    public function points(){
        return $this->hasMany(Point::class, 'trip_id');
    }
    protected static function newFactory()
    {
        return TripFactory::new();
    }
}
