<?php

namespace App\Http\Controllers;
use App\Banners;
use App\Category;
use App\Products;
use Illuminate\Http\Request;

class PageController extends Controller {
	public function getIndex() {
		$banner = Banners::all();
		return view('front-end.home', compact('banner'));
	}

	public function getCatalog() {
		$category = Category::all();
		return view('front-end.products', compact('category'));
	}

	public function getCeramic() {
		$category = Category::all();
		$product = Products::all()->where('cat_id', 1);
		/*var_dump($product);
		exit();*/
		return view('front-end.ceramictiles', compact('category', 'product'));
	}

	public function getDetail(Request $req) {
		$product = Products::where('id', $req->id)->first();
		return view('front-end.detailproduct', compact('product'));
	}
}
