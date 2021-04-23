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
<form action="{{ route('sukien.addAdmin') }}" class="container-fluid " method="post" onsubmit="return validate();">
        {{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Đăng Tin Tức - Sự Kiện</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Tiêu đề:</label>
			<input name="tittle" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tiêu đề event">
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<label for="exampleFormControlTextarea1" style="color: #fff">Nội dung</label>
			<!-- <select name="noidung" class="form-control" id="noidung"> -->
			<textarea name="noidung" class="form-control" id="cknhanxet" rows="12"></textarea>
			<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
			<script type="text/javascript">
				CKEDITOR.replace( 'cknhanxet' );
		</script>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			<button name="dangevent" type="submit" class="btn btn-primary">Đăng Event</button>
		</div>
	</form>
	
	
</div>
	
</body>
</html>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.onload = function () {
            $('#error').hide();
        }

        function validate() {

            if ($('#tittle').val() == '') {
                $('#error').html('Tiêu đề không được để trống');
                $('#error').show();
                return false;
            }
            if ($('#noidung').val() == '') {
                $('#error').html('Nội dung không được để trống');
                $('#error').show();
                return false;
            }
			
    </script>