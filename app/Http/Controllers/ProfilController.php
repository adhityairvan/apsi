<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilPenyewa;
use App\ProfilPegawai;
class ProfilController extends Controller
{
    //
    public function newPenyewa(Request $request){
        $profil = ProfilPenyewa::create([
            'id_akun' => Auth::id(),
            'nomorKTP_penyewa_jasa' => $request->input('noKTP'),
            'nama_penyewa_jasa' => $request->input('namaLengkap'),
            'alamat_penyewa_jasa' => $request->input('alamat')
        ]);
        return view('profil_page');
    }
}
