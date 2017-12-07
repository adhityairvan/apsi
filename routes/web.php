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
    Route::get('/user/manage-kontrak', function (){
        return view('userpage.managekontrak');
    });

    Route::get('user/manage-kontrak/upload', function () {
        return view('userpage.uploaddokumen');
    });

    Route::get('user/manage-kontrak/batal', function () {
        return view('userpage.pembatalan');
    });

    Route::get('user/manage-kontrak/review', function () {
        return view('userpage.review');
    });

    Route::get('/user/detail', function () {
        return view('userpage.detail-booking  ');
    });

});




Route::get('staff/kelola', function () {
    return view('staffpage.mengelola');
});
Route::get('staff/tambah', function () {
    return view('staffpage.tambah');
});
Route::get('staff/dokumen', function () {
    return view('staffpage.dokumen');
});
Route::get('staff/keuangan', function () {
    return view('staffpage.keuangan');
});
Route::get('owner/verifikasi', function () {
    return view('ownerpage.verifikasi');
});
Route::get('owner/profillengkap', function () {
    return view('ownerpage.profil_lengkap');
});
Route::get('staff/jadwal', function () {
    return view('staffpage.jadwal');
});
Route::get('/owner/detailkontrak', function () {
    return view('ownerpage.detailkontrak  ');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
