@extends('master')
@section('title', 'Quy định của gara')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    <div class="capnhat">
                        <h1 class="title">Thêm quy định mới</h1>
                        <div class="box">
                            <form method="post">
                                <div class="input-group">
                                    <div class="txt_field">
                                        <input type="text" name="id" required>
                                        <span></span>
                                        <label>Mã quy định</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="name" required>
                                        <span></span>
                                        <label>Tên quy định</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="value" required>
                                        <span></span>
                                        <label>Mức quy định</label>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 30px;" class="btn" type="submit" name="submit" value="Thêm" id="them">
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                    <div class="danhsach" style="width: 650px; top: -390px">
                        <h1 class="title">Danh sách quy định </h1>
                        <div class="box">
                            <div id="result" style="width: 650px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã quy định</th>
                                            <th>Tên quy định</th>
                                            <th>Mức quy định</th>
                                            <th style="width: 150px;">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list_regu as $list)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$list->regu_id}}</td>
                                            <td>{{$list->regu_name}}</td>
                                            <td>{{$list->regu_value}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{asset('admin/regulation/edit/'.$list->regu_id)}}" class="btn">Sửa</a>
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
