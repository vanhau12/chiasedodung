@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        {{-- Start: bg warp --}}
        <div class="banner-wrap">
            <div class="blur"></div>
            <div class="banner-content">
                <div>
                    <div class="title">Chia sẻ đồ dùng</div>
                    <div class="desc">Cho đi càng nhiều - Nhận lại càng nhiều</div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    {{-- <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="sanphamchitiet.html" class="feature_btn">Xem thêm <i class="fas fa-play"></i></a>
                        <a href="sanphamchitiet.html"><img src="img/feature/feature_1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                       <!--  <a href="sanphamchitiet.html"></a> -->
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="sanphamchitiet.html" class="feature_btn">Xem thêm <i class="fas fa-play"></i></a>
                        <a href="sanphamchitiet.html"><img src="img/feature/feature_2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="sanphamchitiet.html" class="feature_btn">Xem thêm <i class="fas fa-play"></i></a>
                        <a href="sanphamchitiet.html"><img src="img/feature/feature_3.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="sanphamchitiet.html" class="feature_btn">Xem thêm <i class="fas fa-play"></i></a>
                        <a href="sanphamchitiet.html"><img src="img/feature/feature_4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Mới Nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($data['newitems'] as $item)
                            <div class="single_product_item">
                            <a href="{{route('chitiet',$item->id)}}"><img src="imagesitems/{{ $item->image}}" alt=""></a>
                            <div class="single_product_text text-center">
                                <h4>{{ $item->name}}</h4>
                                <h3>{{ $item->request}}</h3>
                                <a class="add_cart"><!-- + add to cart --><i class="ti-heart"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- Top view -->
    {{-- <section class="product_list best_seller">
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
                                    <img src="imagesitems/{{ $item->image }}" alt="">
                                    <div class="single_product_text">
                                        <h4 class="text-center">{{ $item->name }}</h4>
                                        <h3 class="text-center">{{ $item->price }}</h3>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
	</section> --}}
	<!-- End Top view -->

	 <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Xem nhiều Nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 px-0">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($data['topitems'] as $item)
                            <div class="single_product_item">
                            <a href="{{route('chitiet',$item->id)}}"><img src="imagesitems/{{ $item->image}}" alt=""></a>
                            <div class="single_product_text text-center">
                                <h4>{{ $item->name}}</h4>
                                <h3>{{ $item->request}}</h3>
                                <a class="add_cart"><!-- + add to cart --><i class="ti-heart"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Tham gia cùng chúng tôi</h5>
                        <h2>Đăng ký ngay</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="" class="input-group-text btn_2" id="basic-addon2">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

@endsection

