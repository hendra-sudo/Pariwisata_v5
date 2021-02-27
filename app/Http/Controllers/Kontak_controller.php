<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontak_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Kontak';
        $data = \DB::table('m_kontak')->get();

        return view('kontak.kontak_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Kontak';
        // $kategori =\DB::table('m_kontak')->get();

        return view('kontak.kontak_add',compact('title'));
    }

    //insert data
    public function store(Request $request){
        $latitude               = $request->latitude;
        $longitude              = $request->longitude;
        $kontak_deskripsi          = $request->kontak_deskripsi;
        

        \DB::table('m_kontak')->insert([
            'latitude'          => $latitude,
            'longitude'         => $longitude,
            'kontak_deskripsi'  => $kontak_deskripsi,

            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
        // \Session::flash('sukses','Data Kategori berhasil di Tambah');

        return redirect('master/kontak');
    }



    //edit data
    public function edit($kontak_id){
        $dt = \DB::table('m_kontak')->where('kontak_id',$kontak_id)->first();
        $title = 'Edit Kontak';
        // $kategori =\DB::table('m_kategori')->get();

        return view('kontak.kontak_edit',compact('title','dt')); //view
    }

    //update data
    public function update(Request $request,$kontak_id){
        $latitude               = $request->latitude;
        $longitude              = $request->longitude;
        $kontak_judul           = $request->kontak_judul;
        $kontak_deskripsi       = $request->kontak_deskripsi;

            \DB::table('m_kontak')->where('kontak_id',$kontak_id)->update([
                'latitude'          => $latitude,
                'longitude'         => $longitude,
                'kontak_judul'      => $kontak_judul,
                'kontak_deskripsi'  => $kontak_deskripsi,

                'updated_at'        => date('Y-m-d H:i:s')
                ]);

                \Session::flash('sukses','Data berhasil diUpdate');

                return redirect('master/kontak');
    }

    //hapus data
    public function delete($kontak_id){
        \DB::table('m_kontak')->where('kontak_id',$kontak_id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/kontak');
    }


}
