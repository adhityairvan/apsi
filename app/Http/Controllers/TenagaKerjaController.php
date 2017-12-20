<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilTenagaKerja;
use App\KontrakKerja;
use Illuminate\Support\Facades\File;
use App\DetailTenagaKerja;
class TenagaKerjaController extends Controller
{
    //
    public function showList(){
        $unavail = KontrakKerja::pluck('id_profil_tenaga_kerja')->all();
        $data = ProfilTenagaKerja::whereNotIn('id',$unavail)->where('verified',1)->get();
        return view('selection')->with('list',$data);
    }

    public function showProfile($id){
        $profile = ProfilTenagaKerja::find($id);
        if (is_null($profile)){
            return view('profile');
        }
        else {
            $detail = $profile->detail;
            return view('profile')->with('profile',$profile)->with('detail',$detail);
        }
    }
    public function newTenagaKerja(Request $request){
        $tenagaKerja = new ProfilTenagaKerja;
        $tenagaKerja->nama_tenaga_kerja = $request->input('nama');
        $tenagaKerja->nomorKTP_tenaga_kerja = $request->input('noktp');
        $tenagaKerja->tanggal_lahir_tenaga_kerja = $request->inpput('tanggal_lahir');
        $tenagaKerja->alamat_tenaga_kerja = $request->input('alamat');
        $tenagaKerja->pendidikan_terakhir = $request->input('pendidikan');
        $tenagaKerja->domisili = $request->input('domisili');

        if(File::exist($request->file('foto'))){
            $path = $request->file('foto')->store('tenaga_kerja');
            $tenagaKerja->photoUrl = $path;
        }
        $tenagaKerja->save();
        $detail = new DetailTenagaKerja;
        $detail->id_profil_tenaga_kerja = $tenagaKerja->id;
        if($request->hasFile('foto-extra')){
            $extra = array();
            foreach ($request->file('foto-extra') as $key=>$file) {
                $extra[] = $file->store('tenaga_kerja');
            }
            $detail->urlImage3 = array_pop($extra);
            $detail->urlImage2 = array_pop($extra);
            $detail->urlImage1 = array_pop($extra);
        }
        $detail->save();

    }

}
