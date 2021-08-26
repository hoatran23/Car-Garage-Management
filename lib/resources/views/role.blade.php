@extends('master')
@section('title', 'Vai trò người dùng')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl" style="display: flex; flex-direction: column;">
                        <div class="capnhat" style="width: 500px; left: 50px" >
                            <h1 class="title">Thêm Role</h1>
                            <div class="box">
                                <form method="post">
                                    <div class="input-group">
                                        <div class="txt_field">
                                            <input type="text" required id="name" name="name">
                                            <span></span>
                                            <label>Tên Role</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="text" required name="display_name">
                                            <span></span>
                                            <label>Tên Role hiển thị</label>
                                        </div>
                                        <div class="avail-field" id="ngaysua"> Danh sách các quyền:</div>
                                        <div id="role-list">
                                            @foreach ($permission as $per)
                                                <div style="width:200px; display: inline-block" class="checking">
                                                    <input type="checkbox" name="permission[]" id="{{ $per->id }}"
                                                        value="{{ $per->id }}">
                                                    <label style="cursor: pointer;" for="{{ $per->id }}">{{ $per->display_name }}</label>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="btn-group">
                                        <div>
                                            <input style="width: auto; padding: 0 30px;" class="btn" type="submit"
                                                name="submit" value="Thêm Mới" id="themmoi">
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        <div class="danhsach" style="width: 500px;top: -490px; left:600px">
                            <h1 class="title">Roles </h1>
                            <div class="box">
                                <div id="result" style="width: 650px">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Name</th>
                                                <th>Display name</th>
                                                <th style="width: 150px;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->display_name }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ asset('admin/role/edit/' . $role->id) }}"
                                                                type="button" class="btn">Sửa</a>
                                                            <a href="{{ asset('admin/role/delete/' . $role->id) }}"
                                                                class="btn"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
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



@stop
