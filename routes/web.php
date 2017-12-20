<?php

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
    return view('landing');
});
Route::get('/list',  'TenagaKerjaController@showList');
Route::get('/list/profile/{id}', 'TenagaKerjaController@showProfile');

Route::middleware(['level:App\ProfilPenyewa'])->group(function(){
    Route::get('/user/manage-kontrak', 'KontrakKerjaController@showList')->name('manage-kontrak');

    Route::get('user/manage-kontrak/upload/{id}', 'DokumenController@showUpload');
    Route::post('user/manage-kontrak/upload/{id}', 'DokumenController@uploadDokum');

    Route::get('user/manage-kontrak/batal/{id}', 'PembatalanController@showPage');
    Route::post('user/manage-kontrak/batal/{id}', 'PembatalanController@newPembatalan');

    Route::get('user/manage-kontrak/review/{id}','ReviewController@addReviewPage');
    Route::post('user/manage-kontrak/review/{id}','ReviewController@addReview');

    Route::get('/user/booking', 'BookingController@showBooking');

    Route::get('list/profile/{id}/book','BookingController@newBooking');

});

Route::middleware(['level:App\ProfilPegawai'])->group(function(){
    Route::get('staff/kelola', function () {
        return view('staffpage.mengelola');
    });
    Route::get('staff/tambah', function () {
        return view('staffpage.tambah');
    });
    Route::get('staff/dokumen', function () {
        return view('staffpage.dokumen');
    });
    Route::get('staff/keuangan', 'KeuanganController@showKeuangan');

    Route::get('staff/keuangan/tambah','KeuanganController@showTambahKeuangan');
    Route::post('staff/keuangan/tambah','KeuanganController@tambahKeuangan');

    Route::get('staff/keuangan/edit/{id}','KeuanganController@showEditKeuangan');
    Route::post('staff/keuangan/edit/{id}','KeuanganController@editKeuangan');

    Route::get('staff/jadwal', function () {
        return view('staffpage.jadwal');
    });

});

Route::middleware(['level'])->group(function (){
    Route::get('owner/verifikasi', function () {
        return view('ownerpage.verifikasi');
    });
    Route::get('owner/profillengkap', function () {
        return view('ownerpage.profil_lengkap');
    });

    Route::get('/owner/detailkontrak', function () {
        return view('ownerpage.detailkontrak');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
