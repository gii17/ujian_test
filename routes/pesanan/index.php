<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Views\{
    Pesanan\FormC,
    Admin\Dashboard\DashboardC,
};
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

Route::group([
    'prefix' => 'Pesanan',
    'as' => 'pesanan.',
    'middleware' => 'auth'
], function () {
    Route::get('/list',[DashboardC::class, 'pemesanan'])->name('index');
    Route::get('/acc',[DashboardC::class, 'acc_pesanan'])->name('acc');
    Route::get('/ticket/detail', [DashboardC::class, 'detail'])->name('ticket.detail');
    Route::get('/edit/{ticket_number}',[DashboardC::class, 'pesanan_edit'])->name('editPesanan');
    Route::get('/Laporan/{status?}', [DashboardC::class, 'laporan'])->name('laporan');
});

Route::group([
    'prefix' => 'service'
], function () {
    Route::put('/update/{pesanan}',[PesananCs::class, 'update'])->name('Services.update');
    Route::delete('/destroy/{pesanan}', [PesananCs::class,'destroy'])->name('Service.destroy');
    Route::put('/Acc/{pesanan:id}',[PesananCs::class, 'acc'])->name('ServicesAcc');
});



// ==============================================
Route::get('/Formulir', [FormC::class, 'index']);
Route::get('/ticket/{ticket_number}', [FormC::class, 'ticket'])->name('ticket');

Route::group([
    'prefix' => 'Services'
], function () {
    Route::post('/Store/Pesanan', [PesananCs::class, 'store'])->name('service.pesanan');
});
