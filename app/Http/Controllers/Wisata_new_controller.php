<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\M_kategori;
use App\Models\M_wisata;
use App\Models\M_cinderamata;

class Wisata_new_controller extends Controller
{
        //Tampilan index
        public function index(){
            $title = 'Master Wisata';
            $data = M_wisata::orderBy('kategori','asc')->get();

            return view('wisata_new.wisata_new_index',compact('title','data'));
        }

        //Filter Tanggal
       
        // public function periode(Request $request){
        //     // $data = M_wisata::orderBy('kategori','asc')->get();
        //     $wisata = M_wisata::get();
        //     $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
        //     $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));
        //     $nama = $request->nama;
     
        //     $title = "List";
        //     // $data = M_wisata::where('nama',$nama)->get();
        //     // $data = M_wisata::where('created_at','>=',$tanggal_awal)->where('created_at','<=',$tanggal_akhir)->where('wisata',$wisata)->get();
        //     $data = M_wisata::where('created_at','>=',$tanggal_awal.' 00:00:00')->where('created_at','<=',$tanggal_akhir. '23:59:59')->get();
        //     dd($data);
        //     return view('wisata_new.wisata_new_index',compact('title','data','wisata'));
        // }

        //Deatail Wisata
        public function show($wisata_id){ 
            $title = 'Detail Wisata ';
            $kt = M_wisata::orderBy('kategori','asc')->where('wisata_id',$wisata_id)->first();
            $data = M_cinderamata::get();
            // $data =M_kategori->get();
            // $kt = M_wisata::orderBy('kategori','asc')->get();

            return view ('wisata_new.show',compact('title','kt','data'));

    }

        //Tampilan Wisata Non-Aktif
        public function nonaktif(){
            $title = 'Wisata Non-Aktif';
            // $data = M_wisata::orderBy('kategori','asc')->get();
            $data = M_wisata::orderBy('kategori','asc')->where('m_wisata.status','!=',1)->get();;

            return view('wisata_new.wisata_new_index',compact('title','data'));
        }

        //Tampilan tambah data new
        public function add(){
            $title = 'Tambah Wisata';
            $kategori = M_kategori::get();
            // $kode = rand();

            return view('wisata_new.wisata_new_add',compact('title','kategori'));
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
                    $destinationPath = 'gambar_wisata';
                    $file->move($destinationPath,$file->getClientOriginalName());

                    $data['url_video'] = $request->url_video;
                    $data['kategori'] = $request->kategori;
                    $data['nama'] = $request->nama;
                    $data['deskripsi'] = $request->deskripsi;
                    $data['wisata_tag'] = $request->wisata_tag;
                    $data['htm_lokal'] = $request->htm_lokal;
                    $data['htm_intl'] = $request->htm_intl;
                    $data['latitude'] = $request->latitude;
                    $data['longitude'] = $request->longitude;

                    $data['created_at'] = date('Y-m-d H:i:s');
                    $data['updated_at'] = date('Y-m-d H:i:s');

                    $data['gambar'] = $file->getClientOriginalName();
                }else {
                    $data['url_video'] = $request->url_video;
                    $data['kategori'] = $request->kategori;
                    $data['nama'] = $request->nama;
                    $data['deskripsi'] = $request->deskripsi;
                    $data['wisata_tag'] = $request->wisata_tag;
                    $data['htm_lokal'] = $request->htm_lokal;
                    $data['htm_intl'] = $request->htm_intl;
                    $data['latitude'] = $request->latitude;
                    $data['longitude'] = $request->longitude;
                    $data['created_at'] = date('Y-m-d H:i:s');
                    $data['updated_at'] = date('Y-m-d H:i:s');

                }

                M_wisata::insert($data);
                // \DB::table('m_kuliner')->insert($data);
            // M_kuliner::insert($data);

            \Session::flash('sukses','Data berhasil ditambah');
            return redirect('master/wisata_new');
        }

        // Tampilan edit new
        //edit data
        public function edit($wisata_id){
            $dt = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();
            $title = 'Edit Wisata';
            $kategori =\DB::table('m_kategori')->get();

            return view('wisata_new.wisata_new_edit',compact('title','dt','kategori')); //view
        }


         // Update Data
        public function update(Request $request,$wisata_id){
        $data = array();
        $file = $request->file('gambar');
        // $data = $request->except(['_token']);

        // dd($data);

            if ($file) {
                //Move Uploaded File
                $destinationPath    = 'gambar_wisata';
                $file->move($destinationPath,$file->getClientOriginalName());

                $data['url_video']  = $request->url_video;
                $data['kategori']   = $request->kategori;
                $data['nama']       = $request->nama;
                $data['deskripsi']  = $request->deskripsi;
                $data['wisata_tag'] = $request->wisata_tag;
                $data['htm_lokal']  = $request->htm_lokal;
                $data['htm_intl']   = $request->htm_intl;
                $data['latitude']   = $request->latitude;
                $data['longitude']  = $request->longitude;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

                $data['gambar']     = $file->getClientOriginalName();
            }else {
                $data['url_video']  = $request->url_video;
                $data['kategori']   = $request->kategori;
                $data['nama']       = $request->nama;
                $data['deskripsi']  = $request->deskripsi;
                $data['wisata_tag'] = $request->wisata_tag;
                $data['htm_lokal']  = $request->htm_lokal;
                $data['htm_intl']   = $request->htm_intl;
                $data['latitude']   = $request->latitude;
                $data['longitude']  = $request->longitude;

                // $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');

            }

            // M_kuliner::insert($data);
            \DB::table('m_wisata')->where('wisata_id',$wisata_id)->update($data);
            // M_kuliner::insert($data);
 
            \Session::flash('sukses','Data berhasil Di Update');
            return redirect('master/wisata_new');
        }

        //hapus data
        public function delete($wisata_id){
            \DB::table('m_wisata')->where('wisata_id',$wisata_id)->delete();

            \Session::flash('sukses','Data berhasil Dihapus');

            return redirect('master/wisata_new');
        }

        public function status($wisata_id){
            $data = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->first();

            $status_sekarang = $data->status;

            if($status_sekarang == 1){
                \DB::table('m_wisata')->where('wisata_id',$wisata_id)->update([
                    'status'=>0
                ]);
            }else{
                \DB::table('m_wisata')->where('wisata_id',$wisata_id)->update([
                    'status'=>1
                ]);
            }
            \Session::flash('sukses','Status berhasil di ubah');

            return redirect('master/wisata_new');
        }



}



// public function edit($wisata_id){
        //     // $dt = \DB::table('m_kuliner')->where('id',$id)->first();
        //     $title = 'Edit Wisata';
        //     // $kategori =\DB::table('m_kategori')->get();
        //     $kategori =\DB::table('m_kategori')->get();
        //     $dt = M_wisata::find($wisata_id);

        //     return view('wisata_new.kuliner_new_edit',compact('title','dt','kategori')); //view

        // }
