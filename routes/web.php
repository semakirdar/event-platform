<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RegisterController;
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

Route::get('/admin/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{categoryId}', [EventController::class, 'index'])->name('event.index');
Route::get('/event/detail/{id}', [EventController::class, 'detail'])->name('event.detail');
Route::get('/admin/event/list', [EventController::class, 'list'])->name('event.list');
Route::get('/admin/event/{eventId}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::post('/admin/event/{id}/update', [EventController::class, 'update'])->name('event.update');
Route::get('/location/{locationId}/event', [EventController::class, 'locationEvent'])->name('location.event');

Route::get('/admin/event/{eventId}/participant/create', [ParticipantController::class, 'create'])->name('participant.create');
Route::post('/admin/participant/store', [ParticipantController::class, 'store'])->name('participant.store');

Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/list', [CategoryController::class, 'list'])->name('category.list');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/comment/create', [CommentController::class, 'create'])->name('comment.create');
Route::get('/comment/list', [CommentController::class, 'list'])->name('comment.list');
Route::get('/comment/{comment}/approve', [CommentController::class, 'approve'])->name('comment.approve');
Route::post('/comment/{id}/delete', [CommentController::class, 'delete'])->name('comment.delete');

