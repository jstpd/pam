<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $data = Array();
        $data['articles'] = Article::orderBy('created_at', 'DESC')->get()->take(4);
        $data['partners'] = Partner::all();
        $data['faqs'] = Faq::all();
        return view('home', $data);
    }
    
}
