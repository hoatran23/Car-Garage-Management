@extends('master')
@section('title', 'Lịch sử nhập vật tư phụ tùng vào kho')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    
                    <div class="danhsach" style="width: 800px;top: 100px; left:200px">
                        <h1 class="title">Lịch sử nhập vật tư phụ tùng </h1>
                        <div class="box">
                            <div id="result" style="width: 800px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên phụ tùng</th>
                                            <th>Ngày nhập</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detail_import as $list)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$list->store_spare_name}}</td>
                                            <td>{{$list->import_date}}</td>
                                            <td>{{$list->import_quantity}}</td>
                                            <td>{{$list->store_cost}}</td>
                                            <td>{{$list->store_cost * $list->import_quantity}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div style="padding-left: 20px;"><a href="{{asset('admin/import')}}">Quay lại</a></div>
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
