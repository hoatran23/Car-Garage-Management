@extends('master')
@section('title', 'Thông tin người dùng')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl">
                        <div class="account">
                            <div class="container">
                                <div class="title">
                                    Thông tin tài khoản
                                </div>
                                <form>
                                    <div class="data">
                                        <label>Họ và tên</label>
                                        <div class="account-info">{{ $user[0]->name_user }}</div>
                                    </div>
                                    <div class="data">
                                        <label>Tài khoản</label>
                                        <div class="account-info">{{ $user[0]->email }}</div>
                                    </div>
                                    <div class="data">
                                        <label>Quyền hạn</label>
                                        @foreach ($user as $us)
                                            <div class="account-info">{{ $us->display_name }}</div>
                                        @endforeach
                                    </div>
                                    <div class="data">
                                        <label>Ngày tham gia</label>
                                        <div class="account-info">{{ $user[0]->created_at }}</div>
                                    </div>
                                    <div class="btn-group">
                                        <!--   <a class="btn-a" href="doimatkhau.html">Đổi mật khẩu</a>
                                    <a class="btn-a" href="taikhoan_quyen.html">Users</a> -->
                                        <div class="btn-sa">


                                            <a id="btn-exit" class="btn btn-primary" style="height: auto; padding: 10px 20px;"
                                                href="{{ asset('admin/home') }}">Thoát</a>
                                        </div>
                                    </div>

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
