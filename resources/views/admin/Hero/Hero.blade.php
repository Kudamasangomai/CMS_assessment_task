@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Hero Section</H3>
            <h6>The first part people see when then visit your home page</h6>

        </div>
    </nav>


    <form method="POST" action="{{ route('hero.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row my-auto">
            <div class="col mb-3">
                @error('title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$hero['title'] ?? ''}}">
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Description"  name="description" value="{{$hero['description'] ?? ''}}">
            </div>
        </div>   
        <div class="row mb-3">

            <div class="col mb-3">
                @error('button_text_one')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="button text one"  name="button_text_one" value="{{$hero['button_text_one'] ?? ''}}">
            </div>
            <div class="col">
                @error('button_text_two')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                
                <input type="text" class="form-control" placeholder="button text two" name="button_text_two" value="{{$hero['button_text_two'] ?? ''}}">
            </div>
       
        </div>

        <div class="row mb-3">

            <div class="col mb-3">
                @error('image')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>Featured image</label>
                <input type="file" class="form-control" placeholder="image"  name="image" value="{{$hero['image'] ?? ''}}">
           
                <div class="col-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            @if ($hero)
            <div class="col">
                <h6>Current feature image</h6>
        <img src="{{ asset('storage/' . ($hero->image ? $hero->image : '')) }}"  width="250px" height="300px" />
            </div>
            @else
                
            @endif
           
            

        </div>

        <br/>
                 {{-- <div class="col">
                <h6>Current feature about_image</h6>
                <img src="{{ asset('storage/' . ($about->about_image ? $about->about_image : '')) }}" 
                width="250px" height="300px" alt="About Us Image">
            </div> --}}
        

    </form>
@endsection