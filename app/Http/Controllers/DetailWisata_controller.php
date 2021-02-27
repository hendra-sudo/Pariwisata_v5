<?php

namespace App\Http\Controllers;

use App\Models\M_berita;
use App\Models\M_event;
use App\Models\M_wisata;
use Illuminate\Http\Request;

class DetailWisata_controller extends Controller
{
    //Tampilan Welcome.blade.php
    public function index(){
        // $wisata = \DB::table('m_wisata as a')->join('m_kategori as k','k.kategori_id','=','a.kategori')->select('a.nama','a.deskripsi','a.gambar','a.created_at','k.kategori_nama as kategori','a.wisata_id')->orderby('created_at','desc')->where('m_wisata.status','!=',1)->paginate(5);
        $wisata = M_wisata::orderBy('kategori','asc')->where('m_wisata.status','!=',0)->paginate(3);



        return view('welcome',compact('wisata'));
    }

    //Button Search
    public function search(Request $request){
        $search = $request->search;
        $wisata = \DB::table('m_wisata as a')->join('m_kategori as k','k.kategori_id','=','a.kategori')->where('a.nama','like','%'.$search.'%')->orWhere('a.deskripsi','like','%'.$search.'%')->select('a.nama','a.deskripsi','a.gambar','a.created_at','k.kategori_nama as kategori','a.wisata_id')->orderby('created_at','desc')->paginate(5);
        // $artikel = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.id_kategori')->where('a.judul','like','%'.$search.'%')->orWhere('a.isi','like','%'.$search.'%')->select('a.judul','a.isi','a.gambar','a.created_at','k.nama as kategori','a.artikel_id')->orderby('created_at','desc')->paginate(1);

        return view('welcome',compact('wisata'));
    }

    //Menampilkan Tampilan deatil Wisata
    public function detail($wisata_id){
        $wisata = M_wisata::where('wisata_id',$wisata_id)->first();
        // $wisata = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();

        return view('detail',compact('wisata'));
    }

    //Menampilkan Tampilan deatil Events
    public function detail_event($event_id){
        $event = M_event::where('event_id',$event_id)->first();
        // $wisata = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();

        return view('event_detail',compact('event'));
    }
    //Menampilkan Tampilan deatil Berita
    public function detail_berita($berita_id){
        $berita = M_berita::where('berita_id',$berita_id)->first();
        // $wisata = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();

        return view('berita_detail',compact('berita'));
    }

    //Menampilkan post pada setiap kategori
    public function wisata_kategori($kategori_id){
        // $data = \DB::table('m_wisata as a')->join('m_kategori as k','k.kategori_id','=','a.kategori')->where('a.kategori_id',$kategori_id)->select('a.nama','a.deskripsi','a.gambar','a.created_at','k.kategori_nama as kategori','a.wisata_id')->orderby('created_at','desc')->get();
        $data = \DB::table('m_wisata as a')->join('m_kategori as k','k.kategori_id','=','a.kategori')->where('a.kategori',$kategori_id)->select('a.nama','a.deskripsi','a.gambar','a.created_at','k.kategori_nama as kategori','a.wisata_id')->orderby('created_at','asc')->get();
        // $data = \DB::table('m_wisata')->where('kategori_id',$kategori_id)->get();
        // $wisata = M_wisata::get();


        return view('kategori',compact('data'));
    }
}
