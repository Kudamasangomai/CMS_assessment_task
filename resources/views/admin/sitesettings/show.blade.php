@extends('layouts.admin')

@section('content')


<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
     <H3>Site Setting</H3>
      <form class="d-flex" role="search">
      
        <button class="btn btn-outline-primary" type="submit"><a href="/site_settings/Update">Update</a></button>
      </form>
    </div>
  </nav>

  <form method="POST" action="{{ route('site_settings.publish',$site->id) }}" enctype="multipart/form-data">
    @csrf
  <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item">Title - {{ $site->site_title }}</li>
    <li class="list-group-item">Tagline -  {{ $site->site_tagline }}</li>
    <li class="list-group-item">status -  {{ $site->Status }}</li>
    <li class="list-group-item">Theme Colour -   <span style="background-color: {{ $site->site_colour }}">.....</span>
    </li>
  </ul>
</div>
<br/>

<button class="btn btn-outline-primary" type="submit">Publish</button>
  </form>

@endsection
