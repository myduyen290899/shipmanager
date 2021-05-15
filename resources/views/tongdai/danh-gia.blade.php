@extends('admin.layout')

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
	<form action="{{ route('danhGia.addTongDai') }}" class="container-fluid " method="post" onsubmit="return validate();">
        {{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Nhận xét về dịch vụ</div>
        <div id="error">Tên không được để trống</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Tên của bạn</label>
			<input name="ten" type="text" class="form-control" id="name" placeholder="name">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">Đánh Giá</label>
			<select name="sao" class="form-control" id="exampleFormControlSelect1">
				<option>5</option>
				<option>4</option>
				<option>3</option>
				<option>2</option>
				<option>1</option>
			</select>
		</div>


		<div class="form-group col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
			<label for="exampleFormControlTextarea1" style="color: #fff">Nhận Xét</label>
			<textarea name="nhanxet" class="form-control" id="nhan-xet" rows="3"></textarea>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			<button name="dangnhanxet" type="submit" class="btn btn-primary">Đăng Nhận Xét</button>
		</div>
	</form>
</div>
@foreach ($data as $item)
    <div class="container" id="danhanxet">
        <div class="col-xs-5 col-sm-2 col-md-1">
            <img width="100" src="{{ asset('/img/09.png') }}">
        </div>
        <div class="col-xs-7 col-sm-3 col-md-3" id="danhanxetname">
            <div style="font-weight:bold; font-size:20px">{{ $item->name }}</div>
            <div>
            @php 
                $sosao=$item->star;
                while($sosao>0)
                {
                    @endphp
                    <img width="20" src="{{ asset('img/05.png') }}">
                    @php
                    $sosao--;
                }
            @endphp
        </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-6" id="danhanxetnoidung">
        {{ $item->comment }}
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2" id="danhanxetdate">
           {{ date("d-m-Y h:i", strtotime($item->created_at)) }}
        </div>
    </div>
@endforeach
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
            if ($('#nhan-xet').val() == '') {
                $('#error').html('Nhận xét không được để trống');
                $('#error').show();
                return false;
            }
            $('#error').hide();
        }
    </script>
@endsection