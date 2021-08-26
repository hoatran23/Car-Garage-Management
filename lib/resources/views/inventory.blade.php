@extends('master')
@section('title', 'Báo cáo tồn kho')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl" style="display: flex; flex-direction: column;">
                        <div class="danhsach" style="width: 900px;top: 100px; left:10%">
                            <h1 class="title">Báo cáo tồn kho </h1>
                            <div style="font-size: 20px; text-align: center;"> Ngày báo cáo:
                                <span id="date" style="padding-left: 5px; color: #2691d9">{{ $current_date }}</span>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-danger text-center" style="font-weight: 500; font-size: 16px">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('status') }}
                                </div>
                            @elseif (session('success'))
                                <div class="alert alert-success text-center" style="font-weight: 500; font-size: 16px">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="post">
                                <div class="box">
                                    <div id="result" style="width: 1000px">
                                        <div class="top"
                                            style="display: flex; justify-content: space-around; align-items: center;">
                                            <div style="font-size: 20px; text-align: center;"> Báo cáo tháng:
                                                <input type="month" id='month' class="form-control" placeholder="Input Date"
                                                    name="month" autocomplete="off">
                                            </div>

                                            {{-- <div class="form-group col-sm-2">
                                            <label for=""></label>
                                            <input class="form-control" id="loc_kq" type="button" name="loc_kq" value="Lọc kết quả">
                                        </div> --}}
                                            <div>
                                                <div class="btn-group" style="width: auto">
                                                    <div class="btn-sa">
                                                        <input class="form-control" id="loc_kq" type="button" name="loc_kq"
                                                            value="Lọc kết quả">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <table class="text-center">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã phụ tùng</th>
                                                    <th>Tên phụ tùng</th>
                                                    <th>Tồn đầu</th>
                                                    <th>Phát sinh</th>
                                                    <th>Tồn cuối</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                @foreach ($list_spare as $list)
                                                    <tr>
                                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                                        <td>
                                                            <input type="hidden" name="id_store[]"
                                                                value="{{ $list->store_id }}">
                                                            {{ $list->store_id }}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="spare_name[]"
                                                                value="{{ $list->store_spare_name }}">
                                                            {{ $list->store_spare_name }}
                                                        </td>
                                                        <td>
                                                            <input type="number" name="ton_dau[]" value="0"
                                                                class="ton_dau_{{ $list->store_id }}">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="phat_sinh[]" value="0"
                                                                class="phat_sinh_{{ $list->store_id }}">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="ton_cuoi[]" value="0"
                                                                class="ton_cuoi_{{ $list->store_id }}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="btn-group" style="width: 100%; display: flex; justify-content: center;">
                                    <div style="display: flex; justify-content: space-around; column-gap: 20px">
                                        <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                            name="lapbaocao" value="Lập báo cáo" id="lapbaocao">
                                        <a style="font-size: 17px; font-weight: 600;"
                                            href="{{ asset('admin/inventory/detail') }}">Chi tiết báo cáo các tháng</a>
                                    </div>
                                </div> --}}
                                <div class="btn-group">
                                    <div>
                                        <input class="btn" type="submit" name="lapbaocao" value="Lập báo cáo" id="lapbaocao">
                                    </div>
                                    <div class="btn-sa">
                                        <a style="font-size: 16px; opacity: 0.9" href="{{ asset('admin/inventory/detail') }}">Chi tiết báo cáo các tháng</a>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                            </form>
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

