<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    
    public function index() {
        $data = Array();
        $data['brands'] = Brand::all();
        return view('aboutus', $data);
    }
}
