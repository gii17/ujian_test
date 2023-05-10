<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeC,FormC};

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

Route::get('/', [HomeC::class, 'index'])->name('index');
Route::get('/blog', [HomeC::class, 'blog'])->name('blog');
Route::get('/about', [HomeC::class, 'about'])->name('about');
Route::get('/track', [HomeC::class, 'track'])->name('track');

Route::group(['prefix' => 'Pesanan'], __DIR__.'/pesanan/index.php');
Route::get('/form', [FormC::class, 'index'])->name('form');

Route::group(['prefix' => 'Office'], function () {
    Route::group(['prefix' => 'Auth'], function () {
        Auth::routes();
    });
    Route::group(['prefix' => 'Dashboard'], __DIR__.'/dashboard/index.php');
});
