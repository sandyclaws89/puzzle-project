@extends('template.base')
@section('pageTitle', 'Puzzle List')
@section('pageMain')
    <h1>Listing</h1>
    <div class="row g-4">
        @foreach ($puzzles as $puzzle)
            <div class="col-4">
                <div class="card h-100">
                    <img src="{{$puzzle->image}}" alt="">
                    <div class="card-body">
                        <h2 class="card-title">
                        <a href="{{ route('puzzles.show', $puzzle->id) }}">{{$puzzle->title}}</a>
                    </h2>
                    <p class="card-text">{{$puzzle->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$puzzles->links()}}
@endsection
