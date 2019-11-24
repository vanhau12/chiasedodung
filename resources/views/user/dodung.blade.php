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
   						<h2>Đồ dùng chia sẻ</h2>
   						<p>Trang chủ <span>-</span>Đồ dùng chia sẻ</p>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
   <!-- breadcrumb start-->

   <!--================Category Product Area =================-->
   <section class="cat_product_area section_padding">
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-3">
   				<div class="left_sidebar_area">
   					<aside class="left_widgets p_filter_widgets">
   						<div class="l_w_title">
   							<h3 style="color: #FF9900; font-weight: bold;">Danh mục</h3>
   						</div>
   						<div class="widgets_inner">
   							<ul class="list">
   								<?php foreach ($data['types'] as $value): ?>
   									<li>
   										<a href="{{route('danhmuc',$value->id)}}" style="color: #0066CC;">{{$value->name}}</a>
   										<!-- <span>(250)</span> -->
   									</li>
   								<?php endforeach ?>
   							</ul>
   						</div>
   					</aside>

					<!-- lọc theo địa điểm -->
   					<aside class="left_widgets p_filter_widgets">
   						<div class="l_w_title">
   							<h3 style="color: #FF9900; font-weight: bold;">Theo Địa Điểm</h3>
   						</div>
   						<div class="widgets_inner">
   							<ul class="list">
   								<?php foreach ($data['places'] as $value): ?>
   									<li>
	   									<a href="Dodung/dia_diem/" style="color: #0066CC;">{{$value}}</a>
	   								</li>
   								<?php endforeach ?>
   							</ul>
   						</div>
   					</aside>

   					<!-- <aside class="left_widgets p_filter_widgets request_rangs_aside">
   						<div class="l_w_title">
   							<h3>Lọc Theo Giá</h3>
   						</div>
   						<div class="widgets_inner">
   							<div class="range_item">
   								<div id="slider-range"></div>
   								<input type="text" class="js-range-slider" value="" />
   								<div class="d-flex">
   									<div class="request_text">
   										<p>request :</p>
   									</div>
   									<div class="request_value d-flex justify-content-center">
   										<input type="text" class="js-input-from"  readonly />
   										<span>to</span>
   										<input type="text" class="js-input-to"readonly />
   									</div>
   								</div>
   							</div>
   						</div>
   					</aside> -->
   				</div>
   			</div>
   			<div class="col-lg-9">
   				<div class="row">
   					<div class="col-lg-12">
   						<div class="product_top_bar d-flex justify-content-between align-items-center">
   							<div class="single_product_menu">
   								<p><span>{{ $data['tongso'] }}</span> Đồ Dùng Chia Sẻ Được Tìm Thấy</p>
   							</div>

   							<div class="single_product_menu d-flex">
   								<div class="input-group">
   									<input type="text" class="form-control" placeholder="tìm kiếm"
   									aria-describedby="inputGroupPrepend">
   									<div class="input-group-prepend">
   										<span class="input-group-text" id="inputGroupPrepend"><i
   											class="ti-search"></i>
   										</span>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>

   					<!-- danh sách item -->
   					<div class="col-lg-12">
   						<div class="container">
   							<div class="row latest_product_inner">
   								<?php foreach ($data['items'] as $item): ?>
   									<div class="col-sm-4">
   										<div class="card-body">
   											<img class="card-img-top img-thumbnail" src="imagesitems/{{ $item->image }}" alt="Card image cap">
   											<div class="card-block">
   												<h5 class="card-title">{{ $item->name }}</h5>
   												<p class="card-text">Giá : <b>{{ $item->request }}</b></p>
   												<p class="card-text"><small><a href="{{route('chitiet',$item->id)}}" class="btn btn-outline-warning btn-xs">Chi tiết <i class="fa fa-chevron-right"></i></a></small></p>
   											</div>
   										</div>
   									</div>
   								<?php endforeach ?>

   							</div>
   						</div>
   					</div>
   					<!-- Lấy chỉ chỉ số trang hiện tại -->

   					<div class="col-lg-12">
   						<div class="">
   							<nav aria-label="Page navigation example">
   								<ul class="pagination justify-content-center">
									{{ $data['items']->links("pagination::bootstrap-4") }}
								</ul>
   							</nav>
   						</div>
   					</div>

   				</div>
   			</div>
   		</div>
   	</div>
   </section>
   <!--================End Category Product Area =================-->

@endsection


