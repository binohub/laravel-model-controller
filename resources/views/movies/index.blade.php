@extends('layouts.main')

@section('title')
    Movies
@endsection

@section('main-content')
    <div class="row">
        @forelse ($movies as $movie)
            @include('partials.movies.card')
        @empty
            <p>No Movies</p>
        @endforelse
    </div>
@endsection
