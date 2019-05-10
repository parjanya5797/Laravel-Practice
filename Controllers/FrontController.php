<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
    $names=array("Parjanya","Manish","Hada");
   // dd($names);
   return view('front.names')->with('names',$names);
}
}
