@extends('layouts.app')


@section('content')

  <h1>{{$post->title}}</h1>
  
  <p>{{$post->body}}</p>


  <br>
  <a href="{{route('posts.edit', $post->id)}}">Edit Post</a>


@endsection


