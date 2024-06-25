@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>About Section</H3>
         

        </div>
    </nav>


    <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row my-auto">
            <div class="col mb-3">
                @error('title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$about['title'] ?? ''}}">
            </div>

            <div class="col mb-3">
                @error('titledescription')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="titledescription" name="titledescription" value="{{$about['titledescription'] ?? ''}}">
            </div>
        </div>
        <div class="row my-auto">
            <div class="col mb-3">
                @error('whotitle')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="who title" name="whotitle" value="{{$about['whotitle'] ?? ''}}">
            </div>
            <div class="col mb-3">
                @error('whodescription')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="who description"  name="whodescription" value="{{$about['whodescription'] ?? ''}}">
            </div>
        </div>   
        <div class="row mb-3">

            <div class="col mb-3">
                @error('visiontitle')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="vision title"  name="visiontitle" value="{{$about['visiontitle'] ?? ''}}">
            </div>
            <div class="col">
                @error('visiondescription')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                
                <input type="text" class="form-control" placeholder="vision description" name="visiondescription" value="{{$about['visiondescription'] ?? ''}}">
            </div>
       
        </div>

        <div class="row mb-3">

            <div class="col mb-3">
                @error('historytitle')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="history title"  name="historytitle" value="{{$about['visiontitle'] ?? ''}}">
            </div>
            <div class="col">
                @error('historydescription')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                
                <input type="text" class="form-control" placeholder="history description" name="historydescription" value="{{$about['historydescription'] ?? ''}}">
            </div>
       
        </div>

        <div class="row mb-3">

            <div class="col mb-3">
                @error('aboutimage')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>Featured aboutimage</label>
                <input type="file" class="form-control" placeholder="aboutimage"  name="aboutimage" value="{{$about['aboutimage'] ?? ''}}">
           
                <div class="col-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
            </div>

            <div class="col">
                <h6>Current About Image</h6>
                @if ($about)
                <img src="{{ asset('storage/' . ($about->aboutimage ? $about->aboutimage : '')) }}" 
                width="250px" height="300px" alt="About Us Image"> 
                @endif
          
            </div>

        </div>

        
        <br/>
        
        

    </form>
@endsection