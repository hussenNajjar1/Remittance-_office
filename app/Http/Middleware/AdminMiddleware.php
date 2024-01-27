<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // التحقق مما إذا كان المستخدم لديه صلاحية الإداريين
        if (Auth::check() && Auth::user()->role == 1) {
            return $next($request);
        }

        // إذا لم يكن لديه الصلاحية، يتم توجيهه إلى الصفحة المناسبة أو أداء إجراء آخر
        return redirect('/'); // يمكنك تعديل هذا حسب احتياجاتك
    }
}
