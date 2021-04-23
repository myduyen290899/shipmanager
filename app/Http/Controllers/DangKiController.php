<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DangKi;

class DangKiController extends Controller
{
    public function getDangKi() {
        //$dataDangKi = DangKi::all();
        return view('guess.dang-ki');
    }

    public function postDangKi(Request $request) {
        try { 
            $item = new DangKi();
            $item->name = $request->ten;
            $item->tuoi = $request->tuoi;
            $item->trinhdo = $request->trinhdo;
            $item->sdt = $request->sdt;
            $item->diachi = $request->diachi;
            $item->noidung = $request->input('noidung');
            $item->created_at = date("Y-m-d h:i");
            $item->save();
            return redirect( route('dangKi.list') )->with('success', 'Gửi ứng tuyển thành công');
        } catch(\Illuminate\Database\QueryException $ex){ 
            return redirect( route('dangKi.list') )->with('error', 'Gửi ứng tuyển thất bại');
        }
       
        
    }
    public function getUngVien() {
        $data = DangKi::all();
        return view('admin.ung-vien')->with('data', $data);

    }

    public function getListUngVien($id) {
        $data = DangKi::where('id', $id)->first();
        return view('admin.chi-tiet')->with('data', $data);
    }

    public function xoaUngVien($id) {
        $data = DangKi::where('id', $id)->delete();
        return redirect( route('dangKi.getUngVien') );
    }
}
