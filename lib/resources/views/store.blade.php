@extends('master')
@section('title', 'Thêm vật tư phụ tùng vào kho')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    <div class="capnhat">
                        <h1 class="title">Thêm phụ tùng</h1>
                        @if (session('status'))
                            <div class="alert alert-danger text-center" style="font-weight: 500; font-size: 16px">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('status')}}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success text-center" style="font-weight: 500; font-size: 16px">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('success')}}
                            </div>
                        @endif
                        <div class="box">
                            <form method="post">
                                 <div class="temp" style="height: 40px; display: flex; justify-content: center; align-items: center;">
                                  {{$amount_spare}}
                                  <div class="soluongxe" id="soluongxe" style="margin: 0 5px;width: 100%; border: 1px solid #3333; height: 15px; border-radius: 23px;">
                                     <div class="soluongxe_sanco" style="width: {{$percent}}%; background: #d3faed; height: 15px; border-radius: 23px;"></div>
                                  </div>
                                  {{$amount_regu}}
                                </div>
                                <div class="input-group">
                                    <div class="txt_field">
                                        <input type="text" name="name" required id="tenvtptmoi">
                                        <span></span>
                                        <label>Tên Vật tư phụ tùng</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="cost" required id="dongia">
                                        <span></span>
                                        <label>Đơn giá</label>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 30px;" class="btn" type="submit"
                                            name="submit" value="Thêm" id="submit">
                                    </div>
                                </div>
                                 {{csrf_field()}}
                            </form>
                        </div>

                    </div>
                    <div class="danhsach" style="width: 650px;top: -330px;">
                        <h1 class="title">Danh sách Vật tư phụ tùng </h1>
                        <!-- <a href="" class="btn btn-success" style="padding: 10px; margin-left: 19px;"> Lịch sử thêm vật tư</a> -->
                        <div class="box">
                            <div id="result" style="width: 650px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã phụ tùng</th>
                                            <th>Tên phụ tùng</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th style="width: 150px;">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list_store as $list)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$list->store_id}}</td>
                                            <td>{{$list->store_spare_name}}</td>
                                            <td>{{$list->store_quantity_avail}}</td>
                                            <td>{{$list->store_cost}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{asset('admin/store/edit/'.$list->store_id)}}" class="btn btn-warning"> Sửa</a>
                                                    <a href="{{asset('admin/store/delete/'.$list->store_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger m-2"> Xóa</a>
                                                    <!-- <button type="button" class="btn">Xóa</button> -->
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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