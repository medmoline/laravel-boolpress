<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Str;

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
    { //per validare il form
      $validateData = $request->validate([
        'title'=> 'required|unique:posts|max:255',
        'content'=> 'required',
        'author'=> 'required',
        'category_id' => 'required'
    ]);

    $dati = $request->all();
    $dati['slug'] = Str::slug($dati['title']);
    //recupero la categoria selezionata trovando il suo id tramite la funzione find che lavora con gli id
    $category = Category::find($dati['category_id']);
    if(empty($category)){
      //se la categoria è vuota ossia non ha nessun riscontro all'interno della tabella allora la levo dal fillable
      unset($dati['category_id']);
    }
        $new_post = new Post();
        $new_post->fill($dati);
        $new_post->save();
        //tramite il metodo sync riusciamo a racchiudere i tags scelti all'interno di un array
        $new_post->tags()->sync($dati['tag_ids']);
        return redirect()->route('admin.posts.index');
   }

    public function show($id)
    {
        $post = Post::find($id);
        if (empty($post)) {
          abort(404);
        }
        return view('admin.posts.show')->with([
         'post' => $post
       ]);
    }


    public function edit($id)
    {
        $post = Post::find($id);
        if(empty($post)) {
          abort(404);
        }
        return view('admin.posts.edit')->with(['post' => $post]);
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
