@extends('master')
@section('title', 'Phiếu thu')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" >&#xf0ad</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_car}}</div>
                                <div>Số xe tiếp nhận</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/car_receipt/detail')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x">&#xf1b9</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_brand_car}}</div>
                                <div>Số lượng hiệu xe</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/brand_car')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x" >&#xf187</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_spare_part}}</div>
                                <div>Số lượng phụ tùng</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/store')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x">&#xf0d6</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_wage}}</div>
                                <div>Số loại tiền công</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/wage')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x">&#xf0c0</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_user}}</div>
                                <div>Số lượng User</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/permission')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x">&#xf007</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_role}}</div>
                                <div>Số lượng vai trò</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/role')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-fw fa-5x">&#xf00b</i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_regu}}</div>
                                <div>Số lượng quy định</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/regulation')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$amount_import}}</div>
                                <div>Số lần nhập vật tư</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/import/detail')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card border border-success">
                    <div class="card-header">
                        <h4 class="card-title text-center">Thống kê doanh số</h4>
                    </div>
                    <div class="card-body">
                        <div class="bootstrap-table">
                            <form action="" method="post" autocomplete="off">
                                @csrf
                                <div style="display: flex; justify-content: center;">
                                    <div class="form-group col-sm-3">
                                        <label for="">Từ ngày:</label>
                                        <input type="text" id="datepicker" class="form-control" placeholder="Input Date" name="from_date">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="">Đến ngày:</label>
                                        <input type="text" id="datepicker2" class="form-control" placeholder="Input Date" name="to_date">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="" class="d-block">Theo: </label>
                                        <select name="time" id="select_val" class="select_val form-control">
                                            <option value="">-- Chọn</option>
                                            <option value="tuanqua">Tuần qua</option>
                                            <option value="thangtruoc">Tháng trước</option>
                                            <option value="thangnay">Tháng này</option>
                                            <option value="365ngayqua">365 ngày qua</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-2 ">
                                        <label for=""></label>
                                        <input class="form-control" id="btn-dashboard" type="button" name="submit" value="Lọc kết quả">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div id="myfirstchart" style="height: 250px;"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card border border-success">
                    <div class="card-header">
                        <h4 class="card-title text-center">Chi tiết doanh số</h4>
                    </div>
                    <div class="card-body">
                        <div class="bootstrap-table">
                            <form action="" method="post" autocomplete="off" style="display: flex; align-items: center;">
                                <div class="col-sm-4" style="text-align: center; display: flex;align-items: center;"> 
                                    <div class="col-sm-3">Tháng: </div>
                                    <div class="col-sm-9"><input type="month" id='month' class="form-control" placeholder="Input Date" name="month" autocomplete="off"></div>
                                </div>
                                <div class="col-sm-4" style="text-align: center;">
                                   <div class="col-sm-12">
                                       <input class="form-control btn" id="loc_kq_ct" type="button" name="loc_kq" value="Lọc kết quả">
                                       <div id="clear" style="cursor: pointer;">Clear</div>
                                   </div>
                                </div>
                                <div class="col-sm-4" style="text-align: center;"> 
                                    <div class="total">
                                        <p style="margin: 0">Doanh thu: <span style="font-weight: 700" class="refresh" id="total_income"></span></p>
                                    </div>
                                    <div class="total">
                                        <p style="margin: 0">Lợi nhuân: <span style="font-weight: 700" class="refresh" id="total_profit"></span></p>
                                    </div>
                                    
                                </div>
                            </form> 
                            <table class="text-center">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hiệu xe</th>
                                        <th>Số lượt sửa</th>
                                        <th>Thành tiền</th>
                                        <th>Tỷ lệ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_brand_car as $list)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1}}</th>
                                        <td>
                                            <div class="">{{$list->brand_name}}</div>         
                                        </td>
                                        <td>
                                            <div class="luot_sua_{{$list->brand_car_id}} refresh">0</div>
                                        </td>
                                        <td>
                                            <div class="thanh_tien_{{$list->brand_car_id}} refresh">0</div>
                                        </td>
                                        <td>
                                            <div class="ty_le_{{$list->brand_car_id}} refresh_per">0%</div>
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
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@section('jquery')
    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <!-- Morris Charts JavaScript -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


    <script>
        $(document).ready(function() {
            //--------- Thống kê doanh số -----------
            $(function() {
                $("#datepicker").datepicker({
                    prevText: 'Month Previous',
                    nextText: 'Month After',
                    dateFormat: "yy-mm-dd"
                });
            });

            $(function() {
                $( "#datepicker2" ).datepicker({
                    prevText: 'Month Previous',
                    nextText: 'Month After',
                    dateFormat: "yy-mm-dd"
                });
            });

            chart30daysorder();
            var chart = new Morris.Line({
                element: 'myfirstchart',
                lineColors:['#fcc468','#6bd098'],
                labels: ['Total Income', 'Total Profit'],
                hideHover: 'auto',
                parseTime: false,
                fillOpacity: 0.6,
                behaveLikeLine: true,
                resize: true,
                pointFillColors:['#ffffff'],
                pointStrokeColors: ['black'],
                xkey: 'date',
                ykeys: ['total', 'profit'],
            });

            function chart30daysorder() {
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/admin/order_date')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {_token: _token},
                    success: function(data) {
                        chart.setData(data);
                    },error:function(){ 
                        alert("error!!!!");
                    }
                })
            }

            $('#btn-dashboard').click(function(){
                var _token = $('input[name="_token"]').val();
                var from_date = $('#datepicker').val();
                var to_date = $('#datepicker2').val();
                // alert(from_date);
                $.ajax({
                    url:"{{url('/admin/fillter')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {from_date: from_date, to_date: to_date, _token: _token},
                    success: function(data) {
                        chart.setData(data);
                    },error:function(){ 
                        console.log("error!!!!");
                    }
                })
            });

            $('.select_val').change(function() {
                var btn_value = $(this).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/admin/fillter_select')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {btn_value: btn_value, _token: _token},
                    success: function(data) {
                        chart.setData(data);
                    }
                })
            });
            // ---------------------------------------
            function formatNumber (num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
            }
            // --------- Chi tiết doanh thu ----------
            $('#loc_kq_ct').click(function(event) {
                var _token = $('input[name="_token"]').val();
                var get_month = $('#month').val();
                // alert(get_month);
                 $.ajax({
                    url:"{{url('/admin/total_profit')}}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {get_month: get_month, _token: _token},
                    success: function(response) {
                        console.log(response);
                        var income = 0;
                        var profit = 0;
                        $.each(response[0], function(key, val) {
                            income += val.bill_money_receive; 
                            profit += val.bill_money_profit; 
                        });
                        $('#total_income').html(formatNumber(income));
                        $('#total_profit').html(formatNumber(profit));

                        var count = {};
                        $.each(response[1], function(key, val) {
                            // console.log(val);
                            count[val.brand_car_id] = (count[val.brand_car_id]||0) + 1;
                            // console.log( count[val.brand_car_id]);
                        });
                        // console.log(count);

                        var groups = {};
                        var sum = 0;
                        for (var i = 0; i < response[1].length; i++) {
                            var groupName = response[1][i].brand_car_id;
                            // console.log(groups[groupName]);
                            if (!groups[groupName]) {
                                groups[groupName] = [];
                            }

                            groups[groupName].push(response[1][i].note_repair_total);
                        }
                        // console.log(groups);
                        // console.log(Object.keys(groups));

                        for(var i = 0; i < response[2].length; i++) {
                            $('.luot_sua_' + response[2][i].brand_car_id).html(count[response[2][i].brand_car_id]);
                            
                            // sum += groups[response[2][i].brand_car_id][i]
                            // console.log(groups[response[2][i].brand_car_id]);
                            if (groups[response[2][i].brand_car_id]) {
                                var a = (groups[response[2][i].brand_car_id]).length;
                                // console.log((groups[response[2][i].brand_car_id]).length);
                                for (var j = 0; j < a; j++) {
                                    sum += groups[response[2][i].brand_car_id][j];
                                }
                                // console.log(sum);
                                $('.thanh_tien_' + response[2][i].brand_car_id).html(formatNumber(sum));
                                sum = 0;
                            }
                            // console.log($('.luot_sua_' + response[2][i].brand_car_id));
                            // console.log(response[2][i]);

                            if (groups[response[2][i].brand_car_id]) {
                                var a = (groups[response[2][i].brand_car_id]).length;
                                // console.log((groups[response[2][i].brand_car_id]).length);
                                for (var j = 0; j < a; j++) {
                                    sum += groups[response[2][i].brand_car_id][j];
                                }
                                // console.log(sum);
                                var temp = (sum/income) * 100;
                                percent = temp.toFixed(2)
                                $('.ty_le_' + response[2][i].brand_car_id).text(percent + '%');
                                sum = 0;
                            }
                        }
                    }
                })
            });

            $('#clear').click(function(event) {
                $('.refresh').html('0');
                $('.refresh_per').html('0%');
            });
            // ---------------------------------------
        });
    </script>
@endsection

@stop
