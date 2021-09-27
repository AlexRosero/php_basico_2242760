<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MiAutenticacion
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
        //Verificar si el usuario está autenticado
        if(Auth::check()){
            return $next($request);
        }else{
            return redirect()
            ->route('login.form')
            ->with('mensaje' , "Usuario no autenticado, debes iniciar iniciar sesión");

        }

    }
}
