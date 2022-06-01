@extends('template.base')
@section('pageTitle', 'Home Page')
@section('pageMain')
<div class="bg-dark vw-100 vh-100 row">
    <div class="d-flex align-items-center p-3 mb-2  text-white text-center fw-bolder">
        <div class="col">

            <a class="" href="{{ route('puzzles.index') }}">
                <button type="button" class="btn btn-primary rounded-pill">Puzzle Store</button>
            </a>
        </div>
    </div>

</div>
@endsection



