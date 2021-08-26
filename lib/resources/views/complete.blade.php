@extends('master')
@section('title', 'Hoàn thành thanh toán')
@section('content')

@section('style')
<style>
    div#complete {
        padding: 12px 35px;
        text-align: center;
        color: #39ce14;
        font-size: 16px;
        font-weight: 500;
    }

    h5.text-center.return {
        font-size: 17px;
        text-decoration: underline;
    }

    .text {
        padding: 17px 10px;
        border: 1px solid #39ce14;
        margin: 23px 0;
    }

    .main_dl {
        height: 100vh;
    }
</style>
@endsection
<!-- Page Content -->
<div id="page-wrapper">
 <div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="main_dl">
             <div class="tracuu">
                <h1 class="title">Hoàn tất thanh toán</h1>
                <div class="content">
                    <div id="complete">
                        <h5 class="text-center return"><a href="{{asset('admin/home')}}"> < Quay lại trang chủ</a></h5>
                        <div class="text">
                            <p class="info">Quý khách đã thanh toán thành công!</p>
                            <p>Hóa đơn thanh toán của Quý khách đã được chuyển đến Địa chỉ Email đã được đăng kí.</p>
                            <p>Hóa đơn có giá trị trong ngày, tính từ thời điểm này.</p>
                            <p>Thời gian bảo hành của vật tư là 12 tháng kể từ ngày xuất hóa đơn.</p>
                            <p>rụ sở chính: Đại học Công nghệ thông tin - Đại học Quốc gia TPHCM.</p>
                            <p style="margin-bottom: 0">Cám ơn Quý khách đã tin tưởng sử dụng Sản phẩm của Công ty chúng Tôi!</p>
                        </div>
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