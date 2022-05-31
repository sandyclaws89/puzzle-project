@extends('template.base')
@section('pageTitle', 'New Post')
@section('pageMain')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" action="{{route('puzzles.store')}}">
                @csrf

                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="pieces" class="form-label">Pieces</label>
                    <input type="number" class="form-control" id="pieces" name="pieces" value="{{ old('pieces')}}">
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description')}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('shoot_place')}}">
                    @error('type')
                        <div class="alert alert-danger">
                          {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <label class="form-check-label" for="available">Available</label>
                    <input type="checkbox" class="form-check-input" id="available" name="available" checked>
                </div>

                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantity" name="quantity">
                </div>

                <div class="col-md-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="3.0" step="0.1" class="form-control" id="price" name="price">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
