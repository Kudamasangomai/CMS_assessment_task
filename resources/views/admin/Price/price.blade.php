@extends('layouts.admin')

@section('content')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <H3>Prices</H3>

        </div>
    </nav>



    <form method="POST" action="{{ route('price.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row my-auto">
            <div class="col mb-3">
                @error('subscription')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <select class="form-select" aria-label="Default select example" name="subscription">
                    @foreach (App\Http\Enum\SubscriptionPlan::cases() as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                @error('description')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="Description" name="description"
                    value="{{ old('description') }}">
            </div>
        </div>



        <div class="row my-auto">
            <div class="col mb-3">
                @error('price')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="price" name="price" value="{{ old('price') }}">
            </div>
            <div class="col mb-3">
                @error('features')
                    <p class="text-red"> {{ $message }}</p>
                @enderror
                <input type="text" class="form-control" placeholder="seperate features with a comma" name="features"
                    value=" {{ old('features') }}">
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
                <th scope="col">TSubcription Plan</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Features</th>
                <th scope="col" style="width: 300px">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($prices as $price)
                <tr>

                    <td>{{ $price->subscription }}</a></td>
                    <td>{{ $price->description }}</td>
                    <td>{{ $price->price }}</td>
                    <td>


                        @foreach (explode(',', $price->features) as $feature)
                        <li><i class="lni lni-checkmark-circle"></i> {{ trim($feature) }}</li>
                        @endforeach
                    </td>

                    <td>

                        <a href="{{ route('price.edit', $price->id) }}"> Edit</a>


                        <form action="{{ route('price.destroy', $price) }}" method="POST">
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
