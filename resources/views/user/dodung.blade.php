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
            <h1 class="mb-0 bread">Đồ dùng</h1>
          </div>
        </div>
      </div>
    </div>
{{-- end banner --}}

{{-- content --}}
<section class="ftco-section ftco-degree-bg">
   <div class="container">
     <div class="row">
      <div class="col-lg-8 ftco-animate">
         <div class="row">
            <div class="col-md-12 single_product_menu">
               <p><span style="color: #ff3368; font-weight: bold;">{{ $data['tongso'] }}</span> Đồ Dùng Chia Sẻ Được Tìm Thấy</p>
            </div>
            @foreach ($data['items'] as $item)
               <div class="col-md-12 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch d-md-flex">
                      <a href="{{route('chitiet',$item->id)}}" class="block-20 img-fluid" style="background-image: url('imagesitems/{{ $item->image }}');">
                      </a>
                     <div class="text d-block pl-md-4">
                        <div class="meta mb-3">
                          <div><span class="icon-calendar"></span> {{ date('M d, Y g:i a',$item->createdate) }}</div>
                          <div><span class="ion-md-eye"></span> {{ $item->view }}</div>
                          <div><span class="ion-md-heart"></span> {{ $item->liked }}</div>
                        </div>
                          <h3 class="heading"><a href="{{route('chitiet',$item->id)}}">{{ $item->name }}</a></h3>
                          <p>{{ $item->request }}</p>
                          <p>{{ $item->introduce }}</p>
                          <p><a href="{{route('chitiet',$item->id)}}" class="btn btn-primary py-2 px-3">Chi tiết</a></p>
                     </div>
                  </div>
               </div>
            @endforeach
            </div>
             <div class="col-lg-12">
               <div class="">
                  <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-center">
                        {{ $data['items']->links("pagination::bootstrap-4") }}
                     </ul>
                  </nav>
               </div>
            </div>

      </div> <!-- .col-md-8 -->
      {{-- seach --}}
      <div class="col-lg-4 sidebar ftco-animate">
         <div class="sidebar-box">
           <form action="#" class="search-form">
             <div class="form-group">
               <span class="icon ion-ios-search"></span>
               <input type="text" class="form-control" placeholder="Search...">
            </div>
         </form>
      </div>
      {{-- danh muc --}}
      <div class="sidebar-box ftco-animate">
         <h3 class="heading" style="color: #FF9900; font-weight: bold;">Danh mục</h3>
         <ul class="categories">
            <?php foreach ($data['types'] as $value): ?>
               <li>
                 <a href="{{route('danhmuc',$value->id)}}" style="color: #0066CC;">{{$value->name}}</a>
                 <!-- <span>(250)</span> -->
               </li>
            <?php endforeach ?>
         </ul>
      </div>

      {{-- <div class="sidebar-box ftco-animate">
         <h3 class="heading">Recent Blog</h3>
         <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
            <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
           </div>
         </div>
      </div>
      <div class="block-21 mb-4 d-flex">
       <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
       <div class="text">
         <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
         <div class="meta">
           <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
           <div><a href="#"><span class="icon-person"></span> Admin</a></div>
           <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
      </div>
      <div class="block-21 mb-4 d-flex">
       <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
       <div class="text">
         <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
         <div class="meta">
           <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
           <div><a href="#"><span class="icon-person"></span> Admin</a></div>
           <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
      </div>
      </div> --}}

      <div class="sidebar-box ftco-animate">
        <h3 class="heading">Liên kết</h3>
        <div class="tagcloud">
          <a href="#" class="tag-cloud-link">gia đình</a>
          <a href="#" class="tag-cloud-link">học tập</a>
          <a href="#" class="tag-cloud-link">chia sẻ</a>
          <a href="#" class="tag-cloud-link">đồ dùng</a>
          <a href="#" class="tag-cloud-link">quan tâm</a>
          <a href="#" class="tag-cloud-link">tình cảm</a>
       </div>
      </div>

      <div class="sidebar-box ftco-animate">
        <h3 class="heading">Danh ngôn</h3>
        <p>Hôm nay có thể là một ngày đầy hạnh phúc đối với bạn - và đối với những người khác - nếu bạn dành thời gian để nở nụ cười cho ai đó ... để thể hiện một lời nói tử tế ... để giúp đỡ một người cần giúp đỡ ... để viết một lời ơn ... để dành một lời khích lệ cho một người đang cố gắng vượt qua khó khăn ... để chia sẻ một phần tài sản vật chất của bạn với người khác (Wiliam Arthur Ward)</p>
      </div>
      </div>

      </div>
   </div>
</section> <!-- .section -->
{{-- end content --}}

@endsection


