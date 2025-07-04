<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // Hanya log request API (bukan asset/static)
        if ($request->is('api/*')) {
            $user = Auth::user();
            ActivityLog::create([
                'user_id' => $user ? $user->id : null,
                'activity' => $request->method() . ' ' . $request->path(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'data' => json_encode([
                    'request' => $request->except(['password', 'token', 'access_token']),
                    'status' => $response->status(),
                ]),
            ]);
        }
        return $response;
    }
}
