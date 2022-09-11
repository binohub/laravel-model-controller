@extends('layouts.main')

@section('title')
    Movies
@endsection

@section('main-content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="card col-2 m-5">
                <img class="card-img-top" src="https://media4.giphy.com/media/3oEjI6SIIHBdRxXI40/200.gif" alt="Not Disponible Image Of {{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $movie->nationality }}</li>
                    <li class="list-group-item">{{ $movie->date }}</li>
                    <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
