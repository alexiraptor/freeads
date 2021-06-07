<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\MailController;

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

// route pour la home page
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// CRUD USER

// Route user sans middleware
// Route::resource('users', UserController::class);

// Route with middleware for Admin
Route::middleware('RoleAdmin')->group(function(){
    Route::resource('users', UserController::class);
    Route::resource('ads', AdController::class);
    Route::get('product', [AdController::class, 'product'])->name('product');
});

// Route with middleware for User
Route::middleware('RoleUser')->group(function(){
    Route::get('display/ads', [UserController::class, 'display'])->name('display');
    Route::get('detail/ad/{ad}', [UserController::class, 'detail'])->name('detail');
});


// SEARCH BAR
Route::middleware('RoleUser')->group(function(){
    Route::get('/search', [AdController::class, 'search'])->name('search');
});

// Mail Contact
// Route::get('mail/send', 'App\Http\Controllers\MailController@send');

