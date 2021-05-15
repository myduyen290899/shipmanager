@extends('admin.layout')

@section('css')

@endsection

@section('content')
<div class="container" id="danhanxet" style="background: #f5f6fa">
    <div class="col-xs-5 col-sm-2 col-md-1" style="padding: 20px;">
        <img width="100" src="{{ asset('img/09.png') }}">
    </div>
    <div class="col-xs-7 col-sm-3 col-md-3" id="danhanxetname" style="padding-left:40px">
        <div style="font-size:20px"><strong>Tên: </strong>{{ $data["name"] }}</div>
        <div style=" font-size:20px">	<strong>Tuổi: </strong>{{ $data["tuoi"] }}</div>
        <div style="font-size:20px">	<strong>Trình độ: </strong>	{{ $data["trinhdo"] }}</div>
        <div style="font-size:20px">	<strong>SDT: </strong>{{ $data["sdt"] }} </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-2" id="danhanxetnoidung"><strong>Nơi Ở:</strong>
        {{ $data["diachi"] }}
    </div>
    <div class="col-xs-12 col-sm-5 col-md-4" id="danhanxetnoidung">
       <?php echo $data["noidung"]; ?>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2" id="danhanxetdate">
        {{ date("d-m-Y",strtotime($data->created_at)) }}
    </div>
    </div>
@endsection

@section('js')

@endsection