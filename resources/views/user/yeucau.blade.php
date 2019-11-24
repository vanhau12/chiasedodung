@extends('user/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
{{-- banner --}}
<div class="hero-wrap hero-bread" style="background-image: url('img/banner/bn_2.png'); margin-top: 70px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span></p>
            <h1 class="mb-0 bread">Tài khoản - Yêu cầu</h1>
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
                <h3 style="color: green;">Lời nhắn</h3>
            </div>
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>Đồ dùng</th>
                            <th>Người gửi</th>
                            <th>Lời nhắn</th>
                            <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['getcontact'] as $item)
                              <tr class="text-center">
                                <td class="product-remove">
                                    <a href="{{route('tuchoi',$item->id)}}"><span class="ion-ios-close"></span></a>
                                    <a href="{{route('chapnhan',$item->id)}}"><span class="ion-ios-checkmark"></span></a>
                                </td>

                                <td class="product-name">
                                    <b><a style="color: black;" href="{{route('chitiet',$item->item_id)}}">{{$item->name}}</a></b>
                                </td>
                                <td class="price">
                                    <span>{{$item->uname}}</span><br>
                                    <span>{{$item->uphone}}</span><br>
                                    <span>{{$item->uemail}}</span>
                                </td>
                                <td class="product-name">
                                    <span>{{$item->message}}</span><br>
                                    <p>{{ date('M d, Y',$item->sent_date) }}</p>
                                </td>

                                <td class="price">
                                    @if ($item->status == 0)
                                        <p style="color: blue;">Đang chờ</p>
                                    @else
                                        @if ($item->status == 1)
                                            <b style="color: green;">Chấp nhận</b>
                                        @else
                                            <b style="color: red;">Từ chối</b>
                                        @endif
                                    @endif
                                </td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $data['getcontact']->links("pagination::bootstrap-4") }}
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
                <h3 style="color: green;">Lời nhắn của tôi</h3>
            </div>
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>Đồ dùng</th>
                            <th>Người nhận</th>
                            <th>Lời nhắn</th>
                            <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['sentcontact'] as $item)
                              <tr class="text-center">
                                <td class="product-remove">
                                    <a href="{{route('xoaloinhan',$item->id)}}"><span class="ion-ios-close"></span></a>
                                </td>

                                <td class="product-name">
                                    <b><a style="color: black;" href="{{route('chitiet',$item->item_id)}}">{{$item->name}}</a></b>
                                </td>
                                <td class="price">
                                    <span>{{$item->uname}}</span><br>
                                    <span>{{$item->uphone}}</span><br>
                                    <span>{{$item->uemail}}</span>
                                </td>
                                <td class="product-name">
                                    <span>{{$item->message}}</span><br>
                                    <p>{{ date('M d, Y',$item->sent_date) }}</p>
                                </td>

                                <td class="price">
                                    @if ($item->status == 0)
                                        <p style="color: blue;">Đang chờ</p>
                                    @else
                                        @if ($item->status == 1)
                                            <b style="color: green;">Đã chấp nhận</b>
                                        @else
                                            <b style="color: red;">Đã từ chối</b>
                                        @endif
                                    @endif
                                </td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $data['sentcontact']->links("pagination::bootstrap-4") }}
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
