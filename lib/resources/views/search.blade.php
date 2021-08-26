@extends('master')
@section('title', 'Tra cứu thông tin')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
 <div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="main_dl">
             <div class="tracuu">
                <h1 class="title">Tra cứu</h1>
                <div class="box">
                   <form method="post">
                      <div class="input-group">
                         <div class="left">
                            <div class="txt_field">
                               <select name="search-for" id="search-for" required>
                                  <option value=""></option>
                                  <option value="biensoxe">Biển số xe</option>
                                  <option value="hieuxe">Hiệu xe</option>
                                  <option value="tenkhachhang">Tên khách hàng</option>
                                  <option value="sdt">Số điện thoại</option>
                               </select>
                               <span></span>
                               <label>Tìm kiếm theo</label>
                            </div>
                            <div class="txt_field">
                               <input type="text" name="biensoxe" id="biensoxe" class="inputtion" autocomplete="off" required>
                               <span><div id="box_bienso" style="position: absolute;"></div></span>
                               <label>Biển số xe</label>
                            </div>
                            <div class="txt_field">
                               <input type="text" name="hieuxe" id="hieuxe" class="inputtion" autocomplete="off" required>
                               <span><div id="box_hieuxe" style="position: absolute;"></div></span>
                               <label>Hiệu xe</label>
                            </div>
                         </div>
                         <div class="right">
                            <div style="height:72px;">
                            </div>
                            <div class="txt_field">
                               <input type="text" name="tenkhachhang" id="tenkhachhang" class="inputtion" autocomplete="off" required>
                               <span><div id="box_tenkhachhang" style="position: absolute;"></div></span>
                               <label>Tên khách hàng</label>
                            </div>
                            <div class="txt_field">
                               <input type="number" name="sdt" id="sdt" class="inputtion" required> 
                               <span><div id="box_sdt" style="position: absolute;"></div></span>
                               <label>Số điện thoại</label>
                            </div>
                         </div>
                      </div>
                      <div class="btn-group">
                         <div>
                            <input style="width: auto; padding: 0 30px;" class="btn" type="button" name="timkiem" value="Tra cứu" id="timkiem">
                         </div>
                         <div class="btn-sa">
                            <!-- <input id="btn-clear" type="button" class="btn" value="Clear"> -->
                            <a id="btn-clear" href="{{asset('admin/search')}}">Clear</a>
                         </div>
                      </div>
                      <div class="btn-group">
                      </div>
                      {{csrf_field()}}
                   </form>
                </div>
                <div id="result">
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
@section('javascript')
  <script>
        // -----------------------------------------------------------------------

        let search = document.getElementById('search-for');
        let biensoxe = document.getElementById('biensoxe');
        let tenkhachhang = document.getElementById('tenkhachhang');
        let hieuxe = document.getElementById('hieuxe');
        let sdt = document.getElementById('sdt');
        let reset = document.getElementById('btn-clear');
        let timkiem = document.getElementById('timkiem');
        let inputtion = document.getElementsByClassName('inputtion');

        reset.addEventListener('click', () => {
            document.getElementsByTagName('form')[0].reset();
            addDisable();
            biensoxe.classList.remove('disable');
            biensoxe.removeAttribute('disabled');
            tatTimKiemClear();
        })

        console.log(search.value);
        search.addEventListener('change', () => {
            changeType();
        })

        function addDisable() {
            biensoxe.classList.add('disable');
            tenkhachhang.classList.add('disable');
            hieuxe.classList.add('disable');
            sdt.classList.add('disable');

            sdt.setAttribute("disabled", "");
            biensoxe.setAttribute("disabled", "");
            tenkhachhang.setAttribute("disabled", "");
            hieuxe.setAttribute("disabled", "");

            sdt.value = "";
            tenkhachhang.value = "";
            hieuxe.value = "";
            biensoxe.value = "";
        }

        function batTimKiemClear() {
            reset.classList.remove('disable');
            reset.removeAttribute('disabled');
            timkiem.classList.remove('disable');
            timkiem.removeAttribute('disabled');
        }
        function tatTimKiemClear() {
            reset.classList.add('disable');
            reset.setAttribute("disabled", "");
            timkiem.classList.add('disable');
            timkiem.setAttribute("disabled", "");
        }
        tatTimKiemClear();

        function changeType() {
            let type = search.value;
            addDisable();

            if (type == "biensoxe") {
                biensoxe.classList.remove('disable');
                biensoxe.removeAttribute('disabled');
            } else if (type == "tenkhachhang") {
                tenkhachhang.classList.remove('disable');
                tenkhachhang.removeAttribute('disabled');
            } else if (type == "hieuxe") {
                hieuxe.classList.remove('disable');
                hieuxe.removeAttribute('disabled');
            } else if (type == "sdt") {
                sdt.classList.remove('disable');
                sdt.removeAttribute('disabled');
            }
            tatTimKiemClear();
        }

        for (let i = 0; i < inputtion.length; i++) {
            inputtion[i].addEventListener('keyup', () => {
                if (inputtion[0].value !== "" || inputtion[1].value !== "" || inputtion[2].value !== "" || inputtion[3].value !== "") {
                    batTimKiemClear();
                } else {
                    tatTimKiemClear();
                }
            })
        }
    </script>
