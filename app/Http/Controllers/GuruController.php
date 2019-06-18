<?php

namespace App\Http\Controllers;

use Auth;
use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Guru $guru)
    {
        //dd($guru);
        $guru = Guru::find($guru);
        return view('guru/index', compact('guru'));
    }
    public function edit_bio($id)
    {
        $gurus = DB::table('gurus')->where('id',$id)->get();
        return view('guru/edit_bio',['gurus' => $gurus]);
    
    }
    public function perbaharui_bio(Request $request){
        DB::table('gurus')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/guru');
    }

    // MAPEL
    public function mapel()
    {
    	$mapels = DB::table('mapels')->get();
    	return view('guru/mapel',['mapels' => $mapels]);
 
    }
    public function tambah_mapel()
    {
    	return view('guru/tambah_mapel');
 
    }
    public function simpan_mapel(Request $request){
        DB::table('mapels')->insert([
            'judul_mapel' => $request->nama,
            'deskripsi_mapel' => $request->durasi,
            'materi' => $request->materi,
            'durasi' => $request->durasi
        ]);
        return redirect('/guru/mapel');
    }
    public function edit_mapel($id)
    {
        $mapels = DB::table('mapels')->where('id',$id)->get();
        return view('guru/edit_mapel',['mapels' => $mapels]);
    
    }
    public function perbaharui_mapel(Request $request){
        DB::table('mapels')->where('id',$request->id)->update([
            'judul_mapel' => $request->nama,
            'deskripsi_mapel' => $request->durasi,
            'materi' => $request->materi,
            'durasi' => $request->durasi
        ]);
        return redirect('/guru/mapel');
    }
    public function hapus_mapel($id)
    {
        DB::table('mapels')->where('id',$id)->delete();
        return redirect('/guru/mapel');
    }
    
}
