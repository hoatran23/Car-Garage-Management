@extends('master')
@section('title', 'Chỉnh sửa vật tư phụ trong kho')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl">
                    <div class="bill">
                        <h1 class="title">Cập nhật VTPT trong kho</h1>
                        <div class="box">
                            <form method="post">
                                <div class="input-group">
                                    <div class="left">
                                        <div class="txt_field">
                                            <input type="text" name="name" placeholder="Tên phụ tùng..." value="{{$store_spare_part->store_spare_name}}">
                                            <span></span>
                                            <label>Tên Vật tư phụ tùng</label>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="txt_field">
                                            <!-- <input type="number" required id="soluong"> -->
                                            <input type="text" name="cost" placeholder="Giá phụ tùng..." value="{{$store_spare_part->store_cost}}">
                                            <span></span>
                                            <label>Đơn giá:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                            name="submit" value="Cập nhật" id="capnhat">
                                    </div>
                                    <div>
                                        <!-- <a href="lichsu_nhapvtpt.html">Lịch sử nhập</a> -->
                                        <a href="{{asset('admin/store')}}">Quay lại</a>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
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