<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
 return view('welcome');
});

Route::resource('products', ProductController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
