@extends('layouts.app_public')
@section('content')
  <div class="container">
    <h1>Tutti i Post</h1>
    <ul>
  @forelse ($posts as $post)
      <li>
        <a href="{{route('posts.show', $post->slug)}}">
          {{$post->title}},
        </a>
         di {{$post->author}}, del {{$post->created_at}}
      </li>
  @empty
    <p>Non ci sono post</p>
  @endforelse
    </ul>
  </div>

@endsection
