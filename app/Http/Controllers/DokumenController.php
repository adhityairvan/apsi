<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class DokumenController extends Controller
{
    //
    public function showUpload($kontrakID){
        return view('userpage.uploaddokumen')->with('kontrak',$kontrakID);
    }
    public function uploadDokum($id,Request $request){
        $file = $request->file('dokumen');
        $path = $id.'-'.Auth::user()->id.'Dokumen.pdf';
        Storage::disk('local')->put($path,$file);
        return redirect()->route('manage-kontrak');
    }
}
