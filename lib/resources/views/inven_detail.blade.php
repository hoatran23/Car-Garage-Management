@extends('master')
@section('title', 'Báo cáo tồn kho')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_dl" style="display: flex; flex-direction: column;">
                    <div class="danhsach" style="width: 1000px;top: 100px; left:10%">
                        <h1 class="title">Tra cứu báo cáo tồn kho </h1>
                        <div class="box" style="display: flex; flex-direction: column; ">
                            <form method="post" style="display: flex; justify-content: space-around; align-items: center;">
                                <div class="form-group" style="margin: 0; text-align: center;">
                                    <label for="">Ngày báo cáo</label>
                                    <input type="month" class="form-control" id="date" placeholder="Input Date" name="date" autocomplete="off">
                                </div>
                                <div class="form-group" style="margin: 0; display: flex;">
                                    <input style="width: auto; padding: 0 20px; margin-right: 10px" class="btn" type="button" name="tra_cuu" value="Tra cứu" id="tra_cuu">
                                    <div class="btn-sa">
                                        <a href="{{asset('admin/inventory')}}">Quay lại</a>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                            <div id="result" style="width: 960px; margin: auto;">
                               
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
</div>
@section('jquery')
<script>
    $(document).ready(function() {
        $('#tra_cuu').click(function(event) {
            var get_date = $('#date').val();
            var _token = $('input[name="_token"]').val();
            // alert(get_date);
            $.ajax({    
                url:"{{url('admin/inventory/detail')}}",
                method: "POST",
                // dataType: "JSON",
                data: {_token: _token, get_date: get_date},
                success: function(response) {
                    console.log(response);
                    if (response == '<table class="text-center"> <thead> <tr> <th>STT</th> <th>Mã phụ tùng</th> <th>Tên phụ tùng</th> <th>Tồn đầu</th> <th>Phát sinh</th> <th>Tồn cuối</th> </tr> </thead> <tbody></tbody></table') {
                        alert('Không có dữ liệu về báo cáo tồn kho!!!');
                    } else {
                        $('#result').html(response);
                    }
                }
            })
        });
    });
</script>
@endsection
@stop