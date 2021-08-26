@extends('master')
@section('title', 'Chỉnh sửa vai trò người dùng')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl" style="display: flex; flex-direction: column;">
                        <div class="capnhat" style="left: 300px; width: 600px">
                            <h1 class="title">Chỉnh sửa vai trò người dùng</h1>
                            <div class="box">
                                <form method="post">
                                    <div class="input-group">
                                        <div class="txt_field">
                                            <input type="text" name="name" value="{{ $role->name }}" required
                                                id="tenvtptmoi">
                                            <span></span>
                                            <label>Tên Role</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="text" name="display_name" value="{{ $role->display_name }}"
                                                required id="dongia">
                                            <span></span>
                                            <label>Tên Role hiển thị</label>
                                        </div>
                                        <div class="avail-field" id="ngaysua"> Danh sách các quyền:</div>
                                        <div id="role-list">
                                            @foreach ($permission as $per)
                                                <div style="width: 250px">
                                                    <input {{ $listRoleOfRole->contains($per->id) ? 'checked' : '' }}
                                                        type="checkbox" name="permission[]" value="{{ $per->id }}">
                                                    <label>{{ $per->display_name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <div>
                                            <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                                name="submit" value="Cập nhật" id="capnhat">
                                        </div>
                                        <div><a href="{{ asset('admin/role') }}">Hủy bỏ</a></div>
                                    </div>
                                    {{ csrf_field() }}
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
