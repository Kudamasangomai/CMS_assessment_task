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

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Assessment </h3>
            </div>

            <ul class="">

                <li class="active">
                    <h4>General</h4>
                    <ul class="">
                        <li>
                            <a href="/site_settings">Site Settings</a>
                        </li>

                    </ul>
                </li>
            </ul>

            <ul class="">

                <li class="active">
                    <h4>Sections</h4>
                    <ul class="">
                        <li>
                            <a href="#">Header Section</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Prices</a>
                        </li>

                        <li>
                            <a href="/footer">Footer</a>
                        </li>
                    </ul>
                </li>
            </ul>


        </nav>

      
        <div id="content">
           
            @yield('content')
        </div>
    </div>
</body>

</html>
