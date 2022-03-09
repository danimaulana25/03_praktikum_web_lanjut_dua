<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog(){
        return view('blog',[
            'title' => 'Blog',
            'blogs' => Blog::all()
        ]);

    }
}
