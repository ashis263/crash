@extends('layouts.app')

@section('content')
    <h2>{{$post->title}}</h2>
    <p>{{$post->description}}</p>
    <p>Category: {{$post->category->title}}</p>
@endsection