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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
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
                <h3 style="color: green;">Đồ dùng đang chia sẻ</h3>
            </div>
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>Danh sách đồ dùng</th>
                            <th>&nbsp;</th>
                            <th>Địa điểm</th>
                            <th>Lượt xem</th>
                            <th>Lượt thích</th>
                            <th>Ngày đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['postitems'] as $item)
                              <tr class="text-center">
                                <td class="product-remove"><a href="{{route('xoadodung',$item->id)}}"><span class="ion-ios-close"></span></a><a href="{{route('getsuadodung',$item->id)}}"><span class="ion-ios-brush"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url(imagesitems/{{ $item->image }});"></div></td>

                                <td class="product-name">
                                    <h3><b>{{$item->name}}</b></h3>
                                    <p>{{$item->request}}</p>
                                </td>

                                <td class="price">{{$item->place}}</td>
                                <td class="price">{{$item->view}}</td>
                                {{-- <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td> --}}
                                <td class="price">thêm vào csdl</td>
                                <td class="total">{{ date('M d, Y g:i a',$item->createdate) }}</td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $data['postitems']->links("pagination::bootstrap-4") }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color: green;">Đồ dùng đang chờ duyệt</h3>
            </div>
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>Danh sách đồ dùng</th>
                            <th>&nbsp;</th>
                            <th>Địa điểm</th>
                            <th>Lượt xem</th>
                            <th>Lượt thích</th>
                            <th>Ngày đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['waititems'] as $item)
                              <tr class="text-center">
                                <td class="product-remove"><a href="{{route('xoadodung',$item->id)}}"><span class="ion-ios-close"></span></a><a href="{{route('getsuadodung',$item->id)}}"><span class="ion-ios-brush"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url(imagesitems/{{ $item->image }});"></div></td>

                                <td class="product-name">
                                    <h3><b>{{$item->name}}</b></h3>
                                    <p>{{$item->request}}</p>
                                </td>

                                <td class="price">{{$item->place}}</td>
                                <td class="price">{{$item->view}}</td>
                                {{-- <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td> --}}
                                <td class="price">thêm vào csdl</td>
                                <td class="total">{{ date('M d, Y g:i a',$item->createdate) }}</td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $data['waititems']->links("pagination::bootstrap-4") }}
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