@endsection

<!-- /#page-wrapper -->
@section('jquery')
    <script>
        $(document).ready(function() {
            $(function () {
                $('#timkiem').click(function () {
                    // console.log('click');
                    $('#result').slideDown();
                });
           });

            $(document).click(function (e) {
               $(".dropdown-menu.clos").addClass('hidden');
            })

            function tu_dong_nhap($o_nhap, $hien_thi) {
                $('#'+$o_nhap).keyup(function(event) {
                    var query = $(this).val();
                    // alert(query); 
                    if (query != '' || query == 0) {
                        var _token = $('input[name="_token"]').val();
                        var type_search = $('#search-for').val();

                        $.ajax({    
                            url:"{{url('admin/search/autocomplete_search')}}",
                            method: "POST",
                            // dataType: "JSON",
                            data: {_token: _token, query: query, type_search: type_search},
                            success: function(response) {
                                console.log(response);
                                if (response != '<ul class="dropdown-menu clos" style="display: block; position: relative;"></ul>') {
                                    $('#' + $hien_thi).fadeIn();
                                    $('#' + $hien_thi).html(response);
                                } else {
                                    $('#' + $hien_thi).fadeIn();
                                    $('#' + $hien_thi).html('<ul class="dropdown-menu clos" style="display: block; position: relative; width: 100%;"><li class="li_search"><a href="#" "="">Không có trong CSDL</a></li></ul>');
                                }
                            }
                        })
                    } else {
                        $('#' + $hien_thi).fadeOut();
                    }
                });
            }

            tu_dong_nhap('biensoxe', 'box_bienso');

            $('#search-for').change(function(event) {
                /* Act on the event */
                console.log($('#search-for').val());
                if ($('#search-for').val() == 'biensoxe') {
                    tu_dong_nhap('biensoxe', 'box_bienso');
                } else if ($('#search-for').val() == 'hieuxe') {
                    tu_dong_nhap('hieuxe', 'box_hieuxe');
                } else if ($('#search-for').val() == 'tenkhachhang') {
                    tu_dong_nhap('tenkhachhang', 'box_tenkhachhang');
                } else if ($('#search-for').val() == 'sdt') {
                    tu_dong_nhap('sdt', 'box_sdt');
                } 
            });

            $(document).on('click', '#box_hieuxe .li_search', function(event) {
                event.preventDefault();
                $('#hieuxe').val($(this).text());
                $('#box_hieuxe').fadeOut();     
            });

            $(document).on('click', '#box_bienso .li_search', function(event) {
                event.preventDefault();
                $('#biensoxe').val($(this).text());
                $('#box_bienso').fadeOut();     
            });

            $(document).on('click', '#box_tenkhachhang .li_search', function(event) {
                event.preventDefault();
                $('#tenkhachhang').val($(this).text());
                $('#box_tenkhachhang').fadeOut();     
            });

            $(document).on('click', '#box_sdt .li_search', function(event) {
                event.preventDefault();
                $('#sdt').val($(this).text());
                $('#box_sdt').fadeOut();     
            });


            $('#timkiem').click(function(event) {
                var _token = $('input[name="_token"]').val();
                var type_search = $('#search-for').val();
                var keyword;
                if (type_search == 'biensoxe') {
                    keyword = $('#biensoxe').val();
                } else if (type_search == 'hieuxe') {
                    keyword = $('#hieuxe').val();
                } else if (type_search == 'tenkhachhang') {
                    keyword = $('#tenkhachhang').val();
                } else if (type_search == 'sdt') {
                    keyword = $('#sdt').val();
                }
                // alert(keyword);
                 $.ajax({    
                    url:"{{url('admin/search/post_search')}}",
                    method: "POST",
                    // dataType: "JSON",
                    data: {_token: _token, keyword: keyword, type_search: type_search},
                    success: function(response) {
                        console.log(response);
                        $("#result").html(response);
                    }
                })
            });
        });
    </script>
@endsection

@stop