<?php

namespace Domain\Process\Trip\Models\Concerns;

use Domain\Process\Bus\Models\Bus;
use Domain\Process\Seat\Models\Seat;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait TripRelations
{

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class,'bus_id');
    }
 
   
    public function points():HasMany
    {
        return $this->hasMany(Point::class,'trip_id')->select('id','leaving_time','fee','city_id');
    }
}
