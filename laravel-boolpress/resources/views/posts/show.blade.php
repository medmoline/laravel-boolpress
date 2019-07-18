@extends('layouts.app_public')
@section('content')
  <div class="container">
    <h1> {{$post->title}} </h1>
    <p> {{$post->content}}</p>
    <small>{{$post->author}}</small>

  </div>
@endsection
