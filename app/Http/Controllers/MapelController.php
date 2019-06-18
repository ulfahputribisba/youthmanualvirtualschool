<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function index($id)
    {
    	$mapels = DB::table('mapels')->where('id',$id)->get();
        return view('siswa/rincian_mapel',['mapels' => $mapels]);
 
    }

    // public function following($id){
    //     $follow = New FollowMapel;
    //     $follow->siswa_id = Auth::siswa()->id;
    //     $follow->mapel_id = $id;
    //     $follow->save;

    //     return back();
    // }

    
}
