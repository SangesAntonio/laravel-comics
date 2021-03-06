<?php

use Illuminate\Support\Facades\Route;

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
    return view('comics');
})->name('/');
Route::get('/header', function () {
    return view('header');
})->name('header');
Route::get('/jumbotron', function () {
    return view('jumbotron');
})->name('jumbotron');
Route::get('/footer', function () {
    return view('footer');
})->name('footer');


Route::get('/content', function () {

    return view('content');
})->name('content');


Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (!is_numeric($id) || $id < 0 || $id > count($comics)) {
        abort('404');
    }
    $comic = $comics[$id];
    return view('comic', compact('comic'));
})->name('comic');
