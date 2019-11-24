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
            <h1 class="mb-0 bread">Tài khoản - Yêu thích</h1>
          </div>
        </div>
      </div>
    </div>
{{-- end banner --}}

{{-- content --}}
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color: green;">Đồ dùng đã thích</h3>
            </div>
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Đồ dùng</th>
                            <th>Địa điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['cart'] as $item)
                              <tr class="text-center">
                                <td class="product-remove">
                                    <a href="{{route('bothich',$item->id)}}"><span class="ion-ios-close"></span></a>
                                </td>

                                <td class="image-prod">
                                    <a href="{{route('chitiet',$item->id)}}"><div class="img" style="background-image:url(imagesitems/{{ $item->image }});"></div></a>
                                </td>

                                <td class="product-name">
                                    <h3><b>{{$item->name}}</b></h3>
                                    <p>{{$item->request}}</p>
                                </td>

                                <td class="product-name">
                                    <p>{{$item->place}}</p>
                                </td>

                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $data['cart']->links("pagination::bootstrap-4") }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
