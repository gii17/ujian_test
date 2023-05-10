<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\{
    Views\Admin\Staff\StaffC,
    Services\Admin\Staff\StaffCs,
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
    'as' => 'staf.',
    'middleware' => 'auth'
], function () {
    Route::get('/', [StaffC::class, 'index'])->name('index');
    Route::get('/Create', [StaffC::class, 'create'])->name('create');
    Route::get('/Update/{name}', [StaffC::class, 'update'])->name('update');
});

Route::group([
    'prefix' => 'Service'
], function () {
    Route::post('/store', [StaffCs::class, 'store'])->name('Services.store');
    Route::put('/update/{user:id}', [StaffCs::class, 'update'])->name('Services.update');
    Route::delete('/destory/{user:id}', [StaffCs::class, 'destroy'])->name('Services.destroy');
});
