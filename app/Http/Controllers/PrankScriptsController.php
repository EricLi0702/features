<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\app_prank_scripts;

class PrankScriptsController extends Controller
{
    //

    public function getPranks(){
        $allPranks = app_prank_scripts::orderBy('created','desc')->paginate(3);
        return response()->json($allPranks,200);
    }
}
