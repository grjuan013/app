<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsViewController extends Controller
{
    public function index() {
        $news = News::all();
        return view('home')->with('noticias',$news);
     }
}
