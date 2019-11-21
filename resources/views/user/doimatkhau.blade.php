@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')

<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item">
						<h2>Đổi mật khẩu</h2>
						<p>Trang chủ <span>-</span> Đổi mật khẩu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb start-->

<!-- phan thong tin tai khoan-->
<section class="product_list best_seller">
	<div class="container">
		<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                   <div class="col-md-2">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body card-block" >
                        <form action="{{route('doimatkhau',Session('login'))}}" method="post" class="form-horizontal" enctype="multidata/form-data">
                        @csrf
                        <div class="row form-group">
                          <div class="col col-md-12" style="text-align: center;"><label for="exampleInputName2" class="pr-1  form-control-label"><h2>Đổi mật khẩu</h2></label>
                          </div>
                          @if(Session::has('success'))
                            <div class="col col-md-12 text-center"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;">{{Session('success')}}</h4>
                                </label>
                            </div>
                            @endif
                            @if(Session::has('false'))
                            <div class="col col-md-12 text-center"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: red;">{{Session('false')}}</h4>
                                </label>
                            </div>
                            @endif
                      </div>
                      <hr/>
                      <div class="row form-group">
                          <div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Mật khẩu cũ</b></label>
                          </div>
                          <div class="col-12 col-md-9"><input name="mkcu" type="password"  value="" required="" class="form-control"><span class="help-block"></span>


                            </div>
                      </div>
                      <hr/>
                      <div class="row form-group">
                          <div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Mật khẩu mới</b></label>
                          </div>
                          <div class="col-12 col-md-9"><input type="password" name="mkmoi" value="" required="" placeholder="( ít nhất 6 ký tự )" class="form-control @error('mkmoi') is-invalid @enderror"><span class="help-block"></span>
                            @error('mkmoi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                      </div>
                      <hr/>
                      <div class="row form-group">
                          <div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Nhập lại mật khẩu mới</b></label>
                          </div>
                          <div class="col-12 col-md-9"><input type="password" name="cfmkmoi" value="" required="" class="form-control @error('cfmkmoi') is-invalid @enderror"><span class="help-block"></span>
                            @error('cfmkmoi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                      </div>
                      <hr/>


                      <div class="form-actions form-group text-center"><button type="submit" class="btn btn-success btn-default" name="sub" value="admin">Đổi mật khẩu</button></div>
                    </form>
                </div>

              </div>
              <div class="col-md-2">
              </div>
          </div>
      </div><!-- .animated -->
  </div><!-- .content -->
</div>
</section>
<!-- het phan thong tin tai khoan-->
@endsection
