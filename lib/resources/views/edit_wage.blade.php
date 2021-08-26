@extends('master')
@section('title', 'Chỉnh sửa tiền công')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    <div class="capnhat" style="left: 35%; top: 10%">
                        <h1 class="title">Sửa Tiền công</h1>
                        <div class="box">
                            <form method="post">
                                <div class="input-group">
                                    <div class="txt_field">
                                        <input type="text" name="name" value="{{$detail_wage->wage_name}}" id="tencongviec">
                                        <span></span>
                                        <label>Tên Công việc</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="number" value="{{$detail_wage->wage_cost}}" name="cost" id="mucphi">
                                        <span></span>
                                        <label>Mức phí</label>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                            name="submit" value="Cập nhật" id="capnhat">
                                    </div>
                                    <div><a href="{{asset('admin/wage')}}">Quay lại</a></div>
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