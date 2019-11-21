<?php
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {

	public function getLogin() {
		return view('back-end.login');
	}

	public function postLogin(Request $request) {
		$array = ['email' => $request->email, 'password' => $request->password];
		if ($request->remember = 'Remember') {
			$remember = true;
		} else {
			$remember = false;
		}
		if (Auth::attempt($array, $remember)) {
			return redirect()->intended('admin/home');
		} else {
			return back()->withInput()->with('error', 'Invalid username or password');
		}
	}
}
