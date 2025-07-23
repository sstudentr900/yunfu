<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    // if (!Auth::check()) {
    if (!Auth::guard('manager')->check()) {
      // 未登入的使用者重定向到登入頁面
      return redirect()->route('balogin')->with('error', '請先登入系統');
    }
    return $next($request);
  }
}
