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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/admin','as'=>'admin.','middleware'=>['auth','admin']], function () {
    Route::get('/',[App\Http\Controllers\Admin\AccountController::class, 'dashboard'])->name('dashboard');
    Route::group(['namespace' => "App\Http\Controllers\Admin"], function () {
        Route::resource('users', UserController::class);
        Route::get('/users/verify/{user}',[App\Http\Controllers\Admin\UserController::class, 'verify'])->name('users.verify');
    });
});
