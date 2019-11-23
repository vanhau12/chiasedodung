@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')

{{-- banner --}}
<div class="hero-wrap hero-bread" style="background-image: url('img/banner/bn_1.jpg'); margin-top: 70px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span></p>
            <h1 class="mb-0 bread">Đăng đồ dùng</h1>
          </div>
        </div>
      </div>
    </div>
{{-- end banner --}}

<!--================Cart Area =================-->
<section class="">
<div class="container">
	<div class="row">
		<div class="col-sm-2">
		</div>
    	<div class="col-sm-8">

        <form action="{{route('dangdodung')}}" method="post" enctype="multipart/form-data">
            @csrf
    		<div class="form-group text-center">
    			<label style="text-align: center; margin-top: 30px"><h2>Chia sẻ đồ dùng</h2></label>
                @if(Session::has('success'))
					<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;">{{Session('success')}}</h4>
						</label>
					</div>
                @endif
			</div>
            <div class="form-group">
                <label for="">Tiêu Đề:</label>
                <input type="text" class="form-control" required name="name">
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm:</label>
                <select name="type" id="" class="form-control">
                    @foreach ($data['types'] as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Yêu cầu:</label>
                <input type="text" class="form-control" required name="yeucau" placeholder="(nhập các yêu cầu để chia sẻ như: cho mượn,trao đổi, cho thuê, bán, giá ...)">
            </div>
            <div class="form-group">
                <label for="">Địa điểm:</label>
                <input type="text" class="form-control" required name="place">
            </div>
            <div class="form-group">
                <label for="">Ảnh :</label>
                {{-- @if(Session::has('anhloi'))
					<span style="color: red">{{Session('anhloi')}}</span>
                @endif --}}
                <input type="file" class="form-control" required name="image" id="image" onchange="fileValidation(this)">

                <div id="imagePreviewimage"></div>
            </div>
            <div class="form-group">
                <label for="">Nội dung mô tả:</label>
                <textarea required name="des"></textarea>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-success btn-default" value="Chia sẻ">
            </div>
        </form>
      </div>
 	</div>
</section><br>

  <!--================End Cart Area =================-->
@endsection
