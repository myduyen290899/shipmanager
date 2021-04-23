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
<div class="container" style="background:#f5f6fa">
  <h3>Danh sách ứng tuyển</h3>
   <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align:center">STT</th>
        <th style="text-align:center">Tên</th>
        <th style="text-align:center">Tuổi</th>
        <th style="text-align:center">Trình độ</th>
        <th style="text-align:center">Nơi Ở</th>
        <th style="text-align:center">Ngày Ứng Tuyển</th>
        <th>Xử Lý</th>
      </tr>
    </thead>
    <tbody>
    @php $i = 1; @endphp
    @foreach($data as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->tuoi }}</td>
            <td >{{ $item->trinhdo }}</td>
            <td >{{ $item->diachi }}</td>
            <td>{{ date("d-m-Y",strtotime($item->created_at)) }}</td>
            <td ><a href='{{ asset("admin/chi-tiet/". $item["id"]) }}'>Chi Tiết </a>|<a href='{{ asset("admin/xoa-ung-vien/". $item["id"]) }}'> Xóa</a></td>
        </tr>
        @php $i++; @endphp
    @endforeach
    	
    </tbody>
  </table>
  </div>
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
            if ($('#nhan-xet').val() == '') {
                $('#error').html('Nhận xét không được để trống');
                $('#error').show();
                return false;
            }
            $('#error').hide();
        }
    </script>
@endsection