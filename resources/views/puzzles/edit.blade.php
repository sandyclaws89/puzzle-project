@extends('template.base')
@section('pageTitle', 'Edit puzzle')
@section('pageMain')
<div class="container my-5">
    <div class="row">
        <div class="col">
            <form method="post" action="{{route('puzzles.update', $puzzle->id)}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title'), $puzzle->title}}">
                </div>
                {{-- @dd($puzzle->title); --}}

                <div class="mb-3">
                    <label for="pieces" class="form-label">Pieces</label>
                    <input type="number" class="form-control" id="pieces" name="pieces" value="{{ old('pieces'), $puzzle->pieces}}">
                    @error('pieces')
                            <div class="alert alert-danger">
                              {{$message}}
                            </div>
                        @enderror
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description'), $puzzle->description}}">
                </div>

                <div class="mb-3 form-check">
                    <label class="form-check-label" for="available">Available</label>
                    <input type="checkbox" class="form-check-input" id="available" name="available"  value="1" checked>
                </div>

                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantity" name="quantity" value="{{old('quatity'), $puzzle->quantity}}">
                </div>

                <div class="col-md-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="3.0" step="0.1" class="form-control" id="price" name="price" value="{{old('price'), $puzzle->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </div>

</div>
@endsection
