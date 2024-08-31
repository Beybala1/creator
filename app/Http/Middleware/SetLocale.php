<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route("locale");
        
        if (!in_array($locale, Config::get("app.locales"))) {
            $locale = Config::get("app.fallback_locale");
        }

        App::setLocale($locale);

        return $next($request);
    }   
}
