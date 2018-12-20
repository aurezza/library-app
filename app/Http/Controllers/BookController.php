<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Collection::getAttribute;

class BookController extends Controller
{
    public function index() {
        return Book::all();
    }   

    public function show($id) {
        return Book::find($id);
    }   

    public function store(Request $request) {
        $book = Book::create($request->all());

        // status object created
        return response()->json($book, 201);
    }   

    public function update(Request $request, $id) {
        // change to get request
        $book = Book::findOrFail($id);
        $anme = $request->name;
        $numberOfPages = $request->number_of_pages;
        // get name and number of pages, edit
        $book->update([
            'name'=> $name, 
            'number_of_pages'=> $numberOfPages
        ]);

        // status success
        return response()->json($book, 200);
    }   

    public function delete($id) {
        $book = Book::findOrFail($id);
        $book->delete();

        // status no content
        return response()->json($book, 204);
    }

    public function borrow(Request $request, $bookId) {
        $book = Book::findOrFail($bookId);
        $student_number = $request->student_number;
        $user = User::where('student_number', $student_number)->firstOrFail();
        $userName = $user->name;
        $book->update([
            'borrowed_by'=> $userName,
            'borrowed_at'=> Carbon::now()
        ]);

        // status no content
        return response()->json($book, 200);
    }

    public function returnBook(Request $request, $bookId) {
        $book = Book::findOrFail($bookId);
        $student_number = $request->student_number;
        $user = User::where('student_number', $student_number)->firstOrFail();
        $book->update([
            'borrowed_by'=> null,
            'borrowed_at'=> null,
            'returned_at'=> Carbon::now()
        ]);

        // status no content
        return response()->json($book, 200);
    }
}
