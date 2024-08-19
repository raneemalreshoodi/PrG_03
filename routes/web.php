<?php
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


// Route to display the contact form
Route::get('/contact', function () {
    return view('contacts.index'); // Ensure this is the correct view with the contact form
})->name('contact.form');
// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'index'])->name('contact.submit');


Route::get('/clients' ,[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/create' ,[ClientController::class,'create'])->name('clients.create');
Route::post('/clients' ,[ClientController::class,'store'])->name('clients.store');
Route::get('/clients/{client}/edit' ,[ClientController::class,'edit'])->name('clients.edit');
Route::put('/clients/{client}' ,[ClientController::class,'update'])->name('clients.update');
Route::delete('/clients/{client}' ,[ClientController::class,'destroy'])->name('clients.destroy');