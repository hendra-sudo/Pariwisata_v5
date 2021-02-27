<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pendapatan_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Pendapatan ';
        $data = \DB::table('m_pendapatan')->get();

        return view('pendapatan.pendapatan_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah pendapatan';

        return view('pendapatan.pendapatan_add',compact('title'));
    }

    //insert data
    public function store(Request $request){
        $tahun                  = $request->tahun;
        $wst_lokal              = $request->wst_lokal;
        $wst_intl               = $request->wst_intl;
        $pendapatan             = $request->pendapatan;

        \DB::table('m_pendapatan')->insert([
            'tahun'          => $tahun,
            'wst_lokal'      => $wst_lokal,
            'wst_intl'       => $wst_intl,
            'pendapatan'     => $pendapatan,

            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
        \Session::flash('sukses','Data Pendapatan berhasil di Tambah');

        return redirect('master/pendapatan');
    }

    //edit data
    public function edit($pendapatan_id){
        $dt = \DB::table('m_pendapatan')->where('pendapatan_id',$pendapatan_id)->first();
        $title = 'Edit Pendapatan';
        // $kategori =\DB::table('m_kategori')->get();

        return view('pendapatan.pendapatan_edit',compact('title','dt')); //view
    }

    //update data
    public function update(Request $request,$pendapatan_id){
        $tahun                  = $request->tahun;
        $wst_lokal              = $request->wst_lokal;
        $wst_intl               = $request->wst_intl;
        $pendapatan             = $request->pendapatan;

            \DB::table('m_pendapatan')->where('pendapatan_id',$pendapatan_id)->update([
                'tahun'          => $tahun,
                'wst_lokal'      => $wst_lokal,
                'wst_intl'       => $wst_intl,
                'pendapatan'     => $pendapatan,

                'updated_at'        => date('Y-m-d H:i:s')
                ]);

                \Session::flash('sukses','Data berhasil diUpdate');

                return redirect('master/pendapatan');
    }

    //hapus data
    public function delete($pendapatan_id){
        \DB::table('m_pendapatan')->where('pendapatan_id',$pendapatan_id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/pendapatan');
    }
    // end
}
