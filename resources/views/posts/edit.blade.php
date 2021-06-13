@extends('layouts.app')


@section('content')

  <h1>Edit your post</h1>

  <form action="/posts/{{$post->id}}" method="POST">
    {{ csrf_field() }}

    <!-- Laravel hidden input for POST method (PUT/PATCH) in Laravel -->
    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"><br>
    <textarea name="body" cols="30" rows="10">{{$post->body}}</textarea><br>
    <input type="submit" value="UPDATE">


  </form>

  <form action="/posts/{{$post->id}}" method="POST">
    {{ csrf_field() }}
    
    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="DELETE">
    
  </form>

@endsection
