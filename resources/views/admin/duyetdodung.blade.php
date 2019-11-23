@extends('admin/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><i>Danh sách đồ cần duyệt</i></strong>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center latest_product_inner">
                        @foreach ($data['items'] as $item)
                            <div class="col-lg-3 col-sm-6">
                                <div class="align-content-center">
                                    <img class="img-fluid" style="width: 235px; height:200px" src="imagesitems/{{ $item->image }}" alt="">

                                    <div class="single_product_text text-center" >
                                        <h4>{{ $item->name }}</h4>
                                        <button style="background: #CC33FF;"><a href="{{route('chitiet',$item->id)}}" ><i class="fa fa-eye"  style="color: white;"></i></a></button>
                                        <button style="background: green"><a href="{{route('duyet',$item->id)}}" ><i class="fa fa-check"  style="color: white;"></i></a></button>
                                        <button style="background: red"><a href="{{route('huy',$item->id)}}" ><i class="fa fa-times"  style="color: white;"></i></a></button>
                                        <hr>
                                    </div>
                                </div>
                             </div>
                        @endforeach
                    </div>
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

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>

<div class="clearfix"></div>

@endsection

