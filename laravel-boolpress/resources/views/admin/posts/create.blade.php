@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form  action="{{route('admin.posts.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Titolo:</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}} "placeholder="Inserisci nuovo titolo">
          </div>
          <div class="form-gorup">
            <label for="content">Post:</label>
            <textarea class="form-control" name="content" rows="8" cols="80" placeholder="Inserisci nuovo post"></textarea>
          </div>
          <div class="form-group">
            <label for="author">Autore:</label>
            <input class="form-control" type="text" name="author" value="{{old('author')}} " placeholder="Inserisci nuovo autore">
          </div>
          <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control" type="text" name="slug" value="{{old('slug')}} " placeholder="Inserisci nuovo slug">
          </div>
          <div class="form-group">
            <select class="form-control" name="category_id">
              <option>Selezionare la categoria</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            @foreach ($tags as $tag)
              <label for="{{$tag->name}}">{{$tag->name}}</label>
              <input type="checkbox" name="{{$tag->name}}" value="{{$tag->name}} ">
            @endforeach
          </div>
          <div class="form-group">
            <button class="btn btn-primary mt-5" type="submit" name="button">Crea</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
