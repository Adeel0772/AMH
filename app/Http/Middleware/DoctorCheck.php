<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoctorCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('LoggedDoctor') && ($request->path() !='doctor/login' && $request->path() !='doctor/register' ))
        {
            return redirect('doctor/login')->with('fail','You must be logged in');
        }
        if(session()->has('LoggedDoctor') && ($request->path() == 'doctor/login' || $request->path() == 'doctor/register' ) )
        {
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')->header('Pragma','no-cache')->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');

    }
}
