<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryTypeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('admin', function () {
    return view('admin.index');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('apartment', \App\Http\Controllers\Admin\ApartmentController::class);
}

);

Route::get('property_single/{id}', [ApartmentController::class, 'index'])->name('show-apartment');
Route::get('main', [ApartmentController::class, 'show'])->name('main');
Route::get('location_apartment{id}', [LocationController::class, 'index'])->name('location-apartment');
Route::get('category_type{id}', [CategoryTypeController::class, 'index'])->name('category-apartment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


