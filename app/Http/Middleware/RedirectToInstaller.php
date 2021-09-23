<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToInstaller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $installation_file = storage_path('installed');
        if (! file_exists($installation_file)) {
            if (! $request->is('install', 'install/*')) {
                return redirect('install');
            }
        }

        return $next($request);
    }
}
