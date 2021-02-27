<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_cinderamata;
use App\Models\M_wisata;
use App\Models\M_Wisata as ModelsM_Wisata;

class Cinderamata_controller extends Controller
{

    // Tampilan index 
    public function index(){
        $title = 'Cinderamata';
        // $data = \DB::table('m_cinderamata')->get();
        $data = M_cinderamata::orderBy('wisata','asc')->get();

        return view('cinderamata.cinderamata_index',compact('title','data'));
    }
    //Deatail Wisata
        public function show($id){
            $title = 'Detail Cinderamata';
            $dt = M_cinderamata::orderBy('wisata','asc')->where('id',$id)->first();
            // $data =M_kategori->get();
            // $kt = M_wisata::orderBy('kategori','asc')->get();

            return view ('cinderamata.show_cinderamata',compact('title','dt'));
    }



    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Cinderamata';
        $wisata = M_wisata::get();
        // $kode = rand();

        return view('cinderamata.cinderamata_add',compact('title','wisata'));
    }

    //insert data new
    public function store(Request $request){
        // $this->validate($request,[
        //     'nama_cinderamata'=>'required'
        // ]);

        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath = 'gambar_cinderamata';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata'] = $request->wisata;
                $data['nama_cinderamata'] = $request->nama_cinderamata;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar'] = $file->getClientOriginalName();
            }else {
                $data['wisata'] = $request->wisata;
                $data['nama_cinderamata'] = $request->nama_cinderamata;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            M_cinderamata::insert($data);
            // \DB::table('m_cinderamata')->insert($data);
        // M_cinderamata::insert($data);

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('master/cinderamata');
    }

    // Tampilan edit new
    //edit data
    public function edit($id){
        // $dt = \DB::table('m_cinderamata')->where('id',$id)->first();
        $title = 'Edit Cinderamata';
        // $kategori =\DB::table('m_kategori')->get();
        $wisata =\DB::table('m_wisata')->get();
        $dt = M_cinderamata::find($id);

        return view('cinderamata.cinderamata_edit',compact('title','dt','wisata')); //view
    }

    // Update Data
    public function update(Request $request,$id){
        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath = 'gambar_cinderamata';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['wisata'] = $request->wisata;
                $data['nama_cinderamata'] = $request->nama_cinderamata;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar'] = $file->getClientOriginalName();
            }else {
                $data['wisata'] = $request->wisata;
                $data['nama_cinderamata'] = $request->nama_cinderamata;
                $data['deskripsi'] = $request->deskripsi;
                $data['harga'] = $request->harga;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            // M_cinderamata::insert($data);
            \DB::table('m_cinderamata')->where('id',$id)->update($data);
        // M_cinderamata::insert($data);

        \Session::flash('sukses','Data berhasil Di Update');
        return redirect('master/cinderamata');
    }

    //hapus data
    public function delete($id){
        \DB::table('m_cinderamata')->where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/cinderamata');
    }

}
