@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.category') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-16">

				<!-- Default box -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-home"></i>Category</h3>

					</div>
					<div class="box-body">
						<p>
							<a class="btn btn-primary" href="/category/create">Create</a>
						</p>

						<h3>Danh sách Category</h3>
						<table class="table table-striped table-bordered table-hover">
							<thead>
							<tr class="bg-info">
								<th>ID</th>
								<th>Tiêu đề</th>
								<th>Trạng thái</th>
								<th>Ngày tạo</th>
								<th>Hành động</th>
							</tr>
							</thead>
							<tbody>
							@foreach($category as $cate)
								<tr>
									<td>{{$cate->id}}</td>
									<td>{{$cate->title}}</td>
									<td>{{$cate->status}}</td>
									<td>{{$cate->created_at}}</td>
									<td>
										<a href="/category/show/<?=$cate->id?>" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
										<a href="/category/<?=$cate->id?>/edit" title="Update"><span class="glyphicon glyphicon-pencil"></span></a>
										<a href="/category/delete/<?=$cate->id?>" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
										{{--{!! Form::open(['method' => 'DELETE', 'url'=>['category/delete', $cate->id]]) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}--}}
									</td>
								</tr>
							@endforeach
							</tbody>
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
