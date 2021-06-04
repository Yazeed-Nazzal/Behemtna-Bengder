<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/management-contact', [App\Http\Controllers\contactController::class, 'management_contact'])->name('management_contact');
Route::resource('contact-as', App\Http\Controllers\contactController::class);
Route::resource('/management-user', App\Http\Controllers\managementUserController::class);
Route::get('/SendTask/{user}',[\App\Http\Controllers\TaskController::class,'show']);
Route::get('/ShowTask',[\App\Http\Controllers\TaskController::class,'index']);
