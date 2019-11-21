@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item">
						<h2>Chi Tiết Đồ Dùng</h2>
						<p>Trang Chủ <span>-</span> Chi Tiết Đồ Dùng</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb start-->
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
	<div class="container">
		<div class="row s_product_inner justify-content-between">
			<div class="col-sm-6">
				<div class="product_slider_img">
					<div id="vertical">
						<div data-thumb="img/product/single-product/product_1.png">
							<img src="imagesitems/{{ $data['item']->image }} />
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="s_product_text">
					<!--  <h5>previous <span>|</span> next</h5> -->
					<h3>{{ $data['item']->name }}</h3>
					<h2>{{ $data['item']->price }}</h2>
					<ul class="list">
						<li>
							<a class="active" href="">
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
							{{ $data['item']->description }}
						</p>

						<!-- phần yêu thích -->
						<div class="card_area d-flex justify-content-between align-items-center">
								<!-- <a href="" class="like_us"> --> <i class="ti-heart"></i> <!-- </a> -->
							</div>
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
							<?php foreach ($data['topitems'] as $item): ?>
								<div class="single_product_item">
									<img src="imagesitems/{{ $item->image }}" alt="">
									<div class="single_product_text">
										<h4 class="text-center">{{ $item->name }}</h4>
										<h3 class="text-center">{{ $item->price }}</h3>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- product_list part end-->
@endsession


