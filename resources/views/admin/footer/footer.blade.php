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
                <input type="text" class="form-control" placeholder="Footer Title" name="title">
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Footer Descriotion"  name="description">
            </div>
        </div>   
        <div class="row mb-3">
            <div class="col">
                @error('button_text')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                
                <input type="text" class="form-control" placeholder="button text" name="button_text">
            </div>
       
        </div>
       

        <div class="col-12 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>



    <table class="table table-striped">
        <caption>You can have many footer templates and choose The one you want at the momement</caption>
        <thead>
            <tr>
              
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">button text</th>
              <th scope="col">Published</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($footer as $footer)
                
          
            <tr>
          
              <td>{{ $footer->title }}</td>
              <td>{{ $footer->description }}</td>
              <td>{{ $footer->button_text }}</td>
              <td>{{ $footer->published }} 
                
                <form action="{{ route('footer.publish', $footer->id) }}" method="POST">
                    @csrf 
                <div class="form-check form-switch">
                    <input class="form-check-input" 
                    type="checkbox" 
                    name="status"
                    onclick="this.form.submit()" 
                    id="flexSwitchCheckChecked" 
                    {{ $footer->published === 'Yes' ? 'checked' : ''}}>
                  </div>
                </form>
              </td>
              <td>edit | Delete</td>
            </tr>
            @empty
                
            @endforelse
      </table>
@endsection
