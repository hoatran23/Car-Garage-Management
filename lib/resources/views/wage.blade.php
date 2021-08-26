@extends('master')
@section('title', 'Tiền công')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    <div class="capnhat">
                        <h1 class="title">Thêm tiền công</h1>
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
                                  {{$amout_wage}}
                                  <div class="soluongxe" id="soluongxe" style="margin: 0 5px;width: 100%; border: 1px solid #3333; height: 15px; border-radius: 23px;">
                                     <div class="soluongxe_sanco" style="width: {{$percent}}%; background: #d3faed; height: 15px; border-radius: 23px;"></div>
                                  </div>
                                  {{$amount_regu}}
                                </div>
                                <div class="input-group">
                                    <div class="txt_field">
                                        <input type="text" required name="name">
                                        <span></span>
                                        <label>Tên công việc</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="number" name="cost" autocomplete="off" required>
                                        <span></span>
                                        <label>Mức phí</label>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 30px;" class="btn" type="submit"
                                            name="submit" value="Thêm" id="them">
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>

                    </div>
                    <div class="danhsach"  style="top: -330px;">
                        <h1 class="title">Danh sách Tiền công</h1>
                        <div class="box">
                            <div id="result">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã phí</th>
                                            <th style="width: 250px;">Tên loại phí</th>
                                            <th style="width: 250px;">Đơn giá</th>
                                            <th style="width: 250px;">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list_wage as $list)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$list->wage_id}}</td>
                                            <td>{{$list->wage_name}}</td>
                                            <td>{{$list->wage_cost}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{asset('admin/wage/edit/'.$list->wage_id)}}">Sửa</a>
                                                    <a href="{{asset('admin/wage/delete/'.$list->wage_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn"> Xóa</a>
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