<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
    	$mapel = DB::table('mapel')->get();
    	return view('siswa/index',['mapel' => $mapel]);
 
    }
}
