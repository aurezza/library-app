<?php

use App\Book;
use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Book routes
Route::get('books', 'BookController@index');
Route::get('books/{id}', 'BookController@show');
Route::post('books', 'BookController@store');
Route::put('books/{id}/{name}/{numberOfPages}', 'BookController@update');
Route::delete('books/{id}', 'BookController@delete');
Route::post('books/borrow/{bookId}/{userId}', 'BookController@borrow');
Route::post('books/returnBook/{id}', 'BookController@returnBook');

// User routes
Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}/{name}/{studentNumber}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');
