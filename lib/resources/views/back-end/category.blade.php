@extends('back-end.master')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
						@include('errors.note')
						<form method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								<label>Slug:</label>
    							<input type="text" name="slug" class="form-control" placeholder="Slug...">
								<label>Tên ảnh:</label>
    							<input type="text" name="images" class="form-control" placeholder="Ảnh...">
								<label>Mô tả:</label>
    							<input type="text" name="description" class="form-control" placeholder="Mô tả...">
							</div>
							<div class="form-group">
								<input type = "submit" name = "submit" class = "form-control btn btn-primary" value= "Thêm mới">
							</div>
							{{csrf_field()}}
						</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
									  <th>Slug</th>
									  <th>Ảnh</th>
									  <th>Mô tả</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								@foreach($catelist as $cate)
								<tr>
									<td>{{$cate->name}}</td>
									<td>{{$cate->slug}}</td>
									<td>{{$cate->image}}</td>
									<td>{{$cate->link}}</td>
									<td>
			                    		<a href="{{asset('admin/category/edit/'.$cate->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('admin/category/delete/'.$cate->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection
