@extends('master')
@section('title', 'Sửa quy định')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="main_dl" style="display: flex; flex-direction: column;">
					<div class="capnhat" style="left: 35%; top: 10%">
						<h1 class="title">Sửa quy định</h1>
						<div class="box">
							<form method="post">
								<div class="input-group">
									<div class="txt_field">
										<input type="text" name="name" value="{{$regu_detail->regu_name}}">
										<span></span>
										<label>Tên quy định</label>
									</div>
									<div class="txt_field">
										<input type="text" name="value" value="{{$regu_detail->regu_value}}">
										<span></span>
										<label>Mức quy định</label>
									</div>
								</div>
								<div class="btn-group">
									<div>
										<input style="width: auto; padding: 0 20px;" class="btn" type="submit"
										name="submit" value="Cập nhật">
									</div>
									<div><a href="{{asset('admin/regulation')}}">Quay lại</a></div>
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
@stop
