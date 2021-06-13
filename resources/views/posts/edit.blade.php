@extends('layouts.app')


@section('content')

  <h1>Edit your post</h1>

  {{-- <form action="/posts/{{$post->id}}" method="POST">
    {{ csrf_field() }}

    Laravel hidden input for POST method (PUT/PATCH) in Laravel
    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"><br>
    <textarea name="body" cols="30" rows="10">{{$post->body}}</textarea><br>
    <input type="submit" value="UPDATE">


  </form> --}}

  {{-- update form --}}
  {!! Form::model($post, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostController@update', $post->id]]) !!}
    {{ csrf_field() }}
  
    {!! Form::label('title', 'Post Title:', ['class'=>'form-controll']) !!}<br>
    {!! Form::text('title', null, ['class'=>'form-controll']) !!}

    {!! Form::label('body', 'Post text:', ['class'=>'form-controll']) !!}<br>
    {!! Form::textarea('body', null, ['class'=>'form-controll', 'cols'=>'40', 'rows'=>'10']) !!}
    
    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
  
  {!! Form::close() !!}
  {{-- /end of update form --}}


  {{-- Deleting Form --}}
  {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\PostController@destroy', $post->id]]) !!}
  {{ csrf_field() }}
  
  {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
  
  {!! Form::close() !!}
  {{-- /End of Deleting Form --}}

@endsection
