@extends('admin/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<!-- phan nut them -->
			<div class="col-md-4">
				<div class="card" style="background: #6699FF">
					<div class="btn">
						<a href="{{route('getthemtv')}}" style="color: white"><b>Thêm thành viên</b></a>
					</div>
				</div>
			</div>
			<!-- het phan nut them -->
			<div class="card">
				<div class="card-header">
					<strong class="card-title"><i>Danh sách thành viên</i></strong>
				</div>
				<div class="card-body">
					<table id="bootstrap-data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên</th>
								<th>Email</th>
								<th>Mật khẩu</th>
								<th>Số điện thoại</th>
								<th>Quyền</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['user'] as $value): ?>
							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->email }}</td>
								<td>{{ $value->password }}</td>
								<td>{{ $value->phone }}</td>
								<td><?php switch ($value->permission) {
									case '0':
									echo 'Khách hàng';
									break;
									case '1':
									echo 'Quản lý';
									break;
									default:
									echo '';
									break;
								}
								?></td>
								<td>
									<button style="background: red"><a id="btn" href={{route('xoanguoidung',$value->id)}} ><i class="fa fa-times"  style="color: white;"></i></a></button>
								</td>
							</tr>

                            <!-- <script>
								function myfun(id) {
								  var r = confirm("Xác nhận xóa!");
								  function handler() { alert('hello'); }
								  if (r == true) {
								  	$('#btn').onclick();
								  }
								}
							</script> -->
							<?php endforeach ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>
@endsection
