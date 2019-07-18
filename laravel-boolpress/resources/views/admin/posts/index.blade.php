@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Tutti i posts</h1>
    <table class="table text-center">
      <thead>
        <th>ID</th>
        <th>Titolo</th>
        <th>Autore</th>
        <th>Slug</th>
        <th>Creato il</th>
        <th>Modificato il</th>
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
@endsection
