@extends('admin/layout')
@section('title')
@parent
{{$data['title']}}
@stop
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <!-- phan nut them -->
            <div class="col-md-12">
                <form action="{{route('themdanhmuc')}}" method="post" enctype="multidata/form-data">
                    @csrf
                    <?php if (Session::has('success')): ?>
                        <div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;">{{Session('success')}}</h4></label>
                        </div>
                   <?php endif ?>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label><b>Tên danh mục</b></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-actions form-group text-center col-md-4"><button type="submit" class="btn btn-success btn-default" name="submit">Thêm</button></div>
                    </div>

                </form>

            </div>
            <div class="col-md-12 text-center">

            </div>
            <!-- het phan nut them -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><i>Danh sách danh mục</i></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Danh Mục</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($data['types'] as $value): ?>
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <button style="background: red"><a id="btn" href={{route('xoadanhmuc',$value->id)}} ><i class="fa fa-times"  style="color: white;"></i></a></button>
                                    </td>
                                </tr>

                                <!-- <script>
                                    function myfun(id) {
                                      var r = confirm("Xác nhận xóa!");
                                      function handler() { alert('hello'); }
                                      if (r == true) {
                                        $('#btn').onclick();
                                      }
                                    }
                                </script> -->
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>
@endsection