@section('jquery')
    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $(function() {
                $("#datepicker").datepicker({
                    prevText: 'Month Previous',
                    nextText: 'Month After',
                    dateFormat: "yy-mm-dd"
                });
            });

            $('#loc_kq').click(function(event) {
                // alert($('#month').val());
                var _token = $('input[name="_token"]').val();
                var get_month = $('#month').val();

                // alert(get_month);
                $.ajax({
                    url: "{{ url('admin/inventory/total') }}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {
                        _token: _token,
                        get_month: get_month
                    },
                    success: function(response) {
                        // ----------- ý tưởng ----------
                        // ý tưởng 1:
                        // tồn đầu: sẽ bằng tồn cuối của tháng trước, nếu là tháng đầu tiên thì tồn đầu sẽ  bằng 0
                        // tồn cuối: sẽ bằng số lượng hiện còn lại trong kho, nếu là tháng đầu tiên sử dụng thì tồn cuối sẽ bằng số phụ tùng nhập vào kho
                        // phát sinh: 
                        //     + Nếu là tháng đầu tiên thì phát sinh sẽ bằng số lượng phụ tùng nhập vào
                        //     + Nếu là tháng thứ 2 trờ đi:
                        //         + Nếu sử dụng hết phụ tùng trong kho thì phát sinh sẽ bằng số phụ tùng nhập vào + số phụ tùng tồn đầu
                        //         + Nếu chưa sử dụng hết phụ tùng trong kho thì phát sinh sẽ bằng 0 (do kh có nhập thêm gì hết)

                        // ý tưởng 2:
                        // tồn đầu: sẽ bằng tồn cuối của tháng trước, nếu là tháng đầu tiên thì tồn đầu sẽ  bằng 0
                        // tồn cuối: sẽ bằng số lượng hiện còn lại trong kho, nếu là tháng đầu tiên sử dụng thì tồn cuối sẽ bằng số phụ tùng nhập vào kho
                        // phát sinh: 
                        //     + Nếu là tháng đầu tiên thì phát sinh sẽ bằng số lượng phụ tùng nhập vào
                        //     + Nếu là tháng thứ 2 trờ đi:
                        //        + Phát sinh sẽ bằng tồn đầu trừ cho tồn cuối nếu chưa sử dụng hết tồn đầu (nghĩa là không có nhập thêm phụ tùng vào kho)
                        //        + Phát sinh = (tồn đầu) + (số lượng nhập vào kho)  + (số lượng nhập vào kho - tồn cuối) trường hợp xài hết trong kho và nhập thêm phụ tùng vào kho
                        // ------------------------------
                        console.log(response);
                        // Trường hợp là tháng đầu tiên sử dụng ứng dụng
                        if (response == 0) {
                            alert('Tháng '+ get_month + ' đã được báo cáo!!!');
                        } else if (response == 1) {
                            alert('Tháng '+ get_month + ' chưa đến mà!!!');
                        } else {

                            // ----------------- Ý tường 1: -----------------
                            // if (response[0].length == 0) {
                            //     $.each(response[1], function(key, value) {
                            //         $('.ton_dau_' + (value.store_id)).val(0);
                            //     });

                            //     $.each(response[2], function(key, value) {
                            //         $('.phat_sinh_' + (value.import_spare_id)).val(value.import_quantity);
                            //     });

                            //     $.each(response[1], function(key, value) {
                            //         $('.ton_cuoi_' + (value.store_id)).val(value.store_quantity_avail);
                            //     });
                            // } else {
                            //     var arr_1 = [];
                            //     $.each(response[0], function(key, value) {
                            //         $('.ton_dau_' + (value.inven_spare_id)).val(value.inven_last);
                            //         arr_1.push(value.inven_last);
                            //     });
                            //     // console.log(arr_1);

                            //     var arr_2 = [];
                            //     $.each(response[1], function(key, value) {
                            //         $('.ton_cuoi_' + (value.store_id)).val(value.store_quantity_avail);
                            //         arr_2.push(value.store_quantity_avail);
                            //     });
                            //     // console.log(arr_2);

                            //     var length = arr_1.length;
                            //     // console.log(length);

                            //     for (var i = 0; i < length; i++) {
                            //         // console.log(response[1][i]);
                            //         // console.log(response[2][i]);
                            //         if (response[2][i]) {
                            //             for (var j = 0; j < length; j++) {
                            //                 if (response[2][i].import_spare_id == response[1][j].store_id) {
                            //                     // alert("bang nhau");
                            //                     // console.log(response[2][i].import_spare_id, response[1][j].store_id);
                            //                     $('.phat_sinh_' + (response[2][i].import_spare_id)).val((arr_1[j] + response[2][i].import_quantity));
                            //                 }
                            //             }
                            //         }
                            //     }
                            // }
                            // ---------------------------------------------

                            // ----------------- Ý tưởng 2 -----------------
                            if (response[0].length == 0) {
                                $.each(response[1], function(key, value) {
                                    $('.ton_dau_' + (value.store_id)).val(0);
                                });

                                $.each(response[2], function(key, value) {
                                    $('.phat_sinh_' + (value.import_spare_id)).val(value.import_quantity);
                                });

                                $.each(response[1], function(key, value) {
                                    $('.ton_cuoi_' + (value.store_id)).val(value.store_quantity_avail);
                                });
                            } else {
                                var arr_1 = [];
                                $.each(response[0], function(key, value) {
                                    $('.ton_dau_' + (value.inven_spare_id)).val(value.inven_last);
                                    arr_1.push(value.inven_last);
                                });
                                // console.log(arr_1);

                                var arr_2 = [];
                                $.each(response[1], function(key, value) {
                                    $('.ton_cuoi_' + (value.store_id)).val(value.store_quantity_avail);
                                    arr_2.push(value.store_quantity_avail);
                                });
                                // console.log(arr_2);

                                var length = arr_1.length;
                                // console.log(length);
                                if (response[2].length == 0) {
                                    for (var i = 0; i < length; i++) {
                                        $('.phat_sinh_' + (response[1][i].store_id)).val((arr_1[i] - arr_2[i]));
                                        // console.log(response[1].store_id , ': ', arr_1[i] - arr_2[i]);
                                    }
                                } else {
                                    for (var i = 0; i < length; i++) {
                                        // console.log(response[1][i]);
                                        // console.log(response[2][i]);
                                        $('.phat_sinh_' + (response[1][i].store_id)).val((arr_1[i] - arr_2[i]));

                                        if (response[2][i]) {
                                            for (var j = 0; j < length; j++) {
                                                if (response[2][i].import_spare_id == response[1][j].store_id) {
                                                    // alert("bang nhau");
                                                    // console.log(response[2][i].import_spare_id, response[1][j].store_id);
                                                    $('.phat_sinh_' + (response[2][i].import_spare_id)).val((arr_1[j] + response[2][i].import_quantity + (response[2][i].import_quantity - arr_2[j])));
                                                }
                                            }
                                        }
                                    }
                                }

                            }
                            // ---------------------------------------------
                        }

                    }
                })
            });
        });
    </script>
@endsection
@stop