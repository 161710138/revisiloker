<?php

namespace App\Http\Controllers;

use Session;
use App\Pelamar;
use App\User;
use App\Lowongan;
use Auth;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pel = Pelamar::with('User','Lowongan')->get();
        return view('pelamar.index',compact('pel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $o = User::all();
        $low = lowongan::all();
        return view('pelamar.create',compact('o','low'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'telepon' => 'required|max:13|unique:pelamars',
            'pesan' => 'required|max:225',
            'file_cv' => 'required|',
            'status' => 'required|'
            
        ]);
        $pel = new Pelamar;
        $pel->telepon = $request->telepon;
        $pel->pesan = $request->pesan;
        $pel->file_cv = $request->file_cv;
        $pel->user_id = Auth::user(0)->id;
        $pel->low_id = $request->low_id;
        $pel->status = $request->status;
        $pel->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pel->telepon</b>"
        ]);
        if ($request->hasFile('file_cv')) {
            $file = $request->file('file_cv');
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/assets/cv/';
            $uploadSucces = $file->move($destinationPath, $filename);
            $pel->file_cv = $filename;
        }
        $pel->save();
        return redirect()->route('pelamar.index');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pel= Pelamar::findOrFail($id);
        return view('pelamar.show',compact('pel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pel = Pelamar::findOrFail($id);
        $o = User::all();
        $low = Lowongan::all();
        $selectedo = Pelamar::findOrFail($id)->user_id;
        $selectedlow = Pelamar::findOrFail($id)->low_id;
        return view('pelamar.edit',compact('pel','o','low','selectedo','selectedlow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'telepon' => 'required|max:13',
            'pesan' => 'required|',
            'file_cv' => 'required|',
            'user_id' => 'required|',
            'status'=> 'required|',

        ]);
        $pel = Pelamar::findOrFail($id);
        $pel->telepon = $request->telepon;
        $pel->pesan = $request->pesan;
        $pel->file_cv = $request->file_cv;
        $pel->user_id = $request->user_id;
        $pel->low_id = $request->low_id;
        $pel->status = $request->status;
        $pel->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pel->telepon</b>"
        ]);
        return redirect()->route('pelamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pel = Pelamar::findOrFail($id);
        $pel->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pelamar.index');
    }
}
