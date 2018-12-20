<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Library App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="title m-b-md">
                    A Simple Library App
                </div>

                 <div class="links">
                    <a href="{{ url('/books') }}">Books</a>
                    <a href="{{ url('/students') }}">Students</a>
                </div>
            </div>
        </div>
    </body>
</html>
