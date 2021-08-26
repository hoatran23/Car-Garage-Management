@extends('master')
@section('title', 'Thông tin nhóm')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">

                    <div class="danhsach" style="width: 1000px;top: 50px; left:5%">
                        <h1 class="title">Thông tin nhóm </h1>
                        <div style="padding: 0 50px">
                            <img src="https://www.uit.edu.vn/sites/vi/files/banner_0.png" alt="Logo UIT">
                            <img height="110px" style="float: right; padding-top: 10px;"
                                src="https://static.vnuhcm.edu.vn/images/20190530/e8fa53887cb9827fe7b811fe098e0c3c.png"
                                alt="Logo Đại học quốc gia TP.HCM">
                        </div>
                        <div class="box">
                            <div id="result" style="width: 1000px;padding-left: 30px;">
                                <h2>Đồ án môn học: Nhập môn Công nghệ phần mềm</h2>
                                <h2>Giáo viên hướng dẫn: Huỳnh Ngọc Tín</h2>
                                <table>
                                    <h2>Danh sách thành viên</h2>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>MSSV</th>
                                            <th>Họ và Tên</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>001</td>
                                        <td>19521180</td>
                                        <td>Nguyễn Hoàng Ân</td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>19521521</td>
                                        <td>Trần Tuy Hòa</td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>19521621</td>
                                        <td>Nguyễn Huỳnh Minh Huy</td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>19521734</td>
                                        <td>Bùi Đức Lâm</td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>19521870</td>
                                        <td>Nguyễn Đỗ Trung Nam</td>
                                    </tr>


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