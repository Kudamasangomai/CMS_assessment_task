@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3> Edit Service</H3>

        </div>
    </nav>

    <form action="{{ route('services.update',$service) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
      
        <div class="row my-auto">
            <div class="col mb-3">
                @error('title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Title" name="title"
                    value="{{ $service['title'] ?? '' }}">
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Description" name="description"
                    value="{{ $service['description'] ?? '' }}">
            </div>
        </div>




        <div class="col-12 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br />



    </form>


@endsection
