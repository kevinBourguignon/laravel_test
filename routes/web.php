<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lesson/{lesson:slug}', [LessonController::class, 'view'])->name('lesson.view');
Route::get('/author/{author}', [AuthorController::class, 'view'])->name('author.view');
