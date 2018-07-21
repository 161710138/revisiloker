<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;
use App\Lowongan;
class FrontendController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::all()->take(8); 
        $lowongan = Lowongan::all()->take(12);
        return view('frontend.index', compact('perusahaan','lowongan'));
    }
    public function rincianperusahaan($id)
    {
        $perusahaan = Perusahaan::find($id); 
        $lowongan = Lowongan::where('pers_id',$id)->get();
        return view('frontend.rincianper', compact('perusahaan','lowongan'));
    }
     public function rincianlowongan($id)
    {
        $lowongan = Lowongan::find($id); 
        return view('frontend.rincilow', compact('lowongan'));
    }
}

