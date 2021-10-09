<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DatarsoController;
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

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact', function () {
        return view('contact');
    });
   
    Route::get('/chart', [App\Http\Controllers\ChartController::class, 'index'])->name('chart');
    Route::get('/datarso', [App\Http\Controllers\DatarsoController::class, 'index'])->name('datarso');
    Route::get('/datarso/edit/{id}','DatarsoController@edit');
    Route::post('/datarso/update','DatarsoController@update');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', [App\Http\Controllers\ProfileController::class,
         'index'])->name('profile');

    });
    