<section>
    <div class="container">
		<div class="user row bg-white mt-3 mb-3">
			<div class="col-sm-8 offset-2">
				<div class="user-info mt-3">
                    <h1 class="">Thông tin khách hàng</h1>
                    <div class="info">
						<strong>Khách hàng: </strong>
						{{$info->cus_name}}
					</div>
					<div class="info">
						<strong>Email: </strong>
						{{$info->cus_mail}}
					</div>
					<div class="info">
						<strong>Điện thoại: </strong>
						{{$info->cus_phone}}
					</div>
					<div class="info">
						<strong>Địa chỉ: </strong>
						{{$info->cus_address}}
					</div>
					<div class="info">
						<strong>Biển số xe: </strong>
						{{$info->car_license_plate}}
					</div>
					<div class="info">
						<strong>Trạng thái: </strong>
						@if($status > 0)
							Đang sửa chữa hoặc còn nợ
						@elseif($status == 0)
							Đã hoàn tất thanh toán
						@endif
					</div>
                </div>	
               
                <div class="user-cart" style="padding: 20px 0;">
					<h1>Hóa đơn mua hàng</h1>							
					<table class="table table-bordered" border="1">
						<tr style="font-weight: bold;">
							<td>Tên phụ tùng</td>
							<td>Giá</td>
							<td>Số lượng</td>
							<td>Loại tiền công</td>
							<td>Giá</td>
						</tr>
						@foreach($info_car as $item)
						<tr>
							<td>{{$item->store_spare_name}}</td>
							<td>{{number_format($item->store_cost,0,',','.')}} VNĐ</td>
							<td>{{$item->detail_amount_spare}}</td>
							<td>{{$item->wage_name}}</td>
							<td>{{number_format($item->wage_cost,0,',','.')}} VNĐ</td>
						</tr>
						@endforeach
						<tr>
							<th colspan="3">Tổng tiền phụ tùng:</th>
							<th colspan="2">{{number_format($total->note_repair_accessary,0,',','.')}} VNĐ</th>
						</tr>
						<tr>
							<th colspan="3">Tổng tiền công:</th>
							<th colspan="2">{{number_format($total->note_repair_wage,0,',','.')}} VNĐ</th>
						</tr>
						<tr>
							<th colspan="3">Tổng tiền:</th>
							<th colspan="2">{{number_format($total->note_repair_total,0,',','.')}} VNĐ</th>
						</tr>
						<tr>
							<th colspan="3">Tiền nợ:</th>
							<th colspan="2">{{number_format($debt,0,',','.')}} VNĐ</th>
						</tr>
						<tr>
							<th colspan="3">Đã thanh toán:</th>
							<th colspan="2">{{number_format($paid,0,',','.')}} VNĐ</th>
						</tr>
						
					</table>
				</div>
				<div class="mb-4">
                    <h2>Quý khách đã đặt thanh toán thành công!</h2>
                    <h3>Thời gian bảo hành của vật tư là 12 tháng kể từ ngày xuất hóa đơn.</h3>
                    <h3>Cám ơn quý khách đã sử dụng sản phẩm của công ty chúng tôi!</h3>
				</div>				
			</div>
		</div>
    </div>
</section>
