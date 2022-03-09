<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class HomeController extends Controller
{
    public function index(){
        return view('index',[
            'title' => 'Beranda',
            'blogs' => Blog::all()
        ]);
    }
}
