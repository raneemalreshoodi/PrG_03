<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
Route::resource('services', ServicesController::class ,'Service');



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
    return view('welcome');
});
Route::get('/header',function(){
    return view('header');

});
// Route::get('/services',function(){
//     return view('services');

// });
// Route::post('/sendser', [ServicesController::class, 'services']);

Route::get('/contact',function(){
    return view('contact');

});
Route::post('/sendcon', [ContactController::class, 'contact']);


Route::get('/content',function(){
    return view('content');

});
Route::get('/footer',function(){
    return view('footer');

});
Route::get('/insert',function(){
    return view('input');

});
// Route::get('/about',function(){
//     return view('about');

//  });
// Route::get('/clients',function(){
//     return view('clients');

// });

