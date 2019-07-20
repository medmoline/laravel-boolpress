<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    public function index(){

      $posts = Post::all();
      // $categories = Category::all();
      return view('home')->with(['posts' => $posts]);
    }
}
