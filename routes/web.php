<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsViewController;

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
    return view('/home');
});

Route::get('/info', function () {
    return view('/info');
});


// Route::post('/formulario',[App\Http\Controllers\FormController::class, 'postCreate']);

// Route::get('/formulario', function () {
//     return view('/formulario');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home',[App\Http\Controllers\HomeController::class, 'getNews'])->name('get_news');

Route::get('/',[App\Http\Controllers\HomeController::class, 'getNews'])->name('get_news');


Route::group(['middleware' => 'auth'], function () {
    Route::post('/formulario',[App\Http\Controllers\FormController::class, 'postCreate']);
    Route::get('/formulario', function () {return view('/formulario');});
    Route::get('/formulario/grafica',[App\Http\Controllers\ChartController::class, 'index']);
    Route::get('/formulario/grafica',[App\Http\Controllers\ChartController::class, 'getUsersInfo'])->name('getUsersInfo');
    // Route::get('/formulario/grafica',[App\Http\Controllers\ChartController::class, 'getUsersInfoA'])->name('getUsersInfoA');
    //Route::apiResource('/resultado', App\Http\Controllers\APIController::class);
});

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
//     Route::post('/formulario',[FormController::class, 'postCreate']);
// });

