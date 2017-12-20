<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KontrakKerja;
use App\PembatalanKontrak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PembatalanController extends Controller
{
    //
    public function showPage($id){
        return view('userpage.pembatalan')->with('kontrak',$id);
    }
    public function newPembatalan($id,Request $request){
        $user = Auth::user();
        $password = $request['password'];
        if(Hash::check($password,$user->password)){
            $batal = new PembatalanKontrak;
            $batal->kontrak_kerja_id = $id;
            $batal->alasan_pembatalan = $request->input('alasan');
            $batal->tanggal_konfirmasi = $request->input('tanggal');
            $batal->save();
            return view('userpage.managekontrak');
        }
        else{
            return $this->showPage($id);
        }
    }
    public function showAllPembatalan(){
        $batal = PembatalanKontrak::all();
        return
    }
}
