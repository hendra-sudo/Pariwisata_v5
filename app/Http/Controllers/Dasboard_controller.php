<?php

namespace App\Http\Controllers;

use App\Models\M_akomodasi;
use Illuminate\Http\Request;

use App\Models\M_event;
use App\Models\M_berita;
use App\Models\M_cinderamata;
use App\Models\M_kategori;
use App\Models\M_kuliner;
use App\Models\M_wisata;
use App\Models\M_pendapatan;
use App\Models\M_wahana;

class Dasboard_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Dasboard';

        $tot_event      = M_event::count();
        $tot_berita     = M_berita::count();
        $tot_kategori   = M_kategori::count();
        $tot_wisata     = M_wisata::count();

        $tot_akomodasi  = M_akomodasi::count();
        $tot_kuliner    = M_kuliner::count();
        $tot_wahana     = M_wahana::count();
        $tot_cinderamata     = M_cinderamata::count();


        $dt             = M_pendapatan::orderBy('tahun','asc')->get();

        // $dt = \DB::table('m_pendapatan')->where('pendapatan_id',$pendapatan_id)->first();

        return view('dasboard.dasboard_index',compact('title','tot_akomodasi','tot_cinderamata','tot_wahana','tot_kuliner','tot_event','tot_berita','tot_kategori','tot_wisata','dt'));
    }




}
