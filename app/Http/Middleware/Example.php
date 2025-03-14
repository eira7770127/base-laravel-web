<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
 
class Example
{
    public function handle(Request $request, Closure $next): Response
    {
        // Perform action
        if (true) {
            return redirect()->route('afterMiddleware');
        }
 
        return $next($request);
    }
}