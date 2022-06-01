@extends('template.base')
@section('pageTitle', 'Puzzle List')
@section('pageMain')
    <h1>Listing</h1>
    <div class="container">
        <div class="row g-4">
            @foreach ($puzzles as $puzzle)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="{{$puzzle->image}}" alt="">
                        <div class="card-body">
                            <h2 class="card-title">
                                {{$puzzle->title}}
                            </h2>
                            <p class="card-text">{{$puzzle->description}}</p>
                            <a href="{{ route('puzzles.show', $puzzle->id) }}" class="btn btn-primary align-self-center">Details</a>
                            <a href="{{ route('puzzles.edit', $puzzle->id) }}" class="btn btn-primary align-self-center">Edit</a>

                            <form action="{{ route('puzzles.destroy', $puzzle->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination pagination-lg justify-content-center my-5">
            {{$puzzles->links()}}
        </div>

@endsection
