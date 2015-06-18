@extends('layouts.master')

@section('title', 'Update ' . htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8'))

@section('content')

<form method="POST" action="/{{$post->id}}">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="PUT">

    <div>
        Title
        <input type="input" name="title" value="{{$post->title}}">
    </div>

    <div>
        Content
        <textarea name="body">{{$post->body}}</textarea>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
@endsection