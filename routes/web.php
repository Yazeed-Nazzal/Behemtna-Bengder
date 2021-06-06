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
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/management-contact', [App\Http\Controllers\contactController::class, 'management_contact'])->name('management_contact');
Route::resource('contact-as', App\Http\Controllers\contactController::class);
Route::resource('/management-user', App\Http\Controllers\managementUserController::class);
Route::get('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info');
Route::post('/save-info', [App\Http\Controllers\HomeController::class, 'save_info'])->name('save_info');
Route::get('/SendTask/{user}', [\App\Http\Controllers\TaskController::class, 'show']);
Route::post('/SendTask/{user}', [\App\Http\Controllers\TaskController::class, 'store']);
Route::get('/ShowTask', [\App\Http\Controllers\TaskController::class, 'index']);
Route::get('/UserTasks/{user}', [\App\Http\Controllers\TaskController::class, 'UserTasks']);
