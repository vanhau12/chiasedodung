@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
{{-- banner --}}
<div class="hero-wrap hero-bread" style="background-image: url('img/banner/bn_3.png'); margin-top: 70px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('trangchu')}}" style="color: black">Trang chủ</a></span></p>
            <h1 class="mb-0 bread" style="color: black">Chi tiết đồ dùng</h1>
          </div>
        </div>
      </div>
    </div>
{{-- end banner --}}

<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
	<div class="container">
		<div class="row s_product_inner justify-content-between">
			<div class="col-sm-5">
				<div class="product_slider_img">
					<div id="vertical">
						<div data-thumb="img/product/single-product/product_1.png">
							<img style="width: 400px; height: 300px" src="{{ asset('') }}/imagesitems/{{ $data['item']->image }} "/>
						</div>
					</div>
				</div>
                <!-- phần yêu thích -->

                <div style="margin-top: 50px">
                    <form action="{{route('guiyeucau',$data['item']->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label for="comment"><span><b>Lời nhắn:</b></span></label>
                          <textarea class="form-control" rows="5" name="message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-default">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>
			</div>
            <div class="col-sm-1">
            </div>
			<div class="col-sm-6">
				<div class="s_product_text">
					<h3>{{ $data['item']->name }}
                        @if(Session::has('like'))
                        <span style="margin-left: 10px;"><a href="{{route('botim',$data['item']->id)}}" style="color: red"><i class="ti-heart"></i></a></span>
                        @else
                        <span style="margin-left: 10px;"><a href="{{route('thich',$data['item']->id)}}"><i class="ti-heart"></i></a></span>
                        @endif

                    </h3>
					<p><span>Yêu cầu</span> : {{ $data['item']->request }}</p>
					<ul class="list">
						<li>
							<a class="active" href="{{route('danhmuc',$data['type']->id)}}">
								<span>Danh mục</span> : {{ $data['type']->name }}</a>
						</li>
						<li>
							<span>Người chia sẻ</span> : {{ $data['user']->name }}
						</li>
						<li>
							<span>Số điện thoại</span> : {{ $data['user']->phone }}
						</li>
						<li>
							<span>Email</span> : {{ $data['user']->email }}
						</li>
						<li>
							<span>Địa điểm</span> : {{ $data['item']->place }}
						</li>
					</ul>
					<p>
                        @php
                            echo $data['item']->description;
                        @endphp
					</p>

				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->



<!-- product_list part start-->
<section class="product_list best_seller">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Xem nhiều nhất</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-12">
				<div class="best_product_slider owl-carousel">
                    @foreach ($data['topitems'] as $item)
                       <div class="single_product_item">
                            <a href="{{route('chitiet',$item->id)}}"><img src="{{ asset('') }}/imagesitems/{{ $item->image }}" alt="">
                            <div class="single_product_text"></a>
                                <h4 class="text-center">{{ $item->name }}</h4>
                                <h3 class="text-center">{{ $item->request }}</h3>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- product_list part end-->

@endsection


