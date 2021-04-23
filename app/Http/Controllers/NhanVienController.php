<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;

class NhanVienController extends Controller
{
    public function getNhanVienAdmin() {
        $dataNhanVien = NhanVien::all();
        
        return view('admin.nhan-vien')->with('data', $dataNhanVien);
    }
    public function postNhanVienAdmin(Request $request) {
        $item = new NhanVien();
        $item->manv = $request->manv;
        $item->matkhau = $request->matkhau;
        $item->tendem = $request->tendem;
        $item->ten = $request->ten;
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('nhanvien.listAdmin') );
    }
    public function themnhanvien( Request $request ){
        $nv = new nhanvien();
        $nv->manv = $request->manv; 
        $nv->matkhau = $request->hoten;
        $nv->tendem = $request->tendem;
        $nv->ten = $request->ten;
        $nv->created_at = date("Y-m-d h:i");
            $nv->save();
        
        return redirect('admin/nhan-vien')->with('success','Thêm thành công!!!');
    }
    public function suanhanvien( Request $request ){
        
        $nv = nhanvien::where('manv',$request->manv)->first();
        if($nv){
            $nv->tendem = $request->tendem;
            $nv->ten = $request->ten;
            $nv->save();  
        }
        return redirect('admin/nhan-vien')->with('success','sua thành công!!!');
    }
    public function xoanhanvien( $manv ){
        $nv=nhanvien::where('manv', $manv)->delete(); 
        return redirect('admin/nhan-vien')->with('success','Xoa thành công!!!');
        
    }
}