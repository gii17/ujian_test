<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Views\Pesanan\{FormC};
use App\Http\Controllers\Services\{PesananCs};

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

Route::get('/Formulir', [FormC::class, 'index']);
Route::get('/ticket/{ticket_number}', [FormC::class, 'ticket'])->name('ticket');

Route::group([
    'prefix' => 'Services'
], function () {
    Route::post('/Store/Pesanan', [PesananCs::class, 'store'])->name('service.pesanan');
});
