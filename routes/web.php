<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'RedirectToHome'])->name('home');

Route::get('/books/{category_id}', [BookController::class,'index'])->name('books_by_category');
Route::get('/register',[AuthenticationController::class,'DirectToRegister'])->name('register_user');
Route::get('/login',[AuthenticationController::class,'ShowLogin'])->name('login_user');
Route::get('/checkout/',[CheckoutController::class,'ShowPurchasedProduct'])->name('checkout');
Route::post('/books/check',[BookController::class,'CheckQuantity'])->name('checkQuantity');
Route::get('/about',[AboutController::class,'DirectToAbout'])->name('about');

