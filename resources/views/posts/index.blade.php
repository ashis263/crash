@extends('layouts.app')

@section('content')
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{route('posts.show', ['post' => $post])}}">
                <h2>{{$post->title}}</h2>
            </a>
        </li>
        <p>{{$post->description}}</p>
        @endforeach
    </ul>
@endsection