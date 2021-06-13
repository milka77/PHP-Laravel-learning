@extends('layouts.app')


@section('content')

  <h1>Post index</h1>
  
  <table>
    <thead>
      <tr>
        <th>title</th>
        <th>body</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>

        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td><a href="{{route('posts.show', $post->id)}}">View post</a></td>
          
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{route('posts.create')}}">Create new post</a>

@endsection


