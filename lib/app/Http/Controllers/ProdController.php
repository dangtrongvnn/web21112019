<?php

namespace App\Http\Controllers;

class ProdController extends Controller {
	public function getProduct() {
		return view('back-end.product');
	}
}
