<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function about(){
        $title =['key1'=>'dddddd',
        'keys'=>['1','2','3']];
        return view('pages.Hello')->with($title);
    }
}
