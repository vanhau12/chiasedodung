@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')

<section class="breadcrumb breadcrumb_bg">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="breadcrumb_iner">
        <div class="breadcrumb_iner_item">
          <h2>Đăng đồ dùng</h2>
          <p>Trang Chủ <span>-</span>Đăng đồ dùng</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- breadcrumb start-->

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
</section>

  <!--================End Cart Area =================-->
@endsection
