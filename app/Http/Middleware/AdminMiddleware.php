<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika kondisinya yang login user maka mengarahkan ke halaman dashboard 
        // sebaliknya jika yang login bukan user (admin) maka mengarahkan ke halaman berikutnya
        if ($request->user() && !$request->user()->isAdmin()) {
            return redirect('/dashboard');
        }     
        return $next($request);
    }
}
