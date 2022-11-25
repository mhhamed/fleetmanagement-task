<?php

namespace Domain\Process\Trip\Actions;

use Domain\Process\Trip\Models\Trip;


class IndexTripAction {

    public function __invoke(){
       return Trip::with('bus','points.city')->latest('id')->paginate();       
    }

}