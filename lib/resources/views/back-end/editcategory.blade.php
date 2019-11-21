@extends('back-end.master')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							<form method="post">
							<div class="form-group">
								<label>Tên danh mục</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->name}}">
							</div>
							<div class="form-group">
								<label>Slug</label>
    							<input type="text" name="slug" class="form-control" placeholder="Slug..." value="{{$cate->slug}}">
							</div>
							<div class="form-group">
								<label>Ảnh</label>
    							<input type="text" name="images" class="form-control" placeholder="Ảnh..." value="{{$cate->image}}">
							</div>
							<div class="form-group">
								<label>Mô tả</label>
    							<input type="text" name="description" class="form-control" placeholder="Mô tả..." value="{{$cate->link}}">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class = "form-control btn btn-primary" value="Sửa" >
							</div>
							<div class="form-group">

    							<a href="{{asset('admin/category')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{csrf_field()}}
						</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection