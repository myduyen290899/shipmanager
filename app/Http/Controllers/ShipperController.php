<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function index() {
        return view('shipper.home');
    }
}
