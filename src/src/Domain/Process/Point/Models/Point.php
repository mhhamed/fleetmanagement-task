<?php

namespace Domain\Process\Point\Models;

use Database\Factories\PointFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Domain\Process\Point\Models\Concerns\PointRelations;


class Point extends Model
{
    
    use HasFactory, PointRelations;



    protected static function newFactory()
    {
        return PointFactory::new();
    }
}
