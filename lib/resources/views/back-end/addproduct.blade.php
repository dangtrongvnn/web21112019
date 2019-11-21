@extends('back-end.master')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Thêm sản phẩm</div>
					<div class="panel-body">
					@include('errors.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control">
									</div>

									<div class="form-group" >
										<label>Intro</label>
										<input required type="text" name="intros" class="form-control">
									</div>

									<div class="form-group" >
										<label>Ảnh</label>
										<input required type="text" name="img" class="form-control">
									</div>


									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="name_category" class="form-control">
											@foreach($category as $cat)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
					                    </select>
									</div>

									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection
