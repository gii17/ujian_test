<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\{
    Views\Admin\Konser\KonserC,
    Services\Admin\Konser\KonserCs
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
    'middleware' => ['auth', 'role:Admin']
], function () {
    Route::get('/', [KonserC::class, 'index'])->name('index');
    Route::get('/Create', [KonserC::class, 'create'])->name('create');
    Route::get('/Update/{konser:name_konser}/{konser_id}', [KonserC::class, 'update'])->name('update');
    Route::get('/show/{konser:name_konser}', [KonserC::class, 'show'])->name('show');
});

Route::group([
    'prefix' => 'Service'
], function () {
    Route::post('/store', [KonserCs::class, 'store'])->name('Services.store.konser');
    Route::put('/update/{konser:id}', [KonserCs::class, 'update'])->name('Services.update.konser');
    Route::delete('/destory/{konser:id}', [KonserCs::class, 'destroy'])->name('Services.destroy.konser');
});
