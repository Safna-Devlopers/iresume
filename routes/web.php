<?php

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

Route::get('/', [App\Http\Controllers\publicController::class, 'index'])->name('index');
Route::get('/resume', [App\Http\Controllers\publicController::class, 'resume'])->name('resume');
Route::get('/works', [App\Http\Controllers\publicController::class, 'works'])->name('works');
Route::get('/works/{id}', [App\Http\Controllers\publicController::class, 'show_work'])->name('show_work');
Route::get('/contact-us', [App\Http\Controllers\publicController::class, 'contact'])->name('contact');

Auth::routes([
    'register' => false,
    'login' => true,
    'logout' => true,
    'verify' => false
]);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Admin Panel
Route::get('admin-panel/', [App\Http\Controllers\admin\dashboard::class, 'dashborad'])->name('Dashborad');
Route::get('admin-panel/dashborad', [App\Http\Controllers\admin\dashboard::class, 'dashborad'])->name('a_Dashborad');
