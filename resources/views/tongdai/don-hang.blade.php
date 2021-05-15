@extends('tongdai.layout')

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
<form action="{{ route('donhang.addTongDai') }}" class="container-fluid " method="post" onsubmit="return validate();">
        {{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle"></div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Ca</label>
			<select name="ca" class="form-control" id="exampleFormControlSelect1">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Mã Nhân Viên</label>
            <select name="ma_nv" class="form-control" id="exampleFormControlSelect1">
				@foreach($nhanvien as $nv)
				<option value="{{ $nv['manv'] }}">{{ $nv["tendem"].' '. $nv["ten"] }}</option>
				@endforeach
            </select>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Đơn hàng 1:</label>
			<input name="don_hang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Đơn hàng 1">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Giá:</label>
			<input name="gia" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Nhập Giá Đơn Hàng">
		</div>
        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Tên Kh:</label>
			<input name="khach_hang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">sdt:</label>
			<input name="sdt" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Địa chỉ:</label>
			<input name="dia_chi" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		
		
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			</br>
			<button name="them" type="submit" class="btn btn-primary" >Thêm</button>
		</div>
    </form>
	<?php

    

	if(isset($_POST['them']))
	{
		$dem=-1;	
		$sql1 = "SELECT * FROM donhang ORDER BY ID DESC";
		$result1 = mysqli_query($conn, $sql1);
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$startdate=getdate();
		$error = array();
		$ok = array();
		$gia = array();
		if($startdate['mday']<10)
  		 {
       			$dateMuon=$startdate['year']."-".$startdate['mon']."-0".$startdate['mday'];
  		 }else{
  			  $dateMuon=$startdate['year']."-".$startdate['mon']."-".$startdate['mday'];
  		 }
		if (mysqli_num_rows($result1) > 0)
			{
   					 // output data of each row
				while($row = mysqli_fetch_assoc($result1))
				{	
					if(strtotime($row['Date']) < strtotime($dateMuon) ) break;
					else{
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh1'])
						{
							$error[]=$_POST['dh1'];
						}
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh2'])
						{
							$error[]=$_POST['dh2'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh3'])
						{
							$error[]=$_POST['dh3'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh4'])
						{
							$error[]=$_POST['dh4'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh5'])
						{
							$error[]=$_POST['dh5'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh6'])
						{
							$error[]=$_POST['dh6'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh7'])
						{
							$error[]=$_POST['dh7'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh8'])
						{
							$error[]=$_POST['dh8'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh9'])
						{
							$error[]=$_POST['dh9'];
							
						}	
						if($row['MaNV']==$_POST['manv']  && $row['Date']==$dateMuon && $row['Ca']==$_POST['ca'] && $row['MaDonHang']==$_POST['dh10'])
						{
							$error[]=$_POST['dh10'];
							
						}	
					}	
				}
			}

		

		for($i=1; $i<=10; $i++)
		{
			$k=0;
			if(!empty($_POST["dh".$i]))
			{
				
				if(count($error)>0)
				{
					foreach ($error as $value) {
					if($value==$_POST["dh".$i])
					{
						 $k=-1;
						 break;
					}
					}
				}
				if(count($ok)>0 && $k!=-1){
				foreach ($ok as $value) {
					if($value==$_POST["dh".$i])
					{ 
						$k=1;
						break;
					}
				}
				}
				if($k==0)
				{
					$ok[] = $_POST["dh".$i];
					if($_POST["G".$i] != "")
						$gia[] = $_POST["G".$i];
					else $gia[] =0;
				}
					
				if($k==1) $error[]=$_POST["dh".$i];
			}
		}
		
		if(count($ok)>0)
		{
		$i=0;
		foreach ($ok as $value) {
			$tam=0;
			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang, GiaoHang, Price, MaTD) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$value."', '".$tam."', '".$gia[$i]."', '".$_SESSION['user']."')";
			$luu = mysqli_query($conn, $them);
			$i++;	
		}
		}
		$error2=array();
		if(count($error)>0)
		{
			echo "<div class='col-xs-12 col-sm-12 col-md-12 col-md-offset-0' style='color: red; font-size: 15px; font-style:Italic'>";
			foreach ($error as $value) {
					$p=0;
					if(count($error2>0))
					{
						foreach ($error2 as $value2) {
							if($value==$value2)
								$p=1;
						}
					}
					if($p==0)
					{
						echo "[".$value."],";
						$error2[]=$value;
					}
					
				}
			echo "Các mã đơn hàng này bị trùng.</div>";
		}
		if(count($ok)>0 && count($ok)<10)
		{
			echo "<div class='col-xs-12 col-sm-12 col-md-12 col-md-offset-0' style='color: #fff; font-size: 15px; font-style:Italic'>";
			foreach ($ok as $value) {
					
						echo "[".$value."],";				
				}
			echo "Các mã đơn hàng này đã được thêm.</div>";
		}else if(count($ok)==10) echo"<div class='col-xs-12 col-sm-12 col-md-4 col-md-offset-8' style='color: #fff; font-size: 15px; font-style:Italic'>Tất Cả Đã Thêm Thành Công.</div>";
/*
		if($d1!=1 && !empty($_POST['dh1'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh1']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=2 && !empty($_POST['dh2'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh2']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=3 && !empty($_POST['dh3'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh3']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=4 && !empty($_POST['dh4'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh4']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=5 && !empty($_POST['dh5'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh5']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=6 && !empty($_POST['dh6'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh6']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=7 && !empty($_POST['dh7'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh7']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=8 && !empty($_POST['dh8'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh8']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=9 && !empty($_POST['dh9'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh9']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($d1!=10 && !empty($_POST['dh10'])){

			$them = "INSERT INTO donhang(Date,Ca, MaNV, MaDonHang) VALUES ('".$dateMuon."' ,'".$_POST['ca']."' , '".$_POST['manv']."' , '".$_POST['dh10']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}*/
		/*if($dem==2){
			echo"<div class='col-xs-12 col-sm-12 col-md-4 col-md-offset-8' style='color: #fff; font-size: 15px; font-style:Italic'>Thành Công.</div>";

		}else if($dem==1){
			echo"<div class='col-xs-12 col-sm-12 col-md-4 col-md-offset-8' style='color: red; font-size: 15px; font-style:Italic'>Tài khoản đã tồn tại.</div>";

		}else if($dem==0){
			?>
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-8" style="color: red; font-size: 15px; font-style:Italic">Các thông tin không được để trống.</div>
		*/
			//<?php
		//}
	}

	?>
</div>
@endsection