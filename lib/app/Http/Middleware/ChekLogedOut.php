<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ChekLogedOut {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (Auth::guest()) {
			return redirect()->intended('login');
		}
		return $next($request);
	}
}
