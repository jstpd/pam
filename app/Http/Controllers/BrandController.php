<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //
    public function index(int $id) {
        $brand = Brand::find($id);
        if ( !$brand ) return abort(404, 'Страница не найдена');
        $data = Array();
        $data['brand'] = $brand;
        $data['catalog'] = $brand->catalog;
        return view('brand', $data);
    }
    
}
