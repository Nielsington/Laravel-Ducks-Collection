<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Adds a get route to root which calls a callback function.
// The callback is the show() method from the controller
// <a href="{{route('contact)}}"

Route::get('/', [HomepageController::class, 'show'])->name("home");
Route::get('/about', [AboutController::class, 'show'])->name("about");

Route::get('/product', [ProductController::class, 'show'])->name("product");
Route::get('/product/{duck}', [ProductController::class, 'showProduct']);

Route::get('/contact', [ContactController::class, 'show'])->name("contact");
Route::post('/contact', [ContactController::class, 'getForm'])->name("submit-contact");