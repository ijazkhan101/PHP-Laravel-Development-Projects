<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $instruction = "Ijaz Khan";
        $number =2 ;
        return view('blogs', compact('instructor','number'));
    }

    public function layout(){
        return view('layouts.main');
    }

    public function createBlog(){
        return view('blogs.createBlog');
    }
}
