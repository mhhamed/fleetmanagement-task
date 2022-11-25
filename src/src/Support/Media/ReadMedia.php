<?php

namespace Support\Media;

class ReadMedia
{


    public static function handle($path){

        return  config('images.domain').'/'.$path;

    }
    
}
