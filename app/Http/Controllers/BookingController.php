<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    public function showBooking(){
        $user_profile = Auth::user()->profil_id;
        $book = Booking::where('id_profil_penyewa_jasa',$user_profile)->get();
        return view('userpage.detail-booking')->with('book',$book);
    }
    public function newBooking($id){
        $newBook = new Booking;
        $newBook->id_profil_penyewa_jasa = Auth::user()->profil_id;
        $newBook->id_profil_tenaga_kerja = $id;
        $newBook->save();
    }

    public function listBooking(){
        $list = Booking::whereNull('tanggal_wawancara')->get();
        return view('staffpage.jadwal')->with('list',$list);
    }
}
