<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckForRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if(!Session::has('role') || Session::get('role') !== $role){
            abort(403 , "SORRY , YOU DON'T HAVE PERMISSIONS TO ACCESS THIS PAGE !");
        }
        return $next($request);
    }




}
