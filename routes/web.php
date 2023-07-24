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
    $comics = config('comics.comics');
    return view('products.comics', compact('comics'));
})->name('homepage');
Route::get('/{comic}', function ($key){
    $comics = config('comics.comics');
    $comic = $comics[$key];
    return view('products.comic', compact('comic'));
});
