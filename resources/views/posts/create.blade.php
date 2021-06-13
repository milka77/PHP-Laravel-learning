@extends('layouts.app')


@section('content')

  <h1>Create your post</h1>
  {{-- <form action="/posts" method="POST"> --}}

  {!! Form::open() !!}  
    <input type="text" name="title" placeholder="Enter title"><br>
    <textarea name="body" cols="30" rows="10"></textarea><br>
    {{ csrf_field() }}
    <input type="submit" value="submit">

  {!! Form::close() !!}
  {{-- </form> --}}


@endsection


