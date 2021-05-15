@extends('admin.layout')

@section('css')
    <style>
        #error {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
        .ho-ten-dem {
            width: 35%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
    </style>
@endsection

@section('content')
<div class="container" id="nhanxet">
<form action="{{ route('nhanvien.addAdmin') }}" class="container-fluid " method="post" onsubmit="return validate();">
        {{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle"></div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Mã Nhân Viên</label>
			<input name="manv" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mã Nhân Viên">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Mật Khẩu</label>
			<input name="matkhau" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Mật Khẩu">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Họ - Tên đệm:</label>
			<input name="tendem" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Họ - Tên đệm">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-0">
			<label for="exampleFormControlInput1" style="color: #fff">Tên</label>
			<input name="ten" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tên Nhân Viên">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
			</br>
			<button name="themnhanvien" type="submit" class="btn btn-primary">Thêm Nhân Viên</button>
		</div>
	</form>
	<?php

	if(isset($_POST['themnhanvien']))
	{
		$dem=-1;	
		$sql1 = "SELECT * FROM nhanvien ORDER BY id DESC";
		$result1 = mysqli_query($conn, $sql1);
		
		if(empty($_POST['manv']) || empty($_POST['matkhau'])|| empty($_POST['tendem'])|| empty($_POST['ten']) ) $dem=0;
		else if (mysqli_num_rows($result1) > 0)
			{
   					 // output data of each row
				while($row = mysqli_fetch_assoc($result1))
				{	
					if($row['usename']==$_POST['manv'])
					{
						
						$dem=1;
						break;
					}	
				}
			}

		if($dem!=1 && $dem!=0){

			$them = "INSERT INTO nhanvien(manv,matkhau, tendem,ten) VALUES ('".$_POST['tendem']."' ,'".$_POST['ten']."' , '".$_POST['manv']."' , '".$_POST['matkhau']."')";
			$luu = mysqli_query($conn, $them);			
			$dem=2;
		}
		if($dem==2){
			echo"<div class='col-xs-12 col-sm-12 col-md-4 col-md-offset-8' style='color: #fff; font-size: 15px; font-style:Italic'>Thành Công.</div>";

		}else if($dem==1){
			echo"<div class='col-xs-12 col-sm-12 col-md-4 col-md-offset-8' style='color: red; font-size: 15px; font-style:Italic'>Tài khoản đã tồn tại.</div>";

		}else if($dem==0){
			?>
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-8" style="color: red; font-size: 15px; font-style:Italic">Các thông tin không được để trống.</div>

			<?php
		}
	}

	?>
</div>
<div class="container" style="background:#f5f6fa">
  <h3 style="color: red; font-weight: bold; font-style:Italic">Danh Sách Nhân Viên: </h3>
   <div class="table-responsive">          
  <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center">STT</th>
        <th style="text-align:center">Mã Nhân Viên</th>
        <th style="text-align:center">Tên Nhân Viên</th>
        <th colspan="2" style="text-align:center" >Xử lý</th>
      </tr>
    </thead>
    <tbody>
	@php $i = 1; @endphp
    @foreach($data as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->manv }}</td>
            <td >{{ $item->ten }}</td>
            <td >
			<a class="btn btn-danger" href="{{asset('admin/xoa-nhanvien/'.$item->manv) }}" onclick="return confirm('Bạn có muốn xóa {{$item->ten}}?')"> Xóa</a>
			</td>
			<td>
                       
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sua_{{ $item->manv }}">
                            Sửa
                        </button>
                        
                       
                        <form action="{{ asset('admin/sua-nhanvien') }}" method="post">
                            @csrf
                        <!-- Modal -->
                            <div class="modal fade" id="sua_{{ $item->manv }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <label for="">Mã NV :</label>
                                       <h5 class="modal-title" id="exampleModalLabel" >{{$item->manv}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="">
                                        <input type="text" name="manv" class="" value="{{$item->manv}}" hidden>
                                    </div>
                                    <div class="ho-ten-dem">
                                        <label for=""> Họ Tên Đệm :</label>
                                        <input class="form-control" name="tendem" type="text" value="{{$item->tendem}}">
                                    </div>
                                    
                                    
                                    <div class="">
                                        <label for="">Tên :
                                        <input class="form-control" name="ten" type="text" value="{{$item->ten}}"></label>
                                    </div>
    
                                    
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form> 
                    </td>
			</td>
			


        </tr>
        @php $i++; @endphp
    @endforeach
    	
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
@endsection