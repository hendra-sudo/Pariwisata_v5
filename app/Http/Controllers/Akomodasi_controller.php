<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_akomodasi;
use App\Models\M_wisata;

class Akomodasi_controller extends Controller
{
    // Start

    // Tampilan index
    public function index(){
        $title = 'Akomodasi Kendaraan';
        // $data = \DB::table('m_akomodasi')->get();
        $data = M_akomodasi::orderBy('wisata','asc')->get();

        return view('akomodasi.akomodasi_index',compact('title','data'));
    }

    //Deatail Wisata
    public function show($id){
        $title = 'Detail Akomodasi';
        $dt = M_akomodasi::orderBy('wisata','asc')->where('id',$id)->first();
        // $data =M_kategori->get();
        // $kt = M_wisata::orderBy('kategori','asc')->get();

        return view ('akomodasi.show_akomodasi',compact('title','dt'));
    }

    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Akomodasi Wisata';
        $wisata = M_wisata::get();
        // $kode = rand();

        return view('akomodasi.akomodasi_add',compact('title','wisata'));
    }

    //insert data new
    public function store(Request $request){
        // $this->validate($request,[
        //     'nama_akomodasi'=>'required'
        // ]);

        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath = 'gambar_akomodasi';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata'] = $request->wisata;
                $data['nama_akomodasi'] = $request->nama_akomodasi;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar'] = $file->getClientOriginalName();
            }else {
                $data['wisata'] = $request->wisata;
                $data['nama_akomodasi'] = $request->nama_akomodasi;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            M_akomodasi::insert($data);
            // \DB::table('m_akomodasi')->insert($data);
        // M_akomodasi::insert($data);

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('master/akomodasi');
    }

    // Tampilan edit new
    //edit data
    public function edit($id){
        // $dt = \DB::table('m_akomodasi')->where('id',$id)->first();
        $title = 'Edit Akomodasi';
        // $kategori =\DB::table('m_kategori')->get();
        $wisata =\DB::table('m_wisata')->get();
        $dt = M_akomodasi::find($id);

        return view('akomodasi.akomodasi_edit',compact('title','dt','wisata')); //view
    }

    // Update Data
    public function update(Request $request,$id){
        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath = 'gambar_akomodasi';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata'] = $request->wisata;
                $data['nama_akomodasi'] = $request->nama_akomodasi;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar'] = $file->getClientOriginalName();
            }else {
                $data['wisata'] = $request->wisata;
                $data['nama_akomodasi'] = $request->nama_akomodasi;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            // M_akomodasi::insert($data);
            \DB::table('m_akomodasi')->where('id',$id)->update($data);
        // M_akomodasi::insert($data);

        \Session::flash('sukses','Data berhasil Di Update');
        return redirect('master/akomodasi');
    }

    //hapus data
    public function delete($id){
        \DB::table('m_akomodasi')->where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/akomodasi');
    }

    // end
}
