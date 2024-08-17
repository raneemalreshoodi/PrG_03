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

Route::get('/hello', function () {
    return view('hello');
});
Route::get('/header',function(){
    return view('header');

});
// Route::get('/about',function(){
//     return view('about');

// });
// Route::get('/clients',function(){
//     return view('clients');

// });
// Route::get('/services',function(){
//     return view('services');

// });
// Route::get('/contact',function(){
//     return view('contact');

// });


Route::get('/content',function(){
    return view('content');

});
Route::get('/footer',function(){
    return view('footer');

});
