<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;



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



  
    

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/chart', [App\Http\Controllers\ChartController::class, 'index'])->name('chart');
    Route::get('/table', [App\Http\Controllers\TableController::class, 'index'])->name('table');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', [App\Http\Controllers\ProfileController::class,
         'index'])->name('profile');

    });
    