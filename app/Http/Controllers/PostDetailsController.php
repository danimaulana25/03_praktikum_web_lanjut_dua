<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostDetailsController extends Controller
{
    public function postdetails(){
        return view('post-details',[
            'title' => 'Post Detail',
            'posts' => Post::where('id','4')->get()
        ]);
    }
}