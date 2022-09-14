@extends('layouts.main')

@section('title')
    Trains
@endsection

@section('main-content')
    <div class="row">
        @forelse ($trains as $train)
            @include('partials.trains.card')
        @empty
            <p>No Trains</p>
        @endforelse
    </div>
@endsection
