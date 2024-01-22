@extends('layouts.app')

@section('content')
<h1>Film:</h1>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Titolo originale</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Data di uscita</th>
        <th scope="col">Voto</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <th scope="row">{{$movie->id}}</th>
                <td>{{$movie->title}}</td>
                <td>{{$movie->original_title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->date}}</td>
                <td>{{$movie->vote}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection