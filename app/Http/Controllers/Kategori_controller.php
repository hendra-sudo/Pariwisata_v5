<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_kategori;

class Kategori_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Master Kategori';
        $data = M_kategori::orderBy('kategori_nama','asc')->get();

        return view('kategori.kategori_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Kategori';

        return view('kategori.kategori_add',compact('title'));
    }

    //insert data
    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required'

        ]);

        $a['kategori_nama'] = $request->nama;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_kategori::insert($a);

        \Session::flash('sukses','Data Kategori berhasil di Tambah');

        return redirect('master/kategori');
    }

    //edit data
    public function edit($kategori_id){
        $dt = \DB::table('m_kategori')->where('kategori_id',$kategori_id)->first();
        $title = 'Edit Kategori';

        return view('kategori.kategori_edit',compact('title','dt'));
    }

    //update data
    public function update(Request $request, $kategori_id){
        $this->validate($request,[
            'nama'=>'required'

        ]);

        $a['kategori_nama'] = $request->nama;

        // $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_kategori::where('kategori_id',$kategori_id)->update($a);

        \Session::flash('sukses','Data Di Update');

        return redirect('master/kategori');
    }
    //hapus data
    public function delete($kategori_id){
        try {
            M_kategori::where('kategori_id',$kategori_id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        } catch (Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect('master/kategori');
    }
}
