<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Library App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="title m-b-md">
                    Test
                </div>

                <ul class="book-list">
                @foreach ($books as $book)
                    <li>
                        <img src="https://placeimg.com/150/200/any" height="150" width="200"><br>
                        <p><strong>{{ $book->name }}</strong>, <i>{{ $book->number_of_pages }} pages</i></p>
                        @if ($book->borrowed_by)
                            <p>Borrowed by: {{ $book->borrowed_by}}</p>
                            <p>Borrowed at: {{ $book->borrowed_at}}</p>
                        @else
                        <p>Borrow this book (input your id)</p>
                        <form action="/api/books/borrow/{{$book->id}}" method="post">
          <label for="id">Your ID</label>
          <input class="form-control" type="number" name="id" id="id" value="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
     
  </form>
                        @endif


                        @if ($book->returned_at)
                            <p>Returned at: {{ $book->returned_at}}</p>
                        @endif 
                        
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
