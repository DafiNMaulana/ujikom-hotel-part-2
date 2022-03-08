<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class authLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        // tolong perhatikan di middleware route nya
        if($request->user()->level) {
            return $next($request);
        }
        return redirect('admin/login')->with('toast_error', 'UPS! anda tidak memiliki akses');
    }
}
