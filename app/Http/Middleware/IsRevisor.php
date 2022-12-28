<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsRevisorpit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
        public function handle(Request $request, Closure $next)
        {
        if(Auth::check() && Auth::user()->is_revisor){
            return $next($request);
        }else{
            return redirect()->route('inicio')->withMessage(['type'=>'danger','text'=> 'Acceso denegado, no eres un revisor, pregunta al administrador.']);
        }

        
        
    }
}
