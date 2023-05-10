<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Views\{
    Customer\Pesanan\FormC,
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
    Route::get('/list',[FormC::class, 'pemesanan'])->name('index');
    Route::get('/acc',[FormC::class, 'acc_pesanan'])->name('acc');
    Route::get('/ticket/detail', [FormC::class, 'detail'])->name('ticket.detail');
    Route::get('/edit/{ticket_number}',[FormC::class, 'pesanan_edit'])->name('editPesanan');
    Route::get('/Laporan/{status?}', [FormC::class, 'laporan'])->name('laporan');
    Route::get('/trash', [FormC::class, 'pesanan_trash'])
            ->name('pesanan-trash');
    Route::get('/laporan', [FormC::class, 'laporan'])
            ->name('laporan');
});

Route::group([
    'prefix' => 'service'
], function () {
    Route::put('/update/{pesanan}',[PesananCs::class, 'update'])->name('Services.update.pesanan');
    Route::delete('/destroy/{pesanan}', [PesananCs::class,'destroy'])->name('Services.destroy.pesanan');
    Route::put('/Acc/{pesanan:id}',[PesananCs::class, 'acc'])->name('ServicesAcc');
    Route::post('/restore/{pesanan:id?}', [PesananCs::class, 'pesanan_restore'])
        ->name('pesanan-restore');
    Route::delete('/pesanan-forceDelete/{pesanan:id?}', [PesananCs::class, 'pesanan_forceDelete'])
        ->name('pesanan-forceDelete');
});



// ==============================================
Route::get('/Formulir', [FormC::class, 'index']);
Route::get('/ticket/{ticket_number}', [FormC::class, 'ticket'])->name('ticket');

Route::group([
    'prefix' => 'Services'
], function () {
    Route::post('/Store/Pesanan', [PesananCs::class, 'store'])->name('service.pesanan');
});
