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

  {{-- Stampa cards: --}}
{{-- <div class="d-flex">
    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                {{$movie->title}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nome originale: {{$movie->original_title}}</li>
                <li class="list-group-item">Nazionalità: {{$movie->nationality}}</li>
                <li class="list-group-item">Data di uscita: {{$movie->date}}</li>
                <li class="list-group-item">Voto: {{$movie->vote}}</li>
            </ul>
        </div>
    @endforeach
</div> --}}
    
@endsection