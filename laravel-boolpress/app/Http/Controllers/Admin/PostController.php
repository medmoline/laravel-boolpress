<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
      $tags = Tag::all();
       $categories = Category::all();
        return view('admin.posts.create', compact('categories'), compact('tags'));
    }


    public function store(Request $request)
    {
        $new_post = new Post();
        $new_post->fill($request->all());
        $new_post->save();
        return redirect()->route('admin.posts.index');
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
