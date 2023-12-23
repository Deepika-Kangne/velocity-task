<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiResponseMiddleware
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
        $response = $next($request);
 
        // Format the response data
        $data = $response->original ?? null;
        // dd($response);
        $formattedResponse = [
            'result' => $data ,
            'message' => $response->status() == 200 ? 'Request successful' : 'Request failed',
            'statusCode' => $response->status(),
        ];
 
        return response()->json($formattedResponse, $response->status());
    }
}
