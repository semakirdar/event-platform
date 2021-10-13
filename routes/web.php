<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/event/create', [HomeController::class, 'create'])->name('event.create');
Route::post('/event/store', [HomeController::class, 'store'])->name('event.store');

Route::get('/event/{categoryId}', [EventController::class, 'index'])->name('event.index');
Route::get('/event/detail/{id}', [EventController::class, 'detail'])->name('event.detail');
Route::get('/admin/event/list', [EventController::class, 'list'])->name('event.list');
Route::get('/admin/event/{eventId}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::post('/admin/event/{id}/update', [EventController::class, 'update'])->name('event.update');

Route::get('/admin/event/{eventId}/participant/create', [ParticipantController::class, 'create'])->name('participant.create');
Route::post('/admin/participant/store', [ParticipantController::class, 'store'])->name('participant.store');

Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/list', [CategoryController::class, 'list'])->name('category.list');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
