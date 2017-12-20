<?php

namespace App\Http\Controllers;

use App\LaporanKeuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KeuanganController extends Controller
{
    //
    public function showKeuangan(){
        $keuangan = LaporanKeuangan::all();
        return view('staffpage.keuangan')->with('keuangan',$keuangan);
    }
    public function showTambahKeuangan(){
        return view('staffpage.tambah-keuangan');
    }
    public function tambahKeuangan(Request $request){
        $insert = new LaporanKeuangan;
        $insert->id_profil_pegawai = Auth::user()->profil_id;
        $insert->tanggal_transaksi = $request->input('tanggal_transaksi');
        $insert->tipe_transaksi = $request->input('tipe_transaksi');
        $insert->keterangan_transaksi = $request->input('keterangan_transaksi');
        $insert->nominal_transaksi = $request->input('nominal_transaksi');
        $insert->save();
        return Redirect::action('KeuanganController@showKeuangan');
    }
    public function showEditKeuangan($id){
        $laporan = LaporanKeuangan::find($id);
        return view('staffpage.edit-keuangan')->with('laporan',$laporan);
    }
    public function editKeuangan($id, Request $request){
        $laporan = LaporanKeuangan::find($id);
        $laporan->tanggal_transaksi = $request->input('tanggal_transaksi');
        $laporan->tipe_transaksi = $request->input('tipe_transaksi');
        $laporan->keterangan_transaksi = $request->input('keterangan_transaksi');
        $laporan->nominal_transaksi = $request->input('nominal_transaksi');
        $laporan->save();
        return Redirect::action('KeuanganController@showKeuangan');
    }
    public function deleteKeuangan($id){
        $laporan = LaporanKeuangan::find($id);
        if(is_null($laporan)!=True){
            $laporan->delete();
        }
        return Redirect::action('KeuanganController@showKeuangan');
    }

}
