@extends('master')
@section('title', 'Nhập vật tư phụ tùng vào kho')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl">
                    <div class="bill">
                        <h1 class="title">Nhập vật tư phụ tùng vào kho</h1>
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
                        <div class="box">
                            <form method="post">
                                <div class="input-group">
                                    <div class="left">
                                        <div class="txt_field">
                                            <select class="inputtion" name="tenVTPT" id="tenVTPT" required>
                                                <option value=""></option>
                                                @foreach($list_spare_part as $list)
                                                <option value="{{$list->store_id}}">{{$list->store_spare_name}}</option>
                                                @endforeach 
                                            </select>
                                            <span></span>
                                            <label>Tên Vật tư phụ tùng</label>
                                        </div>
                                        <div class="txt_field">
                                            <div class="avail-field"> Đơn giá: <span id="price" style="padding-left: 5px;"></span></div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="txt_field">
                                            <input type="number" name="quantity" id="soluong" required>
                                            <span></span>
                                            <label>Số lượng</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="date" name="date" id="date" required>
                                            <span></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div>
                                        <input style="width: auto; padding: 0 20px;" class="btn" type="submit"
                                            name="luuphieu" value="Nhập VTPT" id="capnhat">
                                    </div>
                                    <div>
                                        <a href="{{asset('admin/import/detail')}}">Lịch sử nhập</a>
                                    </div>
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
<!-- /#page-wrapper -->
@section("jquery")
<script>
    $(document).ready(function() {
        $("#tenVTPT").change(function(event) {
            /* Act on the event */
            var _token = $('input[name="_token"]').val();
            var id_spare_store = $("#tenVTPT").val();
            var amount = $("#soluong").val();

             $.ajax({    
                url:"{{url('admin/import/insert_import')}}",
                method: "POST",
                // dataType: "JSON",
                data: {_token: _token, id_spare_store: id_spare_store, amount: amount},
                success: function(response) {
                    var info_price = JSON.parse(response);
                    $('#price').html(info_price[0].store_cost);
                    // $('#info_phone').html(info_cus[0].cus_phone);
                    // $('#info_address').html(info_cus[0].cus_address);
                    // console.log(info_price);
                }
            })
        });
    });
</script>
@endsection
@stop