<?php

namespace Domain\Process\Point\Models\Concerns;

use Domain\Core\City\Models\City;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait PointRelations
{

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class,'city_id')->select('id','name');
    }
 
   
  
}
