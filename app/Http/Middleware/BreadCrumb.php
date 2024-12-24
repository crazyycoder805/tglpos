<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class BreadCrumb
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the full URL path, including query parameters if needed
        $currentRoute = $request->fullUrl();

        // Save the current route as the "previous route" if it exists
        if (Session::has('current_route')) {
            Session::put('previous_route', Session::get('current_route'));
        }

        // Update the session with the new current route
        Session::put('current_route', $currentRoute);

        return $next($request);
    }
}
