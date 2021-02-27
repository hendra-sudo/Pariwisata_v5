<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_berita;

class Berita_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Berita';
        $data = \DB::table('m_berita')->get();

        return view('berita.berita_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Berita';
        // $kategori =\DB::table('m_berita')->get();

        return view('berita.berita_add',compact('title'));
    }



    //insert data
    public function store(Request $request){
        $berita_judul       = $request->berita_judul;
        $berita_deskripsi   = $request->berita_deskripsi;
        $berita_tgl         = $request->berita_tgl;
        $berita_autor       = $request->berita_autor;

        $file               = $request->file('berita_gambar');

        //Move Uploaded File
        $destinationPath = 'berita_gambar';
        $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('m_berita')->insert([
            'berita_judul'      => $berita_judul,
            'berita_deskripsi'  => $berita_deskripsi,
            'berita_tgl'        => $berita_tgl,
            'berita_autor'      => $berita_autor,
            'berita_gambar'     => $file->getClientOriginalName(),

            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);


        \Session::flash('sukses','Data Kategori berhasil Ditambah');

        return redirect('master/berita');
    }

        //edit data
        public function edit($berita_id){
            $dt = \DB::table('m_berita')->where('berita_id',$berita_id)->first();
            $title = 'Edit Berita';
            // $kategori =\DB::table('m_kategori')->get();

            return view('berita.berita_edit',compact('title','dt')); //view
        }

//update data
public function update(Request $request,$berita_id){
        $berita_judul       = $request->berita_judul;
        $berita_deskripsi   = $request->berita_deskripsi;
        $berita_tgl         = $request->berita_tgl;
        $berita_autor       = $request->berita_autor;

    $file               = $request->file('berita_gambar');

    if($file){
        \DB::table('m_berita')->where('berita_id', $berita_id)->update([
            'berita_judul'      => $berita_judul,
            'berita_deskripsi'  => $berita_deskripsi,
            'berita_tgl'        => $berita_tgl,
            'berita_autor'      => $berita_autor,

            'berita_gambar'      =>$file->getClientOriginalName(),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        //Move Uploaded File
            $destinationPath = 'berita_gambar';
            $file->move($destinationPath,$file->getClientOriginalName());
    }else{
        \DB::table('m_berita')->where('berita_id', $berita_id)->update([
            'berita_judul'      => $berita_judul,
            'berita_deskripsi'  => $berita_deskripsi,
            'berita_tgl'        => $berita_tgl,
            'berita_autor'      => $berita_autor,

            // 'about_gambar'         =>$file->getClientOriginalName(),
            'updated_at'            => date('Y-m-d H:i:s')
        ]);
    }

    \Session::flash('sukses','Data berhasil Di Update');

    return redirect('master/berita');

}

        //hapus data
        public function delete($berita_id){
            \DB::table('m_berita')->where('berita_id',$berita_id)->delete();

            \Session::flash('sukses','Data berhasil Dihapus');

            return redirect('master/berita');
        }


}










        //edit data
        // public function edit($berita_id){
        //     $dt = \DB::table('m_berita')->where('berita_id',$berita_id)->first();
        //     $title = 'Edit Berita';
        //     // $kategori =\DB::table('m_kategori')->get();

        //     return view('berita.berita_edit',compact('title','dt')); //view
        // }

        // //update data
        // public function update(Request $request,$berita_id){
        //     $berita_judul           = $request->berita_judul;
        //     $berita_deskripsi       = $request->berita_deskripsi;
        //     $berita_tgl             = $request->berita_tgl;
        //     $berita_autor           = $request->berita_autor;
        //     $file                   = $request->file('berita_gambar');


        //     if($file){
        //         \DB::table('m_berita')->where('berita_id', $berita_id)->update([
        //             'berita_judul'      => $berita_judul,
        //             'berita_deskripsi'  => $berita_deskripsi,
        //             'berita_tgl'        => $berita_tgl,
        //             'berita_autor'      => $berita_autor,
        //             'berita_gambar'     => $file->getClientOriginalName(),

        //             'updated_at'        => date('Y-m-d H:i:s')
        //         ]);

        //         //Move Uploaded File
        //         $destinationPath = 'uploads_about';
        //         $file->move($destinationPath,$file->getClientOriginalName());
        //     }else{
        //         \DB::table('m_berita')->where('berita_id', $berita_id)->update([
        //             'berita_judul'      => $berita_judul,
        //             'berita_deskripsi'  => $berita_deskripsi,
        //             'berita_tgl'        => $berita_tgl,
        //             'berita_autor'      => $berita_autor,

        //             // 'berita_gambar'     =>$file->getClientOriginalName(),
        //             'updated_at'        => date('Y-m-d H:i:s')
        //         ]);
        //     }

        //     \Session::flash('sukses','Data berhasil Di Update');
        //     return redirect('master/berita');

        // }
