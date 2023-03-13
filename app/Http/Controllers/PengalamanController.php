<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    //
    public function desy(){
        return view('desypengalaman');
    }
    public function maria(){
        return view('mariapengalaman');
    }
}
