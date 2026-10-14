<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop-detials', function () {
    return view('shopDetials');
})->name('shopDetials');


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/chackout', function () {
    return view('chackout');
})->name('chackout');


Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonials');

Route::get('/404-page', function () {
    return view('404-page');
})->name('404-page');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');











Route::get('/register', [RegisterController::class, 'index'])->name('admin.register');
Route::post('/register', [RegisterController::class, 'store'])->name('admin.register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/stores', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// this is the route admin

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('admin.users');
    Route::post('/user', [UserController::class, 'store'])->name('admin.users.store');

    Route::prefix('products')->group(function () {
        Route::get('/list', [ProductController::class, 'index'])->name('admin.products');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.creates');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
    });


    Route::get('/dashboard', function () {
        return view('admin-panal.dashboard');
    })->name('dashboard');
});
