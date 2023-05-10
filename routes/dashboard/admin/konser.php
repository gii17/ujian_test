<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\{
    Views\Admin\Konser\KonserC,
    Services\PesananCs,
};

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

Route::group([
    'prefix' => 'List',
    'as' => 'konser.',
    'middleware' => 'auth'
], function () {
    Route::get('/', [KonserC::class, 'index'])->name('index');
    Route::get('/Create', [KonserC::class, 'create'])->name('create');
});
