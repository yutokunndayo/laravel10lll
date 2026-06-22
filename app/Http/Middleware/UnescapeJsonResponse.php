<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
class UnescapeJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        //レスポンスがJsonオブジェクトでない場合はそのまま返す
        $response = $next($request);
        if (!$response instanceof JsonResponse) {
            return $response;
        }


    }

}
