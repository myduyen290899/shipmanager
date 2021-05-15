<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EVentController extends Controller
{
    public function getEventAdmin() {
        $dataEvent = Event::all();
        
        return view('admin.su-kien')->with('data', $dataEvent);
       
    }

    public function postEVentAdmin(Request $request) {
        $item = new Event();
        $item->tittle = $request->tittle;
        $item->noidung = $request->noidung;
    
        $item->created_at = date("Y-m-d h:i");
        $item->save();
        return redirect( route('sukien.listAdmin') );
    }
}