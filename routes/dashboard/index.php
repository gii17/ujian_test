<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\{
    Services\PesananCs,
    DashboardC
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


Route::get('/', [DashboardC::class, 'index'])->name('home');
Route::group([
    'prefix' => 'Pesanan'
], function () {
    Route::get('/list',[DashboardC::class, 'pemesanan'])->name('list-pemesanan');
    Route::get('/acc',[DashboardC::class, 'acc_pesanan'])->name('acc.pesanan');
    Route::get('/ticket/detail', [DashboardC::class, 'detail'])->name('ticket.detail');
    Route::get('/edit/{ticket_number}',[DashboardC::class, 'pesanan_edit'])->name('editPesanan');
});

Route::group([
    'prefix' => 'service'
], function () {
    Route::put('/update/{pesanan}',[PesananCs::class, 'update'])->name('Services.update');
    Route::delete('/destroy/{pesanan}', [PesananCs::class,'destroy'])->name('Service.destroy');
    Route::put('/Acc/{pesanan:id}',[PesananCs::class, 'acc'])->name('ServicesAcc');
});
