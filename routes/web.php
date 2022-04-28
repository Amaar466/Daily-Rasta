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
    return view('index');
});
Route::get('/about', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/element', function () {
    return view('element');
});
Route::get('/latest_news', function () {
    return view('latest_news');
});
Route::get('/single_blog', function () {
    return view('single_blog');
});