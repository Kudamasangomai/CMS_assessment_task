@extends('layouts.admin')

@section('content')


<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
     <H3>Site Settings</H3>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-primary" type="submit"><a href="/site_settings/create">Add Settings</a></button>
      </form>
    </div>
  </nav>


  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">site_tagline</th>
          <th scope="col">site_icon</th>
          <th scope="col">The Colour</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @forelse ($site as $site)
            
        
        <tr>

          <td><a href="{{ route('site_settings.show',$site) }}">{{ $site->site_title }}</a></td>
          <td>{{ $site->site_tagline }}</td>
          <td>{{ $site->site_icon }}</td>
          <td>{{ $site->Status }}</td>
          <td>{{ $site->site_colour }}</td>
          <td>View |
            <a href="{{ route('site_settings.edit',$site->id) }}"> Edit</a> | 
             
            <form action="{{ route('site_settings.destroy',$site) }}" method="POST">
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
