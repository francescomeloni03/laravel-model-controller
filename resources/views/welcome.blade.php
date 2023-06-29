@extends('layouts.app')

@section('content')

    <div class="mainContainer">
        <div class="container-lg d-flex flex-wrap ">
            @foreach ($movies as $movie)
                <div class="movieCard mt-3 p-3  border border-white w-50">
                    <h3 class="pb-2">{{ $movie->title }}</h3>
                    <p>Titolo originale: {{ $movie->original_title }}</p>
                    <p>Lingua: {{ $movie->nationality }}</p>
                    <p>Data d'uscita: {{ $movie->date }}</p>
                    <p>Voto: {{ $movie->vote }}</p>
                    <p>Nazionalità: {{ $movie->nationality}}</p>
                </div>
            @endforeach
        </div>
    </div>


@endsection