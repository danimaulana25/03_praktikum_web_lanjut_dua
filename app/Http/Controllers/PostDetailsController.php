<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDetailsController extends Controller
{
    public function postdetails(){
        return view('post-details');
    }
}