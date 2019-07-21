@extends('layouts.app')
@section('content')
  <div class="edit_container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form  action="{{route('admin.posts.update', $post->id)}}" method="post">
            @method('PUT')
            @csrf
           <div class="form-group">
              <label for="title">Titolo:</label>
              <input class="form-control" type="text" name="title" value="{{old('title'), $post->title}}" placeholder="Modifica il titolo">
            </div>
            <div class="form-group">
              <label for="content">Contenuto:</label>
              <textarea class="form-control" name="content" rows="8" cols="80">{{old('content',$post->content)}}</textarea>
            </div>
          <div class="form-group">
              <label for="author">Autore:</label>
              <input class="form-control" type="text" name="author" value="{{old('author',$post->author)}}" placeholder="Modifica autore">
            </div>
            <div class="form-group">
              <select  class="form-control" name="category_id">
                <option>Modifica la Categoria</option>
                @foreach ($categories as $category)
                  <option value="{{old('id'),$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              @foreach ($tags as $tag)
                <label>
                   <input type="checkbox" name="tag_ids[]" value="{{$tag->id}}">
                   {{$tag->name}}
                 </label>
              @endforeach
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="button">Modifica</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
