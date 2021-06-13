@extends('layouts.app')


@section('content')

  <h1>Create your post</h1>
  {{-- <form action="/posts" method="POST"> --}}

  {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PostController@store']) !!}  
  {{ csrf_field() }}

    {{-- Create the inputs with the new HTML Form package --}}
    <div class="form-group">
      {{-- <input type="text" name="title" placeholder="Enter title"><br> --}}
      {!! Form::label('title', 'Post Title:', ['class'=>'form-controll']) !!}
      <br> {{-- No Bootstrap at the moment using <br> for formatting --}}
      {!! Form::text('title', null, ['class'=>'form-controll']) !!}
    </div>
    
    <div class="form-group">
      {{-- <textarea name="body" cols="30" rows="10"></textarea><br> --}}
      {!! Form::label('body', 'Post text:', ['class'=>'form-controll']) !!}<br>
      {!! Form::textarea('body', null, ['class'=>'form-controll', 'cols'=>'40', 'rows'=>'10']) !!}
    </div>
    
    <div class="form-group">
      {{-- <input type="submit" value="submit"> --}}
      {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {{-- /End Create the input with the new HTML Form addon --}}
    
  {!! Form::close() !!}
  {{-- </form> --}}


@endsection


