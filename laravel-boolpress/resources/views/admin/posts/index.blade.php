@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Tutti i Post</h1>
      </div>
      <div class="col-md-4">
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Crea Post</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table text-center">
          <thead>
            <th>ID</th>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Slug</th>
            <th>Creato il</th>
            <th>Modificato il</th>
            <th>Azioni</th>
          </thead>
            @forelse ($posts as $post)
          <tbody>
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->author}}</td>
              <td>{{$post->slug}}</td>
              <td>{{$post->created_at}}</td>
              <td>{{$post->updated_at}}</td>
            @empty
          </tbody>
          @endforelse
        </table>
      </div>
    </div>
  </div>
@endsection
