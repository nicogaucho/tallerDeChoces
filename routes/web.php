<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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
/* HOME */
Route::get('/', [PublicController::class, 'index'])->name('home');

/* SERVICES */
Route::get('/services', [PublicController::class, 'services'])->name('services');

/* SALES */
Route::get('/sales', [PublicController::class, 'sales'])->name('sales');

/* CONTACT */
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');


// form insert announcement in <services class="blade php"
Route::post('/sales/submit', [PublicController::class, 'submit'])->name('sales.submit');
// from contact mail in section contact 

// create footer each page 

// building assets 


