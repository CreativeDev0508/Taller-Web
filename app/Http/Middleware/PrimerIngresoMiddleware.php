<?php

namespace App\Http\Middleware;

use Closure;
use App\Criminal;
use App\User;
use Illuminate\Support\Facades\Auth;

class PrimerIngresoMiddleware
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
        if(Auth::User()->idCriminal != null){
            return abort(404);
        }
        
        $criminal = Criminal::orderByRaw("RAND()")->first();
        $usuario = User::find(Auth::User()->id);
        $usuario->idCriminal = $criminal->id;
        $usuario->save();
        return $next($request);
        
    }
}
