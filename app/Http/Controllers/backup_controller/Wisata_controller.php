<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Wisata;
use App\Models\M_kategori;

class Wisata_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Master Wisata';
        $data = M_Wisata::orderBy('nama','asc')->get();

        return view('wisata.wisata_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Wisata';
        $kategori = M_kategori::get();
        // $kode = rand();


        return view('wisata.wisata_add',compact('title','kategori'));
    }

    //insert data
    public function store(Request $request){
        $url_video      = $request->url_video;
        $kategori       = $request->kategori;
        $nama           = $request->nama;
        $deskripsi      = $request->deskripsi;
        $wisata_tag     = $request->wisata_tag;
        $htm_lokal      = $request->htm_lokal;
        $htm_intl       = $request->htm_intl;
        $latitude       = $request->latitude;
        $longitude      = $request->longitude;
        $gambar         = $request->file('gambar');

        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        //Move Uploaded File
        if ($gambar) {
            $nama_image =rand().$gambar->getClientOriginalName();
            $gambar->move('gambar_wisata',$nama_image);
            $gambar = 'gambar_wisata/'.$nama_image;
        }else {
            $gambar = '';
        }
        //___________

        $data = new M_Wisata;
        $data->url_video    = $url_video;
        $data->kategori     = $kategori;
        $data->nama         = $nama;
        $data->deskripsi    = $deskripsi;
        $data->wisata_tag   = $wisata_tag;
        $data->htm_lokal    = $htm_lokal;
        $data->htm_intl     = $htm_intl;
        $data->latitude     = $latitude;
        $data->longitude    = $longitude;
        $data->gambar       = $gambar;
        $data->created_at   = $created_at;
        $data->updated_at   = $updated_at;
        $data->save();

    //___________

    \Session::flash('sukses','Data Kategori berhasil di Tambah');

    return redirect('master/wisata');
}

    //edit data
    //  public function edit($wisata_id){
    //     $dt = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();
    //     $kategori =\DB::table('m_kategori')->get();
    //     $title = 'Edit Wisata';

    //     return view('wisata.wisata_edit',compact('title','dt','kategori'));
    // }

    //edit data
    public function edit($wisata_id){
        $dt = M_Wisata::find($wisata_id);
        $kategori = M_kategori::get();
        $title = 'Edit Wisata';

        return view('wisata.wisata_edit',compact('title','dt','kategori'));
    }


    //insert data
            public function update(Request $request,$wisata_id){
                $url_video      = $request->url_video;
                $kategori       = $request->kategori;
                $nama           = $request->nama;
                $deskripsi      = $request->deskripsi;
                $wisata_tag     = $request->wisata_tag;
                $htm_lokal      = $request->htm_lokal;
                $htm_intl       = $request->htm_intl;
                $latitude       = $request->latitude;
                $longitude      = $request->longitude;
                $gambar         = $request->file('gambar');

                // $created_at = date('Y-m-d H:i:s');
                $updated_at = date('Y-m-d H:i:s');

                $data = M_Wisata::find($wisata_id);

                //Move Uploaded File
                if ($gambar) {
                    $nama_image =rand().$gambar->getClientOriginalName();
                    $gambar->move('gambar_wisata',$nama_image);
                    $gambar = 'gambar_wisata/'.$nama_image;
                }else {
                    $gambar = $data->gambar;
                }
                //___________
                $data->url_video    = $url_video;
                $data->kategori     = $kategori;
                $data->nama         = $nama;
                $data->deskripsi    = $deskripsi;
                $data->wisata_tag   = $wisata_tag;
                $data->htm_lokal    = $htm_lokal;
                $data->htm_intl     = $htm_intl;
                $data->latitude     = $latitude;
                $data->longitude    = $longitude;
                $data->gambar       = $gambar;

                $data->updated_at = $updated_at;
                $data->save();

            //___________

            \Session::flash('sukses','Data Kategori berhasil di Update');

            return redirect('master/wisata');
        }

}
