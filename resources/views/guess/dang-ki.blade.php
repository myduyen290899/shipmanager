@extends('guess.layout')

@section('css')
    <style>
        #error {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
    </style>
@endsection

@section('content')
<div class="container" id="nhanxet">
	@if (session('success'))
		<div class="alert alert-success validation-error" style="margin-top: 10px">
			{{ session('success') }}
		</div>
	@endif
	@if (session('error'))
		<div class="alert alert-danger validation-error" style="margin-top: 10px">
			{{ session('error') }}
		</div>
	@endif
<form action="{{ route('dangKi.add') }}" class="container-fluid " method="post" onsubmit="return validate();">
        {{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Đăng Ký Ứng Tuyển</div>
		<div id="error">Tên không được để trống</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Tên của bạn</label>
			<input name="ten" type="text" class="form-control" id="name" placeholder="name">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2">
			<label for="exampleFormControlInput1" style="color: #fff">Tuổi</label>
			<input name="tuoi" type="text" class="form-control" id="age"  title="Tuổi vui lòng nhập số" pattern="[0-9]{1,2}" id="exampleFormControlInput1" placeholder="Age">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">Trình độ</label>
			<select name="trinhdo" class="form-control" id="trinh_do">
				<option>Đại Học</option>
				<option>Cao Đẳng</option>
				<option>12</option>
				<option>11</option>
				<option>10</option>
				<option>9</option>
				<option>Khác</option>
			</select>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Số Điện Thoại:</label>
			<input name="sdt" type="text" class="form-control" title="Số điện thoại vui lòng nhập số" pattern="[0-9]{10,11}" id="sdt" placeholder="phone">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-5 ">
			<label for="exampleFormControlInput1" style="color: #fff">Nơi ở hiện tại:</label>
			<select class="form-control" id="diachi" name="diachi">
				<option value="Trà Vinh">Trà Vinh</option>
				<option value="Vĩnh Long">Vĩnh Long</option>
				<option value="Cần Thơ">Cần Thơ</option>
				<option>Hồ Chí Minh</option>
				<option>Bến Tre</option>
				<option>Tiền Giang</option>
                <option>Sóc Trăng</option>
                <option>Long An</option>
                <option>Vĩnh Long</option>
                <option>Đồng Tháp</option>
                <option>Đồng Nai</option>
				<option>Khác - Ghi dưới phần giới thiệu</option>
			</select>
		</div>

		<div class="form-group col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
			<label for="exampleFormControlTextarea1" style="color: #fff">Giới Thiệu sơ lược về bạn:</label>
			<textarea name="noidung" class="form-control" id="noidung" rows="3"></textarea>
		</div>
		<script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
			<script type="text/javascript">
				CKEDITOR.replace( 'noidung' );
		</script>
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			<button name="guiungtuyen" type="submit" class="btn btn-primary">Gửi Ứng Tuyển</button>
		</div>
	</form>
	<?php

	?>
</div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.onload = function () {
            $('#error').hide();
        }

        function validate() {

            if ($('#name').val() == '') {
                $('#error').html('Tên không được để trống');
                $('#error').show();
                return false;
            }
            if ($('#age').val() == '') {
                $('#error').html('Tuổi không được để trống');
                $('#error').show();
                return false;
            }
			if ($('#sdt').val() == '') {
                $('#error').html('Số điện thoại không được để trống');
                $('#error').show();
                return false;
            }
            if ($('#noidung').val() == '') {
                $('#error').html('Lời giới thiệu không được để trống');
                $('#error').show();
                return false;
            }
            $('#error').hide();
			return true;
        }
    </script>
@endsection