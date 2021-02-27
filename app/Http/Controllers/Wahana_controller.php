<?php

namespace App\Http\Controllers;

use App\Models\M_wahana;
use App\Models\M_wahana_detail;
use App\Models\M_wisata;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class Wahana_controller extends Controller
{
    public function index(){
        $title = 'Wahana';
        $data = M_wahana::orderBy('wisata','asc')->get();

        return view('wahana.wahana_index',compact('title','data'));
    }

    //Deatail Wisata
    public function show($id){
        $title = 'Detail Wahana';
        $data  = M_wahana::with('detail')->where('id',$id)->first();
        // $data =M_kategori->get();
        // $kt = M_wisata::orderBy('kategori','asc')->get();

        return view ('wahana.show_wahana',compact('title','data'));
}

    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Wahana';
        $wisata = M_wisata::get();
        // $kode = rand();

        return view('wahana.wahana_add',compact('title','wisata'));
    }

    //insert data
    public function store(Request $request){
        $data = $request->all();
        // dd($data);

        //db : m_wahana
        $wahana = new M_wahana;
        $wahana->wisata = $data['wisata'];
        $wahana->save();

        //db : m_wahana_detail
        // if (count($data['nama_wahana']>0)) {
        // if($data['nama_wahana']->count() > 0) {
        if (count($data['nama_wahana'])>0) {
            
            foreach ($data['nama_wahana'] as $item => $value){
                $data2 = array(
                    'wahana_id'     => $wahana->id,
                    'nama_wahana'   => $data['nama_wahana'][$item],
                    'harga_wahana'  => $data['harga_wahana'][$item],
                    'deskripsi'     => $data['deskripsi'][$item]
                );
                M_wahana_detail::create($data2);
            }
        }

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('master/wahana');
    }

     //hapus data
     public function delete($id){
        \DB::table('m_wahana')->where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/wahana');
    }




}



        // $wahana_detail = new M_wahana_detail;
                // $wahana_detail->wahana_id = $wahana->id;
                // $wahana_detail->nama_wahana = $data['nama_wahana'];
                // // $wahana_detail->gambar = $data['gambar'];
                // $wahana_detail->harga = $data['harga'];
                // $wahana_detail->deskripsi = $data['deskripsi'];
                // $wahana_detail->save();
        // if (count($request->tagsinput) > 0)
