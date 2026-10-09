<?php

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

Route::get('/admins', function () {
    return view('admin-panal.login');
})->name('contact');

Route::get('/registers', function () {
    return view('admin-panal.register');
})->name('contact');




Route::get('/dashboard', function () {
    return view('admin-panal.dashboard');
})->name('contact');

// this is the route users
Route::get('/user',[UserController::class,'index'])->name('admin.users');
Route::get('/products',[ProductController::class,'index'])->name('admin.products');
Route::get('/creates',[ProductController::class,'create'])->name('admin.creates');









