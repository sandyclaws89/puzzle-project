@extends('template.base')
@section('pageTitle', $pageTitle)
@section('pageMain')
<section class="d-flex justify-content-center my-5">
    <div class="card" style="width: 30rem;">
        <img src="{{ $puzzle->image }}" class="card-img-top" alt="{{$puzzle->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$puzzle->title}}</h5>
          <p class="card-text">{{$puzzle->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Price             : {{$puzzle->price}}</li>
            <li class="list-group-item">Title             : {{$puzzle->title}}</li>
            <li class="list-group-item">Pieces            : {{$puzzle->pieces}}</li>
            <li class="list-group-item">Brand             : {{$puzzle->brand}}</li>
            <li class="list-group-item">Availability      : {{$puzzle->available ? 'Available' : 'Not available' }}</li>
        </ul>
        <div class="card-body d-flex justify-content-between">
            <a href="{{ route('puzzles.index') }}"> <button type="button" class="btn btn-primary">Back to listing</button></a>
            <button type="button" class="btn btn-primary">Add to favorities</button>
            <button type="button" class="btn btn-primary">Add to cart</button>
        </div>
      </div>
    </section>
    @endsection
