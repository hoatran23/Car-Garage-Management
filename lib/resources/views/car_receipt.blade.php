@extends('master')
@section('title', 'Tiếp nhận xe')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
 <div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="main_dl">
             <div class="add_customer">
                <h1 class="title">Thêm thông tin Khách hàng và Xe</h1>
                @if (session('status'))
                  <div class="alert alert-danger text-center" style="font-weight: 500; font-size: 16px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('status')}}
                  </div>
                @elseif (session('success'))
                  <div class="alert alert-success text-center" style="font-weight: 500; font-size: 16px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('success')}}
                  </div>
                @endif
                <div class="col-sm-10 col-sm-offset-1 text-center" style="padding-left: 20px; font-size: 20px;" id="ngaybaocao"> Ngày tiếp nhận:
                   <span id="date" style="padding-left: 5px; color: #2691d9">{{$current_date}}</span>
                    <div class="temp" style="height: 69px; display: flex; justify-content: center; align-items: center; font-size: 15px">
                      {{$car_of_day}} 
                      <div class="soluongxe" id="soluongxe" style="margin: 0 5px;width: 100%; border: 1px solid #3333; height: 15px; border-radius: 23px;">
                         <div class="soluongxe_sanco" style="width: {{$percent}}%; background: #d3faed; height: 15px; border-radius: 23px;"></div>
                      </div>
                      {{$amount_regu}}
                    </div>
                </div>

                <div class="box">
                   <form method="post">
                      <div class="input-group">
                         <div class="left">
                            <div class="txt_field">
                               <input type="text" id="cus_name" name="cus_name" required>
                               <span></span>
                               <label>Tên Khách Hàng</label>
                            </div>
                            <div class="txt_field">
                               <input type="text" id="cus_phone" name="cus_phone" required>
                               <span></span>
                               <label>Điện thoại</label>
                            </div>
                            <div class="txt_field">
                               <input type="text" id="cus_address" name="cus_address" required>
                               <span></span>
                               <label>Địa chỉ</label>
                            </div>
                         </div>
                         <div class="right">
                            <div class="txt_field">
                               <select class="inputtion" name="car_brand" id="car_brand" title="Lựa chọn Hiệu xe:>"
                                  required id="hieuxe">
                                  <option value=""></option>
                                    @foreach($list_brand_car as $list)
                                    <option value="{{$list->brand_car_id}}">{{$list->brand_name}}</option>
                                    @endforeach
                              </select>
                               <span></span>
                               <label>Hiệu xe</label>
                            </div>
                            <div class="txt_field" id="bienso">
                               <input type="text" id="car_license_plate" name="car_license_plate" required>
                               <span></span>
                               <label>Biển số</label>
                            </div>
                            <div class="txt_field" id="mail">
                               <input type="text" id="email" name="email" required>
                               <span></span>
                               <label>Email</label>
                            </div>
                         </div>
                      </div>
                
                      <div class="btn-group">
                         <div>
                            <input class="btn" type="submit" name="themxe" value="Thêm xe" id="themxe">
                         </div>
                         <!-- <div>
                            <input class="btn" type="submit" name="capnhat" value="Cập nhật" id="capnhat">
                         </div> -->
                         <div class="btn-sa">
                             <a href="{{asset('admin/car_receipt/')}}">Clear</a>
                         </div>
                      </div>
                      <div class="btn-group">
                         <div>
                            <a href="{{asset('admin/car_receipt/detail')}}">Xem danh sách</a>
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
@stop
