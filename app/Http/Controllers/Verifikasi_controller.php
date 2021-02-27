<?php

namespace App\Http\Controllers;

use App\Models\M_verifikasi;
use App\Models\M_Wisata;
use Illuminate\Http\Request;

class Verifikasi_controller extends Controller
{
    // Tampilan index
    public function index(){
        $title = 'Verifikasi Semua Wisata';
        $data = M_verifikasi::orderBy('wisata','asc')->get();

        return view('verifikasi.verifikasi_index',compact('title','data'));
    }

    //Menambahkan Verifikasi insert
    public function store($wisata_id){
        $cek = \DB::table('m_wisata')->where('wisata_id',$wisata_id)->where('status',1)->count();

        if ($cek == 1) {
            M_verifikasi::insert([
                'wisata'=>$wisata_id,
                'user'=>\Auth::user()->id,
                'created_at'=>date('Y-m-d H:i:s')
            ]);

            \Session::flash('sukses','Wisata berhasil di Verifikasi');

            return redirect('master/wisata_new');

        }else {
            \Session::flash('gagal','Wisata Gagal di Verifikasi');

            return redirect('master/wisata_new');
        }
    }

    //Function Setujui
    public function setujui($id){
        M_verifikasi::where('id',$id)->update(['status'=>1]);

        \Session::flash('sukses','Wisata berhasil di Setujui');

        return redirect('verifikasi');
    }

    //Function Ditolak
    public function tolak($id){
        M_verifikasi::where('id',$id)->update(['status'=>2]);

        \Session::flash('gagal','Wisata berhasil di Ditolak');
        return redirect('verifikasi');
    }
}
