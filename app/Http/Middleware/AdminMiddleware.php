<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memastikan user sudah login dan memiliki tipe 'admin'
        if (auth()->check() && auth()->user()->usertype == 'admin') {
            return $next($request); // Lanjutkan request ke halaman yang dituju
        }

        // Jika bukan admin, arahkan ke halaman 403 forbidden atau halaman lain
        return abort(403, 'Access denied'); // atau bisa return redirect('/');
    }
}
