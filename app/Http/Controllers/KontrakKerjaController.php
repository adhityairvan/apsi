<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KontrakKerja;
use Illuminate\Support\Facades\Auth;

class KontrakKerjaController extends Controller
{
    //
    public function showList(){
        $user = Auth::user();
        $list = KontrakKerja::where('id_profil_penyewa_jasa',$user->profil_id)->get();
        return view('userpage.managekontrak')->with('kontraks',$list);
    }

}
