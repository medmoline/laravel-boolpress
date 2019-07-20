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
         di {{$post->author}}, del {{$post->created_at}} -
        <em>
          <a href="{{route('posts.category', $post->category->slug)}}">
             @if (! empty($post->category->name))
              {{$post->category->name}}
            @else
              No category
           @endif
          </a>
       </em>
       <em>
         {{-- if per controllare se la collection è vuota tramite il metodo isNotEmpty --}}
         @if (($post->tags)->isNotEmpty())
           - TAG:
           {{-- foreach per ciclare la collection e ottenere i risultati --}}
           @foreach ($post->tags as $tag)
            <a href="#">
              {{$tag->name}} @if (! $loop->last), @endif {{-- If nel caso in cui fosse l'ultimo elemento togli la virogla  --}}
            </a>
           @endforeach
          @endif
       </em>

    </li>
    {{-- @php
      dd($post->category->slug)
    @endphp --}}
  @empty
    <p>Non ci sono post</p>
  @endforelse
    </ul>
  </div>

@endsection
