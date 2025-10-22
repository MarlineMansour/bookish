<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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
Route::get('/about',[AboutController::class,'DirectToAbout'])->name('about');
Route::get('/books/{category_id}', [BookController::class,'index'])->name('books_by_category');
Route::post('/books/check',[BookController::class,'CheckQuantity'])->name('checkQuantity');
Route::get('/search_results',[SearchController::class,'index'])->name('search_results');

Route::middleware('guest')->group(function(){
    Route::get('/register',[AuthenticationController::class,'DirectToRegister'])->name('register_user');
    Route::get('/Show_Login',[AuthenticationController::class,'ShowLogin'])->name('login');
    Route::post('/register-store',[AuthenticationController::class,'register'])->name('register_store');
    Route::post('/login_User',[AuthenticationController::class,'login'])->name('login_User');
    Route::get('/forgot_password',[UserController::class,'ForgotPassword'])->name('forgot_password');
});

//Route::get('/checkout',[CheckoutController::class,'ShowPurchasedProduct'])->name('checkout')->middleware('auth');
//Route::post('/order',[OrderController::class,'index'])->name('order')->middleware('auth');

Route::middleware('auth')->group(function (){
    Route::post('/order',[OrderController::class,'index'])->name('order');
    Route::get('/checkout',[CheckoutController::class,'ShowPurchasedProduct'])->name('checkout');
    Route::get('/logout',[AuthenticationController::class,'logout'])->name('logout');


});
//Admin manages categories
Route::get('/list_categories',[CategoryController::class,'index'])->name('ListCategories');
Route::get('/categories',[CategoryController::class,'create'])->name('create_category');
Route::post('/store_category',[CategoryController::class,'store'])->name('store_category');
Route::get('/edit_category',[CategoryController::class,'edit'])->name('edit_category');
Route::post('/update_category',[CategoryController::class,'update'])->name('update_category');
Route::get('/delete_category',[CategoryController::class,'delete'])->name('delete_category');


//Admin manages books
Route::get('/list_books',[BookController::class,'ShowBooks'])->name('ListBooks');
Route::get('/create_book',[BookController::class,'create'])->name('create_book');
Route::post('/store_book',[BookController::class,'store'])->name('store_book');
Route::get('/edit_book',[BookController::class,'edit'])->name('edit_book');
Route::post('/update_book',[BookController::class,'update'])->name('update_book');
Route::get('/delete_book',[BookController::class,'delete'])->name('delete_book');
Route::get('/fill_book_table',[BookController::class,'getBooks'])->name('books');

