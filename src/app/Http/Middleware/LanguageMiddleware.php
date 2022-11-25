<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Domain\Core\Language\Enums\LanguageEnum;


class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {

        if (auth()->check() && in_array($lang = auth()->user()->language, [LanguageEnum::English->value ,LanguageEnum::Arabic->value])) {
            App::setLocale($lang);
        }else {
            App::setLocale(LanguageEnum::Arabic->value);
            
        }
        
        return $next($request);
    }
}
