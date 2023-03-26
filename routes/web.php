<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::middleware('auth')->group(function(){
    Route::resource('/buku','BukuController')->middleware('privilege:admin&user');
    Route::get('/buku-search','BukuController@search')->name('buku.search')->middleware('privilege:admin&user');
    Route::resource('/anggota','AnggotaController')->middleware('privilege:admin');
    Route::get('/anggota-search','AnggotaController@search')->name('anggota.search')->middleware('privilege:admin');
    Route::resource('/transaksi','TransaksiController')->middleware('privilege:admin&user');
    Route::get('/transaksi-search','TransaksiController@search')->name('transaksi.search')->middleware('privilege:admin&user');
    Route::resource('/riwayat','HistoryController')->middleware('privilege:admin&user');
    Route::get('/all','HistoryController@showAll')->name('riwayat.all')->middleware('privilege:admin&user');
    Route::get('/laporan','LaporanController@index')->name('laporan.index')->middleware('privilege:admin&user');
    Route::get('/cetak-pertanggal-form','LaporanController@cetakform')->name('cetak-pertanggal-form')->middleware('privilege:admin&user');
    Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}','LaporanController@cetakpertanggal')->name('cetak-data-pertanggal')->middleware('privilege:admin&user');
    Route::get('/cetak-data-pertanggalpdf/{tglawal}/{tglakhir}','LaporanController@cetakpertanggalpdf')->name('cetak-data-pertanggalpdf')->middleware('privilege:admin&user');
    Route::get('/cetak-transaksi-pertanggal/{dari_tgl}/{sampai_tgl}','LaporanController@cetaktransaksipertanggal')->name('cetak-transaksi-pertanggal')->middleware('privilege:admin&user');
    Route::get('/cetak-transaksi-pertanggalpdf/{dari_tgl}/{sampai_tgl}','LaporanController@cetaktransaksipertanggalpdf')->name('cetak-transaksi-pertanggalpdf')->middleware('privilege:admin&user');
    Route::get('/buku-pdf','LaporanController@bukuPdf')->name('buku.pdf')->middleware('privilege:admin&user');
    Route::get('/cetak-pdf','LaporanController@bukuPdf')->name('cetak.pdf')->middleware('privilege:admin&user');
    Route::get('/buku-excel','LaporanController@bukuExcel')->name('buku.excel')->middleware('privilege:admin&user');
    Route::get('/transaksi-pdf','LaporanController@transaksiPdf')->name('transaksi.pdf')->middleware('privilege:admin&user');
    Route::get('/transaksi-excel','LaporanController@transaksiExcel')->name('transaksi.excel')->middleware('privilege:admin&user');
    Route::resource('/petugas','PetugasController');
});
