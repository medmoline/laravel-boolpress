@extends('layouts.app')
@section('content')
  <div class="table_container">
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
              <th>Categoria</th>
              <th>Tags</th>
              <th>Azioni</th>
            </thead>
              @forelse ($posts as $post)
            <tbody>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>
                  {{ !empty($post->category) ? $post->category->name : '-' }}
                </td>
                <td>
                  @if ( ($post->tags)->isNotEmpty())
                    @foreach ($post->tags as $tag)
                      {{$tag->name}}
                    @endforeach
                  @else
                    No Tags
                  @endif
                </td>
                <td class="link_posts">
                  <a class="btn btn-primary" href="{{route('admin.posts.show', $post->id) }}">Vedi</a>
                  <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id) }}">Modifica</a>
                  <a class="btn btn-primary" href="#">Cancella</a>
                </td>
              @empty
            </tbody>
            @endforelse
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
