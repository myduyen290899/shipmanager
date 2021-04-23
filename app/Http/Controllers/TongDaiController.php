<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongDaiController extends Controller
{
    public function tongdai() {
        return view('tongdai.home');
    }
}
