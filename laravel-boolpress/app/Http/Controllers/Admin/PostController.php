<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
       $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
