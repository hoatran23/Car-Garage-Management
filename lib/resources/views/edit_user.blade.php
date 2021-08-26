@extends('master')
@section('title', 'Chỉnh sửa thông tin người dùng')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl">
                    <div class="add_customer">
                        <h1 class="title">Chỉnh sửa thông tin người dùng</h1>
                        <div class="box">
                            <form method="post">
                                <div class="input-group">
                                    <div class="left">
                                        <div class="txt_field">
                                            <input type="text" name="name" id="hoten" value="{{$user->name_user}}" required>
                                            <span></span>
                                            <label>Họ Tên</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="email" id="email" name="email" value="{{$user->email}}" required>
                                            <span></span>
                                            <label>Email</label>
                                        </div>
                                        <div class="txt_field">
                                        <select style="height: auto; padding-top: 7px" class="inputtion" name="roles[]" id="hieuxe" title="Lựa chọn Hiệu xe:>" multiple size="3" id="person">
                                            @foreach($roles as $role)
                                            <option {{$listRoleOfUser->contains($role->id) ? 'selected' : ''}} style="cursor: pointer;" value="{{$role->id}}">{{$role->display_name}}</option>
                                            @endforeach
                                        </select>
                                            <label>Vai trò</label>
	                                    </div>
                                    </div>
                                    <div class="right">
                                        <div class="txt_field">
                                            <input type="password" id="matkhau1" name="password" value="{{$user->password}}">
                                            <span></span>
                                            <label>Mật khẩu</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="password" name="re-password" value="{{$user->password}}" id="matkhau2">
                                            <span></span>
                                            <label>Nhập lại mật khẩu</label>
                                        </div>
                                       </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input class="btn" type="submit" name="submit" value="Cập nhật"
                                            id="capnhat">
                                    </div>
                                    <div>
                                        <a href="{{asset('admin/permission')}}">Quay lại</a>
                                    </div>
                                </div>


                                <div class="more-info">
                                    Trang web Quản lý Garage Ô tô
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