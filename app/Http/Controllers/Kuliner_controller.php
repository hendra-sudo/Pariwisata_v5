<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_kuliner;
use App\Models\M_wisata;

class Kuliner_controller extends Controller
{
    // strart

    // Tampilan index
    public function index(){
        $title = 'Kuliner';
        $data = M_kuliner::get();

        return view('kuliner.kuliner_index',compact('title','data'));
    }

    //Deatail Wisata
    public function show($id){
        $title = 'Detail Kuliner';
        $dt = M_kuliner::orderBy('wisata','asc')->where('id',$id)->first();
        // $data =M_kategori->get();
        // $kt = M_wisata::orderBy('kategori','asc')->get();

        return view ('kuliner.show_kuliner',compact('title','dt'));
}

    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Kuliner';
        $wisata = M_wisata::get();
        // $kode = rand();

        return view('kuliner.kuliner_add',compact('title','wisata'));
    }

    //insert data new
    public function store(Request $request){
        // $this->validate($request,[
        //     'nama_kuliner'=>'required'
        // ]);

        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath = 'gambar_kuliner';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata'] = $request->wisata;
                $data['nama_kuliner'] = $request->nama_kuliner;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar'] = $file->getClientOriginalName();
            }else {
                $data['wisata'] = $request->wisata;
                $data['nama_kuliner'] = $request->nama_kuliner;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            M_kuliner::insert($data);
            // \DB::table('m_kuliner')->insert($data);
        // M_kuliner::insert($data);

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('master/kuliner');
    }

    // Tampilan edit new
    //edit data
    public function edit($id){
        // $dt = \DB::table('m_kuliner')->where('id',$id)->first();
        $title = 'Edit Kuliner';
        // $kategori =\DB::table('m_kategori')->get();
        $wisata =\DB::table('m_wisata')->get();
        $dt = M_kuliner::find($id);

        return view('kuliner.kuliner_edit',compact('title','dt','wisata')); //view
    }

    // Update Data
            public function update(Request $request,$id){
                $data                   = array();
                $file                   = $request->file('gambar');
                // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath        = 'gambar_kuliner';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata']         = $request->wisata;
                $data['nama_kuliner']   = $request->nama_kuliner;
                $data['deskripsi']      = $request->deskripsi;
                $data['harga']          = $request->harga;

                // $data['created_at']  = date('Y-m-d H:i:s');
                $data['updated_at']     = date('Y-m-d H:i:s');

                $data['gambar']         = $file->getClientOriginalName();
            }else {
                $data['wisata']         = $request->wisata;
                $data['nama_kuliner']   = $request->nama_kuliner;
                $data['deskripsi']      = $request->deskripsi;
                $data['harga']          = $request->harga;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at']     = date('Y-m-d H:i:s');

            }

            // M_kuliner::insert($data);
            \DB::table('m_kuliner')->where('id',$id)->update($data);
        // M_kuliner::insert($data);

        \Session::flash('sukses','Data berhasil Di Update');
        return redirect('master/kuliner');
    }

    //hapus data
    public function delete($id){
        \DB::table('m_kuliner')->where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/kuliner');
    }

    // end
}
