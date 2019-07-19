@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form  action="{{route('admin.posts.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Titolo:</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}} " placeholder="Inserisci il titolo">
          </div>
          <div class="form-group">

          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
