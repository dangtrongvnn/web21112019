<?php
namespace App\Http\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller {
	public function getCate() {
		$data['catelist'] = Category::all();
		return view('back-end.category', $data);
	}

	public function postCate(AddCateRequest $request) {
		$category = new Category;
		$category->name = $request->name;
		$category->slug = $request->slug;
		$category->image = $request->images;
		$category->link = $request->description;
		$category->save();
		return back();
	}

	public function getEditCate($id) {
		$data['cate'] = Category::find($id);
		return view('back-end.editcategory', $data);
	}

	public function postEditCate(EditCateRequest $request, $id) {
		$category = Category::find($id);
		$category->name = $request->name;
		$category->slug = $request->slug;
		$category->image = $request->images;
		$category->link = $request->description;
		$category->save();
		return redirect()->intended('admin/category');
	}

	public function getDeleteCate($id) {
		Category::destroy($id);
		return back();

	}

}
