@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Prices</H3>

        </div>
    </nav>
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


    <form method="POST" action="{{ route('price.update',$subscription) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row my-auto">

          
          
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description" name="description"
                    value="{{ $subscription['description'] }}">
            </div>
        </div>



        <div class="row my-auto">
            <div class="col mb-3">
                @error('price')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>price</label>
                <input type="text" class="form-control" placeholder="price" name="price" 
                value="{{ $subscription['price'] }}">
            </div>
            <div class="col mb-3">
                @error('features')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>Features</label>
                <input type="text" class="form-control" placeholder="seperate features with a comma" name="features"
                value="{{ $subscription['features'] }}">
            </div>
        </div>



        <div class="col-12 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br />



    </form>

 

@endsection