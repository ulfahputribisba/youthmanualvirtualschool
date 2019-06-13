<?php

namespace App\Http\Controllers;

use Auth;
use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
    	$gurus = Auth::id();
    	return view('guru/index',['gurus' => $gurus]);
 
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
    	$mapel = DB::table('mapel')->get();
    	return view('guru/mapel',['mapel' => $mapel]);
 
    }
    public function tambah_mapel()
    {
    	return view('guru/tambah_mapel');
 
    }
    public function simpan_mapel(Request $request){
        DB::table('mapel')->insert([
            'kode_mapel' => $request->kode,
            'nama_pelajaran' => $request->nama,
            'durasi_pelajaran' => $request->durasi
        ]);
        return redirect('/guru/mapel');
    }
    public function edit_mapel($id)
    {
        $mapel = DB::table('mapel')->where('id_pelajaran',$id)->get();
        return view('guru/edit_mapel',['mapel' => $mapel]);
    
    }
    public function perbaharui_mapel(Request $request){
        DB::table('mapel')->where('id_pelajaran',$request->id)->update([
            'kode_mapel' => $request->kode,
            'nama_pelajaran' => $request->nama,
            'durasi_pelajaran' => $request->durasi
        ]);
        return redirect('/guru/mapel');
    }
    public function hapus_mapel($id)
    {
        DB::table('mapel')->where('id_pelajaran',$id)->delete();
        return redirect('/guru/mapel');
    }

    //MATERI
    
}
