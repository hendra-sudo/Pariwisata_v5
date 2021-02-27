<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wisatawan_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Wisatawan  ';
        $data = \DB::table('m_pendapatan')->get();

        return view('wisatawan.wisatawan_index',compact('title','data'));
    }



    // end
}
