@extends('layouts.app')
@section('content')
  <div class="show_container">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="card">
            <h2>Post con id : {{$post->id}}</h2>
            <ul>
              <li>{{$post->title}}</li>
              <li>{{$post->category->name}}</li>
              <li>
                {{$post->content}}
              </li>
              <li>{{$post->author}}</li>
              <li>{{$post->slug}}</li>
              <li>
                @foreach ($post->tags as $tag)
                  {{$tag->name}} @if(! $loop->last) , @endif
                @endforeach
              </li>
              <li>{{$post->created_at}}</li>
              <li>{{$post->updated_at}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
