@extends('master')
@section('title', 'Phiếu thu')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl">
                        <div class="note-repair">
                            <h1 class="title">Lập phiếu sửa chữa</h1>
                            <div class="box">
                                <form method="post">
                                    <div class="input-group">
                                        <div class="left">
                                            <div class="txt_field">
                                                <select name="biensoxe" id="biensoxe" required>
                                                    <option value=""></option>
                                                    <optgroup label="Xe vừa tiếp nhận">
                                                        @foreach ($list_plate_fixing as $list)
                                                            <option value="{{ $list->car_license_plate }}">
                                                                {{ $list->car_license_plate }}</option>
                                                        @endforeach
                                                    </optgroup>

                                                    <optgroup label="Xe đã hoàn thành">
                                                        @foreach ($list_plate_complete as $list)
                                                            <option value="{{ $list->car_license_plate }}">
                                                                {{ $list->car_license_plate }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                                <span></span>
                                                <label class="non-up">Biển số xe</label>
                                            </div>
                                            <div class="txt_field">
                                                <select name="vtpt" id="vtpt" required>
                                                    <option value=""></option>
                                                    @foreach ($list_spare_parts as $list)
                                                        <option id="vtpt_{{ $list->store_id }}"
                                                            value="{{ $list->store_id }}"
                                                            data-amount="{{ $list->store_quantity_avail }}"
                                                            data-cost="{{ $list->store_cost }}"
                                                            data-name="{{ $list->store_spare_name }}">
                                                            {{ $list->store_spare_name }}</option>
                                                    @endforeach
                                                </select>
                                                <span></span>
                                                <label>Vật tư phụ tùng</label>
                                            </div>
                                            <div class="txt_field">
                                                <input min="1" autocomplete="off" type="number" id="soluong" name="soluong"
                                                    required>
                                                <span></span>
                                                <label>Số lượng</label>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="txt_field">
                                                <div class="avail-field" id="ngaysua">Ngày sửa chữa: <span id="date"
                                                        style="padding-left: 5px;">{{ $date }}</span></div>
                                            </div>
                                            <div class="txt_field">
                                                <select name="tiencong" id="tiencong" required>
                                                    <option value=""></option>
                                                    @foreach ($list_wage as $list)
                                                        <option data-id="{{ $list->wage_id }}"
                                                            value="{{ $list->wage_cost }}">{{ $list->wage_name }}</option>
                                                    @endforeach
                                                </select>
                                                <span></span>
                                                <label>Tiền công</label>
                                            </div>
                                            <div class="txt_field">
                                                <div class="avail-field" style="padding: 0 5px;" id="tongtien"><span
                                                        style="width: 80px"> Tổng tiền:</span> <span
                                                        style="padding-left: 5px" id="doanhthu"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <div>
                                            <input style="width: auto; padding: 0 20px;" class="btn" type="button"
                                                id="themvaogiohang" name="themvaogiohang" value="Thêm phiếu">
                                        </div>
                                        <div>
                                            <input style="width: auto; padding: 0 20px;" class="btn" type="button"
                                                id="capnhatgia" name="capnhatgia" value="Cập nhật giá">
                                        </div>
                                        <div>
                                            <input style="width: auto; padding: 0 20px;" class="btn" type="button"
                                                name="luuphieu" value="Lưa phiếu sửa chữa" id="luuphieu">
                                        </div>
                                        <div class="btn-sa">
                                            <!-- <input id="btn-clear" type="button" class="btn" value="Clear"> -->
                                            <a id="btn-clear" href="{{ asset('admin/note_repair/delete_all') }}">Clear</a>
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            @php
                                print_r(Session::get('add_Cart'));
                            @endphp
                            <div id="result">
                                <table id="table_tren">

                                </table>
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
@section('jquery')
    <script type="text/javascript">
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
        }
        $(document).ready(function() {
            $(function() {
                $('#themvaogiohang').click(function() {
                    // console.log('click');
                    $('#result').slideDown();
                });
            });

            var temp = [];
            $('#biensoxe').change(function(event) {
                /* Act on the event */
                $("#biensoxe").prop('disabled', true);
            });

            var previous;
            var prev_val;

            $("#vtpt").focus(function() {
                prev_val = $(this).val();
                // console.log(prev_val);
                previous = $(this).find("option:selected").text();
            }).change(function() {
                if (previous != "") {
                    var conf = confirm("Bạn còn muốn thêm " + previous + " nữa không?");
                    if (conf == true) {
                        $(this).val(prev_val);
                        return false;
                    } else {
                        temp = [];
                        // alert("Đã đóng "+previous);
                        $("#vtpt_" + prev_val).prop('disabled', true);
                    }
                    // console.log(conf);
                }
                // console.log("truoc khi", previous);
                previous = $(this).find("option:selected").text();
                prev_val = $(this).val();

            });


            $("#capnhatgia").click(function(event) {
                var store_amount = $("#vtpt").find(':selected').data('amount');
                var amount = parseInt($("#soluong").val());
                $("#themvaogiohang").prop('disabled', false);
                if (store_amount >= amount) {
                    store_amount_avail = store_amount - amount;
                    console.log(store_amount_avail, amount);
                    if (temp[0] == null) {
                        // console.log("ok cho ban dau");
                        var _token = $('input[name="_token"]').val();
                        var id_store = $("#vtpt").val();
                        var wage = $("#tiencong").val();
                        var spare_part = $("#vtpt").find(':selected').data('cost');
                        var wage_id = $("#tiencong").find(':selected').data('id');
                        var id_plate = $("#biensoxe").val();
                        $.ajax({
                            url: "{{ url('admin/note_repair/total') }}",
                            method: "POST",
                            // dataType: "JSON",
                            data: {
                                _token: _token,
                                spare_part: spare_part,
                                amount: amount,
                                wage: wage,
                                id_store: id_store,
                                id_plate: id_plate,
                                wage_id: wage_id
                            },
                            success: function(response) {
                                alert('Cập nhật thành công');
                                $('#doanhthu').html(formatNumber(response));
                            }
                        })
                    } else {
                        if (temp[0] == 0) {
                            $("#themvaogiohang").prop('disabled', true); //enable
                            // alert("Thất bại. Số lượng phụ tùng trong kho đã hết. Vui lòng nhập thêm!!!");
                            $('#doanhthu').html(
                                "Thất bại. Số lượng phụ tùng trong kho đã hết. Vui lòng nhập thêm!!!");
                        } else {
                            if (amount <= temp[0]) {
                                temp[0] = temp[0] - amount;
                                // alert("ok");
                                var _token = $('input[name="_token"]').val();
                                var id_store = $("#vtpt").val();
                                var wage = $("#tiencong").val();
                                var spare_part = $("#vtpt").find(':selected').data('cost');
                                var wage_id = $("#tiencong").find(':selected').data('id');
                                var id_plate = $("#biensoxe").val();
                                $.ajax({
                                    url: "{{ url('admin/note_repair/total') }}",
                                    method: "POST",
                                    // dataType: "JSON",
                                    data: {
                                        _token: _token,
                                        spare_part: spare_part,
                                        amount: amount,
                                        wage: wage,
                                        id_store: id_store,
                                        id_plate: id_plate,
                                        wage_id: wage_id
                                    },
                                    success: function(response) {
                                        alert('Cập nhật thành công');
                                        $('#doanhthu').html(response);
                                    }
                                })
                                $("#themvaogiohang").prop('disabled', false);
                            } else {
                                $("#themvaogiohang").prop('disabled', true); //enable
                                $('#doanhthu').html(
                                    "Thất bại! Số lượng vật tư trong kho không đủ, vui lòng nhập thêm.");
                            }
                        }
                    }
                    temp.push(store_amount_avail);
                    // temp[1] = amount;
                    console.log(temp);
                } else {
                    alert('Cập nhật thành công');
                    $("#themvaogiohang").prop('disabled', true);
                    $('#doanhthu').html("Thất bại. Do số lượng nhập vào lớn hơn số lượng sẵn có.");
                    // alert("Thất bại do số lượng nhập vào lớn hơn số lượng sẵn có");
                }
            });

            $("#themvaogiohang").click(function(event) {
                /* Act on the event */
                var _token = $('input[name="_token"]').val();
                var id_store = $("#vtpt").val();
                var amount = $("#soluong").val();
                var wage = $("#tiencong").val();
                var spare_part = $("#vtpt").find(':selected').data('cost');
                var wage_id = $("#tiencong").find(':selected').data('id');
                var id_plate = $("#biensoxe").val();
                var store_amount = $("#vtpt").find(':selected').data('amount');

                var store_avail = store_amount - amount;
                // alert(id_plate);
                $.ajax({
                    url: "{{ url('admin/note_repair/addCart') }}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {
                        _token: _token,
                        spare_part: spare_part,
                        amount: amount,
                        wage: wage,
                        id_store: id_store,
                        id_plate: id_plate,
                        wage_id: wage_id,
                        store_avail: store_avail,
                        store_amount: store_amount
                    },
                    success: function(response) {
                        $('#table_tren').html(response);
                        console.log(response);
                    }
                })
            });

            $("#luuphieu").click(function(event) {
                /* Act on the event */
                var _token = $('input[name="_token"]').val();
                // alert(id_plate);
                $.ajax({
                    url: "{{ url('admin/note_repair/') }}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {
                        _token: _token
                    },
                    success: function(response) {
                        // console.log(response);  
                        if (response == true) {
                            alert("Thành công! Đơn hàng đã được ghi nhận vào hệ thống.");
                            location.reload();
                        } else {
                            alert("Đơn hàng thất bại...!");
                        }
                    }
                })
            });
        });
    </script>
@endsection
@stop
