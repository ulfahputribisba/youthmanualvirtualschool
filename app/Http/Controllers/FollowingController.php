<?php

namespace App\Http\Controllers;

use Auth;
use App\FollowMapel;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function following($id){
        $follow = New FollowMapel;
        $follow->user_id = Auth::user()->id;
        $follow->mapel_id = $id;
        $follow->save;

        return back();
    }
    

}
