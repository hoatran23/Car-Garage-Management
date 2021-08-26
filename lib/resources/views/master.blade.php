<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/layout/') }}/">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="./logo/favicon.ico">

    <title>Gara - @yield('title')</title>  

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="./css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CSS tự code ở đây -->
    <link rel="stylesheet" href="./css/style.css">
    @yield('style')
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ asset('admin/home') }}"> QUẢN LÝ GARAGE Ô TÔ</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{Auth::user()->name_user}} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ asset('admin/permission/detail/'.Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                        </li>
                        <li><a href="{{ asset('admin/permission') }}"><i class="fa fa-gear fa-fw"></i> Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ asset('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ asset('admin/home') }}"> <i class="fa fa-fw">&#xf015</i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/car_receipt') }}"><i class="fa fa-fw">&#xf1b9</i>Tiếp nhận
                                xe</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/note_repair') }}"><i class="fa fa-edit fa-fw"></i>Phiếu sửa
                                chữa</a>
                        </li>                 
                        <li>
                            <a href="{{ asset('admin/bill') }}"><i class="fa fa-edit fa-fw"></i>Phiếu thu tiền</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/inventory') }}"><i class="fa fa-fw">&#xf15c</i> Báo cáo tồn
                                kho</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/search') }}"><i class="fa fa-fw">&#xf002</i>Tra cứu</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/brand_car') }}"><i class="fa fa-fw">&#xf1b9</i>Hiệu xe</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/store') }}"><i class="fa fa-fw" >&#xf187</i>Kho</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/import') }}"> <i class="fa fa-fw">&#xf019</i>Nhập VTPT</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/wage') }}"><i class="fa fa-fw">&#xf0d6</i>Tiền công</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-fw">&#xf007</i>Quản lý Tài khoản<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin/role') }}">Vai trò</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/permission') }}">Quyền</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ asset('admin/regulation') }}"><i class="fa fa-edit fa-fw"></i> Quy định</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin/info_team') }}"> <i class="fa fa-fw">&#xf05a</i></i>Thông tin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        @yield("content")

    </div>
    <!-- jQuery -->
    <script src="./js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./js/startmin.js"></script>

   
    <!-- Ajax -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    @yield('javascript')
    @yield('jquery')
</body>

</html>
