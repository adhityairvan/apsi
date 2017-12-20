<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\KontrakKerja;
use App\ReviewTenagaKerja;
class ReviewController extends Controller
{
    //
    public function addReviewPage($id){
        $kontrak = KontrakKerja::find($id);
        return view('userpage.review')->with('kontrak',$kontrak);
    }
    public function addReview($id,Request $request){
        $review = new ReviewTenagaKerja;
        $review->id_profil_penyewa_jasa = $request->user()->profil_id;
        $review->id_profil_tenaga_kerja = $id;
        $review->rating_kinerja = $request->input('ratingkerja');
        $review->rating_kepuasan = $request->input('kepuasan');
        $review->isi_review = $request->input('reviewtenagakerja');
        $review->save();

        return redirect()->route('manage-kontrak');
    }
}
