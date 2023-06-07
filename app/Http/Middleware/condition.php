<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Session;
use Route;
use App\Models\Casher;
class condition
{
    /**  * @param  \Illuminate\Http\Request  $request
     * @return string|null
     * Handle an incoming request.
     ** @return string|null
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
     /*
       $locale=  URL::current();
        Session::put('lang',$locale);
       
        */

        return $next($request);
       }
  
    }


