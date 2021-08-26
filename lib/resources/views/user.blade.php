@extends('master')
@section('title', 'Danh sách nguòi dùng')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">

                    <div class="danhsach" style="width: 800px;top: 100px; left:20%">
                        <h1 class="title">Danh sách người dùng </h1>
                        <div class="btn-group">
                            <div><a href="{{ asset('admin/permission/add_user') }}">Thêm người dùng</a></div>
                        </div>
                        <div class="box">
                            <div id="result" style="width: 800px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Email</th>
                                            <th>Họ tên</th>
                                            <th style="width: 250px">Lựa chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $us)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $us->email }}</td>
                                            <td>{{ $us->name_user }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{asset('admin/permission/detail/'.$us->id)}}">Chi tiết</a>
                                                    <a href="{{asset('admin/permission/edit/'.$us->id)}}">Sửa</a>
                                                    <a href="{{asset('admin/permission/delete/'.$us->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="pagination" class="row text-center">
                           <div class="pagination-wrap col-lg-12 col-md-12">
                            {{$user->links('vendor.pagination.custom')}}
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
