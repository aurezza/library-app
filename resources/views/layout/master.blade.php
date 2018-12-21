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
        @include('layout.navbar')
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
