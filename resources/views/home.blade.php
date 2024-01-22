@extends('layouts.app')

@section('content')
<h1>Film:</h1>
<ul>
    @foreach ($movies as $movie)
        <li>
            <span>{{$movie->title}}</span>
            <span>{{$movie->original_title}}</span>
            <span>{{$movie->nationality}}</span>
            <span>{{$movie->date}}</span>
            <span>{{$movie->vote}}</span>
        </li>
    @endforeach
</ul>
@endsection