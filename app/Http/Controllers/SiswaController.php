<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
    	$mapels = DB::table('mapels')->paginate(6);
    	return view('siswa/index',['mapels' => $mapels]);
 
    }
}
