@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')

{{-- banner --}}
<div class="hero-wrap hero-bread" style="background-image: url('img/banner/banner-bg.jpg'); margin-top: 70px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span></p>
            <h1 class="mb-0 bread"> Cập nhật thông tin đồ dùng</h1>
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

        <form action="{{route('suadodung',$data['item']->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-center">
                <label style="text-align: center; margin-top: 30px"><h2>Cập nhật đồ dùng</h2></label>
                @if(Session::has('success'))
                    <div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;">{{Session('success')}}</h4>
                        </label>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Tiêu Đề:</label>
                <input type="text" class="form-control" required name="name" value="{{ $data['item']->name }}">
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm:</label>
                <select name="type" id="" class="form-control">
                    @foreach ($data['types'] as $type)
                        @if ($data['item']->type_id == $type->id)
                        <option value="{{ $type->id }}" selected="">{{ $type->name }}</option>
                        @else
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Yêu cầu:</label>
                <input type="text" class="form-control" required name="yeucau" placeholder="(nhập các yêu cầu để chia sẻ như: cho mượn,trao đổi, cho thuê, bán, giá ...)" value="{{ $data['item']->request }}">
            </div>
            <div class="form-group">
                <label for="">Mô tả tóm tắt</label>
                <input type="text" class="form-control" required name="introduce" placeholder="(không quá 150 ký tự)">
            </div>
            <div class="form-group">
                <label for="">Địa điểm:</label>
                <input type="text" class="form-control" required name="place" value="{{ $data['item']->place }}">
            </div>
            <div class="form-group">
                <label for="">Ảnh :</label>
                {{-- @if(Session::has('anhloi'))
                    <span style="color: red">{{Session('anhloi')}}</span>
                @endif --}}
                <input type="file" class="form-control" name="image" id="image" onchange="fileValidation(this)">
                <div><img style="width:150px; height: 150px;" src="imagesitems/{{ $data['item']->image }}"/></div>
                <div id="imagePreviewimage"></div>
            </div>
            <div class="form-group">
                <label for="">Nội dung mô tả:</label>
                <textarea required name="des">{{ $data['item']->description }}</textarea>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-success btn-default" value="Cập nhật">
            </div>
        </form><br>
      </div>
    </div>
</section>

  <!--================End Cart Area =================-->
@endsection
