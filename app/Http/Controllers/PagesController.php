<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {   
        $posts=Post::all();
        return view('home')->with('posts',$posts);
    }
    public function getGreet(){
        return 'login type';
    }
    public function getAbout()
    {
        return view('about');
    }
}
