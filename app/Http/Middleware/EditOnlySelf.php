<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditOnlySelf
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
        //Probleme bloque l'edit pour soi et les autres
        $id=$request->route()->parameters()['article'];
        if (Auth::user()->id == $id) {
            return $next($request);
        } else {
            //pas de return ('vous ne pouvez pas...') mais on peut mettre with warning ou with error etc...
            return redirect()->back();
        }
        
    }
}
