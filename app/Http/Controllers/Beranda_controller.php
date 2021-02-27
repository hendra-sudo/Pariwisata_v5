<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_controller extends Controller
{
    public function index(){
        $title = 'Beranda';
        // $data = \DB::table('m_berita')->get();

        // return view('berita.berita_index',compact('title','data'));
        return view('berita.berita_index',compact('title'));
    }
}
