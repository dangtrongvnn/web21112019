<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller {
	//
	public function getHome() {
		return view('back-end.index');
	}

	public function getLogout() {
		Auth::logout();
		return redirect()->intended('login');
	}
}
