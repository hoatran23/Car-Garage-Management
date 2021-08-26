@extends('master')
@section('title', 'Hiệu xe')
@section('content')            
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="main_dl" style="display: flex; flex-direction: column;">
                <div class="capnhat">
                   <h1 class="title">Thêm hiệu xe</h1>
                   @if (session('status'))
                        <div class="alert alert-danger text-center" style="font-weight: 500; font-size: 16px">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('status')}}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success text-center" style="font-weight: 500; font-size: 16px">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{session('success')}}
                        </div>
                    @endif
                   <div class="box">
                      <form method="post">
                          <div style="height: 40px; display: flex; justify-content: center; align-items: center;">
                            {{$amout_brand_car}}
                            <div style="margin: 0 5px;width: 100%; border: 1px solid #3333; height: 15px; border-radius: 23px;">
                               <div style="width: {{$percent}}%; background: #d3faed; height: 15px; border-radius: 23px;"></div>
                            </div>
                            {{$amount_regu}}
                          </div>
                         <div class="input-group">
                            <div class="txt_field">
                                <input type="text" name="name" required id="hieuxemoi">
                                <span></span>
                                <label>Tên hiệu xe mới</label>
                             </div>
                            
                         </div>
                         <div class="btn-group">
                            <div>
                               <input style="width: auto; padding: 0 30px;" class="btn" type="submit"
                                  name="submit" value="Thêm" id="submit">
                            </div>
                         </div>
                         {{csrf_field()}}
                      </form>
                   </div>
                   
               </div>
               <div class="danhsach" style="top: -225px">
                <h1 class="title">Danh sách Hiệu xe</h1>
                <div class="box">
                    <div id="result">
                        <table>
                           <thead>
                              <tr>
                                 <th style="width: 100px">STT</th>
                                 <th style="width: 350px">Tên Hiệu xe</th>
                                 <th>Tùy chọn</th>
                              </tr>
                           </thead>
                           <tbody>
                               @foreach ($brand_list as $brand)
                              <tr>
                                 <th scope="row">{{$loop->index + 1}}</th>
                                 <td>{{$brand->brand_name}}</td>
                                 <td>
                                    <div class="btn-sa">
                                        <a href="{{asset('admin/brand_car/delete/'.$brand->brand_car_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
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