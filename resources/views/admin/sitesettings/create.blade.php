@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Create new Site Settings</H3>

        </div>
    </nav>

    <form method="POST" action="{{ route('site_settings.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row my-auto">
            <div class="col mb-3">
                @error('site_title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Site Title" name="site_title" aria-label="First name">
            </div>
            <div class="col mb-3">
                @error('site_tagline')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Site Tagline" name="site_tagline">
            </div>
        </div>
      
        <div class="row mb-3">
            <div class="col">
                @error('site_icon')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <label>Icon</label>
                <input type="text" class="form-control" placeholder="icon" name="site_icon">
            </div>
            <div class="col">
                @error('site_colour')
                    <p class="text-red"> {{ $message }}</p>
                @enderror

                <label> Select Theme Colour</label>
                <input type="color" class="form-control" id="GFG_Color" value="#006600" name="site_colour"
                    placeholder="icon">
            </div>
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
