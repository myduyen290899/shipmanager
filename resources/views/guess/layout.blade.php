   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon"  href="logo4.ico">
<title>Shipper Trà Vinh</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/css/style.css') }}">

<script src="{{ asset('jquery/jquery.js') }}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
@yield('css')
<body>
	
	<div id="container-fluid">
		<header class="container" id="headbody">
			<nav class="navbar navbar-default" role="navigation">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php" id="logo">
						<img width="150" src="{{ asset('img/logo4.') }}png">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">

					<ul class="nav navbar-nav navbar-right" id="menutren">
						<li><a href="{{ asset('/') }}">Trang Chủ</a></li>      
						<li><a href="{{asset('/danh-gia')}}">Đánh Giá</a></li>
						<li><a href="{{asset('/dang-ki')}}">Đăng Ký Tuyển Dụng</a></li>	
						<li><a href="{{asset('/dang-nhap')}}">Đăng Nhập</a></li>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->

				</nav>
			</head>
		</div> <!-- header -->

		@yield('content')
	@yield('js')
</body>
</html>