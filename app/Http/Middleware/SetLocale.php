<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get('applocale', config('app.locale'));

        if (! in_array($locale, ['pt', 'ru'], true)) {
            $locale = config('app.locale');
        }

        App::setLocale($locale);
        Session::put('applocale', $locale);

        return $next($request);
    }
}
