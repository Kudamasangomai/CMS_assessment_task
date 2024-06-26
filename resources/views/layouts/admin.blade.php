<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}" />

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Assessment </h3>
            </div>

            <ul>

                <li>
                    <h4>General</h4>
                    <ul class="" style=" list-style:none">
                        <li>
                            <a href="/site_settings">Site Settings</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <ul class="" style=" list-style:none">

                <li class="active">
                    <h4>Sections</h4>
                    <ul class="">
                        <li>
                            <a href="/hero">Hero Section</a>
                        </li>
                        <li>
                            <a href="/about">About Us</a>
                        </li>
                        <li>
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <a href="/price">Prices</a>
                        </li>

                        <li>
                            <a href="/footer">Footer</a>
                        </li>

                        <li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" style="color:white"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                </li>
            </ul>
            </li>
            </ul>

        </nav>
        <div id="content">
            <div class="col-md-12 text-center">
                @include('layouts.messages')

            </div>
          
            @yield('content')
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#message').delay(2000).fadeOut();
        });
    </script>
</body>

</html>
