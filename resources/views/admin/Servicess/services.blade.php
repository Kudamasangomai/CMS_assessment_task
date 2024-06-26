@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Services</H3>

        </div>
    </nav>

    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row my-auto">
            <div class="col mb-3">
                @error('title')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Title" name="title"
                    value="{{ $hero['title'] ?? '' }}">
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Description" name="description"
                    value="{{ $hero['description'] ?? '' }}">
            </div>
        </div>




        <div class="col-12 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br />



    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col" style="width: 600px;word-wrap: break-word;">Description</th>
                <th scope="col" style="width: 300px">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($services as $services)
                <tr>

                    <td>{{ $services->title }}</a></td>
                    <td>{{ $services->description }}</td>

                    <td>

                        <a href="{{ route('services.edit', $services->id) }}"> Edit</a>


                        <form action="{{ route('services.destroy', $services) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="" onclick="event.preventDefault(); this.closest('form').submit()">Delete</a>
                        </form>



                    </td>
                </tr>
            @empty
                No Record Found
            @endforelse

        </tbody>
    </table>
@endsection
