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
    return view('home');
});
Route::get('/myStory', function () {
    return view('myStory');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/project', function () {
    return view('project');
});
route::get('gallery', function () {
    return view('gallery');
});
