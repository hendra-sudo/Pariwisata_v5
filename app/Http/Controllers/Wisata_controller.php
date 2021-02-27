<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_wisata;
use App\Models\M_kategori;

class Wisata_controller extends Controller
{

    //Tampilan index
    public function index(){
        $title = 'Master Wisata';
        $data = M_wisata::orderBy('wisata','asc')->get();; 

        return view('wisata.wisata_index',compact('title','data'));
    }

    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Wisata';
        $wisata = M_wisata::get();
        // $kode = rand();

        return view('wisata.wisata_add',compact('title','wisata'));
    }


}



// //Tampilan index
    // public function index(){
    //     $title = 'Master Wisata';
    //     $data = M_wisata::orderBy('wisata','asc')->get();;

    //     return view('wisata.wisata_index',compact('title','data'));
    // }

    // //edit data
    // public function edit($id){
    //     $dt = \DB::table('m_cinderamata')->where('id',$id)->first();
    //     $title = 'Edit Cinderamata';
    //     // $kategori =\DB::table('m_kategori')->get();
    //     $wisata = M_kategori::get();

    //     return view('cinderamata.cinderamata_edit',compact('title','dt','wisata')); //view
    // }



        // //insert data new
        // public function store(Request $request){
        // // $this->validate($request,[
        // //     'nama_kuliner'=>'required'
        // // ]);

        // $data = array();
        // $file = $request->file('berita_gambar');
        // // $data = $request->except(['_token']);

        // // dd($data);

        //     if ($file) {
        //         //Move Uploaded File
        //         $destinationPath = 'berita_gambar';
        //         $file->move($destinationPath,$file->getClientOriginalName());

        //         $data['berita_judul'] = $request->berita_judul;
        //         $data['berita_deskripsi'] = $request->berita_deskripsi;
        //         $data['berita_tgl'] = $request->berita_tgl;
        //         $data['berita_autor'] = $request->berita_autor;

        //         $data['created_at'] = date('Y-m-d H:i:s');
        //         $data['updated_at'] = date('Y-m-d H:i:s');

        //         $data['gambar'] = $file->getClientOriginalName();
        //     }else {
        //         $data['berita_judul'] = $request->berita_judul;
        //         $data['berita_deskripsi'] = $request->berita_deskripsi;
        //         $data['berita_tgl'] = $request->berita_tgl;
        //         $data['berita_autor'] = $request->berita_autor;

        //         $data['created_at'] = date('Y-m-d H:i:s');
        //         $data['updated_at'] = date('Y-m-d H:i:s');

        //     }

    //         M_wisata::insert($data);
    //         // \DB::table('m_kuliner')->insert($data);
    //     // M_kuliner::insert($data);

    //     \Session::flash('sukses','Data berhasil ditambah');
    //     return redirect('master/kuliner');
    // }


    //edit data
    // public function edit($wisata_id){
    //     $dt = M_Wisata::find($wisata_id);
    //     $title = 'Edit Wisata';
    //     $kategori = M_kategori::get();

    //     return view('wisata.wisata_edit',compact('title','dt','kategori'));
    // }


    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//insert data
//     public function store(Request $request){
//         $url_video = $request->url_video;
//         $kategori = $request->kategori;
//         $nama = $request->nama;
//         $deskripsi = $request->deskripsi;
//         $wisata_tag = $request->wisata_tag;
//         $htm_lokal = $request->htm_lokal;
//         $htm_intl = $request->htm_intl;
//         $latitude = $request->latitude;
//         $longitude = $request->longitude;
//         $gambar = $request->file('gambar');

//         $created_at = date('Y-m-d H:i:s');
//         $updated_at = date('Y-m-d H:i:s');

//         //Move Uploaded File
//         if ($gambar) {
//             $nama_image =rand().$gambar->getClientOriginalName();
//             $gambar->move('gambar_wisata',$nama_image);
//             $gambar = 'gambar_wisata/'.$nama_image;
//         }else {
//             $gambar = '';
//         }
//         //___________

//         $data = new M_Wisata;
//         $data->url_video = $url_video;
//         $data->kategori = $kategori;
//         $data->nama = $nama;
//         $data->deskripsi = $deskripsi;
//         $data->wisata_tag = $wisata_tag;
//         $data->htm_lokal = $htm_lokal;
//         $data->htm_intl = $htm_intl;
//         $data->latitude = $latitude;
//         $data->longitude = $longitude;
//         $data->gambar = $gambar;
//         $data->created_at = $created_at;
//         $data->updated_at = $updated_at;
//         $data->save();

//     //___________

//     \Session::flash('sukses','Data Kategori berhasil di Tambah');

//     return redirect('master/wisata');
// }
