<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/event/create', [HomeController::class, 'create'])->name('event.create');
Route::post('/event/store', [HomeController::class, 'store'])->name('event.store');

Route::get('/event/{categoryId}', [EventController::class, 'index'])->name('event.index');
Route::get('/event/detail/{id}', [EventController::class, 'detail'])->name('event.detail');


