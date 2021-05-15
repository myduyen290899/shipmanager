<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhGia;

class DanhGiaController extends Controller
{
    public function getDanhGia() {
        $dataDanhGia = DanhGia::all();
        
        return view('guess.danh-gia')->with('data', $dataDanhGia);
       
    }

    public function getDanhGiaAdmin() {
        $dataDanhGia = DanhGia::all();
        
        return view('admin.danh-gia')->with('data', $dataDanhGia);
       
    }

    public function postDanhGia(Request $request) {
        $item = new DanhGia();
        $item->name = $request->ten;
        $item->star = $request->sao;
        $item->comment = $request->nhanxet;
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('danhGia.list') );
    }

    public function postDanhGiaAdmin(Request $request) {
        $item = new DanhGia();
        $item->name = $request->ten;
        $item->star = $request->sao;
        $item->comment = $request->nhanxet;
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('danhGia.listAdmin') );
    }

    public function getDanhGiaTongDai() {
        $dataDanhGia = DanhGia::all();
        
        return view('tongdai.danh-gia')->with('data', $dataDanhGia);
       
    }
    public function postDanhGiaTongDai(Request $request) {
        $item = new DanhGia();
        $item->name = $request->ten;
        $item->star = $request->sao;
        $item->comment = $request->nhanxet;
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('danhGia.listTongDai') );
    }
    public function getDanhGiaShipper() {
        $dataDanhGia = DanhGia::all();
        
        return view('shipper.danh-gia')->with('data', $dataDanhGia);
       
    }
    public function postDanhGiaShipper(Request $request) {
        $item = new DanhGia();
        $item->name = $request->ten;
        $item->star = $request->sao;
        $item->comment = $request->nhanxet;
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('danhGia.listShipper') );
    }
}
