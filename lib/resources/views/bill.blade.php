@extends('master')
@section('title', 'Phiếu thu tiền')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_dl">
                        <div class="bill">
                            <h1 class="title">Lập phiếu thu tiền</h1>
                            @if (session('status'))
                                <div class="alert alert-danger text-center" style="font-weight: 500; font-size: 16px">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('status') }}
                                </div>
                            @elseif(session('succsess'))
                                <div class="alert alert-success text-center" style="font-weight: 500; font-size: 16px">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('succsess') }}
                                </div>
                            @endif
                            <div class="box">
                                <form method="post">
                                    <div class="input-group">
                                        <div class="left">
                                            <div class="txt_field">
                                                <select class="inputtion" name="biensoxe" id="biensoxe" required>
                                                    <option value=""></option>
                                                    @foreach ($list_car as $list)
                                                        <option value="{{ $list->car_license_plate }}">
                                                            {{ $list->car_license_plate }}</option>
                                                    @endforeach
                                                </select>
                                                <span></span>
                                                <label>Biển số xe</label>
                                            </div>
                                            <div class="txt_field">
                                                <input type="number" type="number" id="phutung" name="phutung" required>
                                                <span></span>
                                                <label>Tổng phụ tùng</label>
                                            </div>
                                            <div class="txt_field">
                                                <input type="number" type="number" id="tiencong" name="tiencong" required>
                                                <span></span>
                                                <label>Tổng tiền công</label>
                                            </div>
                                            <div class="txt_field">
                                                <input type="number" id="tienno" name="tienno" required>
                                                <span></span>
                                                <label>Tiền nợ</label>
                                            </div>
                                            <div class="txt_field">
                                                <input type="number" id="tongtien" name="tongtien" required>
                                                <span></span>
                                                <label>Thành tiền</label>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="txt_field">
                                                <div class="avail-field" id="ngaysua"> Ngày thu tiền: <span id="date"
                                                        style="padding-left: 5px; color: #2691d9;">{{ $current_date }}</span>
                                                </div>
                                            </div>
                                            <div class="txt_field">
                                                <div class="avail-field" id="hovaten"> Họ tên: <span style="color: #2691d9"
                                                        id="info_name" class="auto-field"></span></div>
                                            </div>
                                            <div class="txt_field">
                                                <div class="avail-field" id="sodienthoai"> Số điện thoại: <span
                                                        style="color: #2691d9" id="info_phone" class="auto-field"></span>
                                                </div>
                                            </div>
                                            <div class="txt_field">
                                                <div class="avail-field"> Địa chỉ: <span style="color: #2691d9"
                                                        id="info_address" class="auto-field"></span></div>
                                            </div>
                                            <div class="txt_field">
                                                <input type="number" id="sotienthu" name="sotienthu" required>
                                                <span></span>
                                                <label>Số tiền thu</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <div>
                                            <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                                name="lapphieuthutien" value="Lập phiếu thu tiền" id="luuphieu">
                                        </div>
                                        <!-- <div>
                                    <input id="btn-clear" type="reset" class="btn" value="Clear">
                                 </div> -->
                                        <div class="btn-sa">
                                            <!-- <input id="btn-clear" type="button" class="btn" value="Clear"> -->
                                            <a id="btn-clear" href="{{ asset('admin/bill') }}">Clear</a>
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
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
    <!-- /#page-wrapper -->

@section('jquery')
    <script>
        // function formatNumber(num) {
        //     return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
        // }

        function formatNumber(nStr) {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
        $(document).ready(function() {
            $('#biensoxe').change(function(event) {
                /* Act on the event */
                // alert($('#chonsp').val());
                var _token = $('input[name="_token"]').val();
                var value = $('#biensoxe').val();
                // alert(value);
                $.ajax({
                    url: "{{ url('admin/bill/get_plate') }}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {
                        _token: _token,
                        value: value
                    },
                    success: function(response) {
                        // $('#result').html(response);
                        if (response == false) {
                            alert("Xe đã được sửa chữa, không còn trong gara.");
                        } else {
                            var info_cus = JSON.parse(response);
                            $('#phutung').val(info_cus[0].note_repair_accessary);
                            $('#tiencong').val(info_cus[0].note_repair_wage);
                            $('#tienno').val(info_cus[0].cus_debt);
                            if (info_cus[0].cus_debt != 0) {
                                $('#tongtien').val(info_cus[0].cus_debt);
                            } else {
                                $('#tongtien').val(info_cus[0].note_repair_total);
                            }

                            $('#info_name').html(info_cus[0].cus_name);
                            $('#info_phone').html(info_cus[0].cus_phone);
                            $('#info_address').html(info_cus[0].cus_address);
                            $('#info_address').attr('title', info_cus[0].cus_address);
                        }
                        console.log(info_cus);
                    }
                })
            });
        });
    </script>
@endsection
@stop
