<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $request, $nama)
    {
        
        $result = "Hai World ".$request->nama;
        return $result; 
    }
//
    public function Kota(Request $request, $alamat)
    {
        
        $result = "Hai ".$request->nama." alamat kamu di ".$request->alamat;
        return $result; 
    }
}
