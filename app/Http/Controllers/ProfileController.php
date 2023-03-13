<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($profile=''){
        if($profile=='desy'){
            return view('desyprofile');
        }else if($profile=='maria'){
            return view('mariaprofile');
        }else{
            return view('dashboard');
        }
    }
}
