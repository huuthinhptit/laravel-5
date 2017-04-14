@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.category') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-16">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-home"></i>Category</h3>

					</div>
					<div class="box-body">
						<h3>Danh sách Category</h3>
						<table class="table">
							<tr>
								<td>ID</td>
								<td>Tiêu đề</td>
								<td>Trạng thái</td>
								<td>Ngày tạo</td>
							</tr>
							@foreach($category as $cate)
								<tr>
									<td>{{$cate->id}}</td>
									<td>{{$cate->title}}</td>
									<td>{{$cate->status}}</td>
									<td>{{$cate->created_at}}</td>
								</tr>
							@endforeach
						</table>
						{!! $category->render() !!}
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
