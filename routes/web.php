<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use Illuminate\Support\Facades\Input;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/books', function () {
    $request = Request::create('/api/books/', 'GET');

    $response = Route::dispatch($request);
    $body = $response->getOriginalContent();
    $books = json_decode($body);

    return view('books', compact('books'));
});

Route::get('/students', function () {
    $request = Request::create('/api/users/', 'GET');

    $response = Route::dispatch($request);
    $body = $response->getOriginalContent();
    $users = json_decode($body);

    return view('students', compact('users'));
});

Route::post('/students/add', function() {
  
    $request = Request::create(
        '/api/users/',
        'POST',
        Input::get());

    $response = Route::dispatch($request);
    
    
    $users = User::all();
    return view('students', compact('users'));
});

Route::put('/students/edit/{id}', function() {
    $request = Request::create(
        '/api/users/{id}',
        'PUT',
        Input::get());

    // $res = app()->handle($request);
    $response = Route::dispatch($request);
     
    $users = User::all();
    return view('students', compact('users'));
});

Route::delete('/students/delete/{id}', function() {
    $request = Request::create(
        '/api/delete/{id}',
        'DELETE');
  
    // $res = app()->handle($request);
    $response = Route::dispatch($request);
     if($response) {
         $users = User::all();
    return view('students', compact('users'));
     }
   
});

