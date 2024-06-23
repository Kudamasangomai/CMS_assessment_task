@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Create Footer</H3>

        </div>
    </nav>

    <form method="POST" action="{{ route('footer.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row my-auto">
            <div class="col mb-3">
                @error('title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Footer Title" name="title" value="{{ $footer->title }}" >
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Footer Descriotion" value="{{ $footer->description }}" name="description">
            </div>
        </div>   
        <div class="row mb-3">
            <div class="col">
                @error('button_text')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                
                <input type="text" class="form-control" placeholder="button text" value="{{ $footer->button_text }}" name="button_text">
            </div>
       
        </div>

      
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
