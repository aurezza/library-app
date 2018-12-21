<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Library App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        @yield('custom-script')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('/')}}">Library System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/students')}}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/books')}}">Books</a>
                </li>
                </ul>
            </div>
        </nav>
    
        <div id="wrapper">
            <div id="sidebar-wrapper">
                @yield('sidebar')
            </div>

            <div class="content">
                @yield('content')
            </div>  
        </div>

    </body>
</html>
