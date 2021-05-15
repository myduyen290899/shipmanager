<?php

namespace App\Http\Controllers;
use App\Models\NhanVien;
use App\Models\DonHang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function getDonHangTongDai() {
     
        $donhang=donhang::all();
        $nhanvien=nhanvien::all();
        return view('tongdai.don-hang')->with(compact('donhang','nhanvien'));
    }
    public function postDonHangTongDai(Request $request) {

        $dh = new donhang();
        $dh->ca = $request->ca; 
        $dh->don = $request->don_hang;
         $dh->gia = $request->gia;
        $dh->tenkh = $request->khach_hang;
         $dh->sdt = $request->sdt;
        $dh->diachi = $request->dia_chi;
        $dh->manv = $request->ma_nv;
        $dh->created_at = date("Y-m-d h:i");
        $dh->save();
        return redirect( route('donhang.listTongDai') );
    }
    public function themdonhang( Request $request ){
        

        $dh = new donhang();
        $nhanvien=nhanvien::all();
        $dh->ca = $request->ca; 
        $dh->don = $request->don;
         $dh->gia = $request->gia;
        $dh->tenkh = $request->tenkh;
         $dh->sdt = $request->sdt;
        $dh->diachi = $request->diachi;
        $dh->manv=$request->manv;
        $dh->save();
        return redirect('tongdai/don-hang')->with('success','Thêm thành công!!!');
}
}

