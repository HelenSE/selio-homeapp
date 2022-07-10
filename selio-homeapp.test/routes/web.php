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


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('main.index');
    Route::resources([
        'apartment'=>\App\Http\Controllers\Admin\ApartmentController::class,
        'categoryType'=>\App\Http\Controllers\Admin\CategoryTypeController::class,
        'location'=>\App\Http\Controllers\Admin\LocationController::class,
//        'calendar'=>\App\Http\Controllers\CalendarController::class
    ]);
}

);

Route::get('property_single/{id}', [ApartmentController::class, 'index'])->name('show-apartment');
Route::get('main', [ApartmentController::class, 'show'])->name('main');
Route::get('location_apartment{id}', [LocationController::class, 'index'])->name('location-apartment');
Route::get('category_type{id}', [CategoryTypeController::class, 'index'])->name('category-apartment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


