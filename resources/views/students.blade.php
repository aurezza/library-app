<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Library App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom-sub.css')}}" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id="wrapper">
         <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Add New User
                </li>
            </ul>
             <form action="/students/add" method="post" accept-charset="UTF-8" class="form">
                {{ csrf_field() }}
                <label for="name">Student name:</label>
                <input class="form-control" type="text" name="name" id="name" value="">
                <label for="student_number">Student number:</label>
                <input class="form-control" type="number" name="student_number" id="studentNumber" value="">
                <button type="submit" class="btn btn-success">Add New Student</button>
        </form>
        </div>
        
            <div class="content">
                <div class="title m-b-md">
                    A Simple Library App - List of Students
                </div>

                <ul class="user-list">
                @foreach ($users as $user)
                    <li>
                        <img src="https://placeimg.com/150/200/people/grayscale" height="150" width="200"><br>
                        <h3><strong>{{ $user->name }}</strong>, [{{ $user->student_number }}]</h3>

                        <form action="/api/users/{{$user->id}}" method="post" accept-charset="UTF-8" class="form">
                             {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">
                            <label for="name">Student name:</label>
                            <input class="form-control" type="text" name="name" id="name" value="" placeholder="{{ $user->name }}">
                            <label for="student_number">Student number:</label>
                            <input class="form-control" type="number" name="student_number" id="studentNumber" value="" placeholder="{{ $user->student_number }}">
                            <button type="submit" class="btn btn-primary">Edit Student</button>
                        </form>

                        <form action="/api/users/{{$user->id}}" method="post" accept-charset="UTF-8" class="form">
                            <input name="_method" type="hidden" value="DELETE"/>
                            <button type="submit" class="btn btn-danger">Delete Student</button>
                        </form>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
