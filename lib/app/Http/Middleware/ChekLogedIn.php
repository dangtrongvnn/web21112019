<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ChekLogedIn {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (Auth::check()) {
			return redirect()->intended('admin/home');
		}
		return $next($request);
	}
}
