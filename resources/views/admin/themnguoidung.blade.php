@extends('admin/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8">
				<div class="card-body card-block">
					<form action="{{route('themtv')}}" method="post" enctype="multidata/form-data">
                        @csrf
						<div class="row form-group">
							<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h2>Đăng ký thành viên</h2>
							</label>
						</div>
						<?php if (Session::has('success')): ?>
							<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;">{{Session('success')}}</h4></label>
						    </div>
					   <?php endif ?>
		        				</div>
		        				<hr/>

		        				<div class="row form-group">
		        					<div class="col col-md-3">
                                        <label><b>Họ tên</b></label>
		        					</div>
		        					<div class="col-12 col-md-9"><input type="text" name="name" required="" placeholder="Họ và tên..." class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
		        					</div>
		        				</div>
		        				<hr/>
		        				<div class="row form-group">
		        					<div class="col col-md-3">
                                        <label ><b>Email</b></label>
                                    </div>
		        					<div class="col-12 col-md-9"><input type="email"name="email" required=""placeholder="Enter Email..." class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
		        					</div>
		        				</div>
		        				<hr/>
		        				<div class="row form-group">
		        					<div class="col col-md-3">
                                        <label ><b>Mật khẩu</b></label>
                                    </div>
		        					<div class="col-12 col-md-9"><input type="password" name="pass" required="" placeholder="Mật khẩu..." class="form-control @error('pass') is-invalid @enderror">
                                        @error('pass')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
		        				</div>
		        			</div>
		        			<hr/>
		        			<!-- nhập lại ko matches đc -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label><b>Nhập lại mật khẩu</b></label>
                        		</div>
                        		<div class="col-12 col-md-9"><input type="password" name="cfpass" required="" placeholder="Nhập lại mật khẩu..." class="form-control @error('cfpass') is-invalid @enderror">
                                    @error('cfpass')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        		</div>
                            </div>
                            <hr/>
                            <div class="row form-group">
                            	<div class="col col-md-3">
                                    <label><b>Số điện thoại</b></label>
                            	</div>
                            	<div class="col-12 col-md-9"><input type="text" name="phone" required="" placeholder="Số điện thoại..." class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            	</div>
                            </div>
                            <hr/>
                            <div class="row form-group">
                            	<div class="col col-md-3">
                                    <label ><b>Quyền</b></label></div>
                            	<div class="col-12 col-md-9">
                            		<select name="per" id="select" class="form-control">
                            			<option value="0">Người dùng</option>
                            			<option value="1" selected>Quản lý</option>
                            		</select>
                            	</div>
                            </div>
                            <hr/>
                            <div class="form-actions form-group text-center"><button type="submit" class="btn btn-success btn-default" name="submit">Thêm thành viên</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>
@endsection


