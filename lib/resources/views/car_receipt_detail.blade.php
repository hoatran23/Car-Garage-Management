@extends('master')
@section('title', 'Chi tiết tiếp nhận xe')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    
                    <div class="danhsach" style="width: 846px; left: 150px; top: 100px;">
                        <h1 class="title">Danh sách khách hàng & xe </h1>
                        <div class="box">
                            <div id="result" style="width: 800px;padding-bottom: 0px;">
                                <table class="text-center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Biển số</th>
                                            <th>Hiệu xe</th>
                                            <th>Tên khách hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Nợ phí</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list_car_cus as $list)
                                        <tr>
                                            <th>{{$loop->index + 1}}</th>
                                            <td>{{$list->car_license_plate}}</td>
                                            <td>{{$list->brand_name}}</td>
                                            <td>{{$list->cus_name}}</td>
                                            <td>{{$list->cus_phone}}</td>
                                            <td>{{$list->cus_address}}</td>
                                            <td>{{$list->cus_debt}}</td>
                                            <td>
                                                @if($list->car_status == 0)
                                                    Đã hoàn thành
                                                @else 
                                                    Đang sửa chữa
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="pagination" class="row text-center">
                             <div class="pagination-wrap col-lg-12 col-md-12">
                                {{$list_car_cus->links('vendor.pagination.custom')}}
                              </div>
                        </div>
                        <div class="btn-group">
                            <div style="padding-left: 20px;"><a href="{{asset('admin/car_receipt/')}}">Quay lại</a></div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop
