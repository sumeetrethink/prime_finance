<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class LanguageSetter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('lng'))
        {
            App::setlocale(session('lng'));
        }
        return $next($request);
    }
            
}
