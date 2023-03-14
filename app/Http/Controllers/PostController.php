<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function desy(){
        $table = Post::all();
        return view('desyprofile', ['desy'=>$table]);
    }
    public function maria(){
        $table = Post::all();
        return view('mariaprofile', ['maria'=>$table]);
    }
    
}
?>