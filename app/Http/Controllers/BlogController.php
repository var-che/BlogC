<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        
        //Uzmemo iz databaze, koristecic 'slug'
        
        $post=Post::where('slug', '=', $slug)->first();
        
        //Napravimo view i ubacimo ga u post objekat
        
        return view('blog.single')->withPost($post);
    }
}
