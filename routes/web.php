<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shelter', [App\Http\Controllers\ShelterController::class, 'index'])->name('shelter');

Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');

Route::get('/paint', [App\Http\Controllers\PaintController::class, 'index'])->name('paint');

Route::get('/logistics', [App\Http\Controllers\LogisticsController::class, 'index'])->name('logistics');

Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');
