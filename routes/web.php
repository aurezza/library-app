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

Route::get('/', function () {
    $request = Request::create('/api/books/', 'GET');

    $response = Route::dispatch($request);
    $body = $response->getOriginalContent();
    $books = json_decode($body);

    return view('home', compact('books'));
});

