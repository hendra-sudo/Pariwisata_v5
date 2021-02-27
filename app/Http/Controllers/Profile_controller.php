<?php

namespace App\Http\Controllers;

use App\Models\M_alamat;
use App\Models\M_profile;
use Illuminate\Http\Request;
use App\User;

class Profile_controller extends Controller
{
    public function index(){
        $title = 'Manage Anggota User';
        $data = M_profile::where('status',null)->get();


        // return view('berita.berita_index',compact('title','data'));
        return view('profile.profile_index',compact('title','data'));
    }

    //Tampilan tambah data new
    public function add(){
        $title = 'Tambah Users';
        $data = User::get();
        $alamat = M_alamat::orderBy('nama_desa','asc')->get();

        // $kode = rand();

        return view('profile.profile_add',compact('title','data','alamat'));
    }

    //insert data new
    public function store(Request $request){
        $form = [];

        $form['nama_lengkap']   = $request->nama_lengkap;
        $form['alamat']         = $request->alamat;
        $form['kecamatan']      = $request->nama_kecamatan;
        $form['desa']           = $request->nama_desa;
        $form['no_hp']          = $request->no_hp;
        $form['name']           = $request->name;
        $form['email']          = $request->email;
        // $form['password']       = bcrypt('rahasia2021');
        $form['password']       = bcrypt($request->password);
        $form['lihat_pw']       = $request->password;
        $form['created_at']     = date('Y-m-d H:i:s');
        $form['updated_at']     = date('Y-m-d H:i:s');

        User::insert($form);

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('master/profile');
    }

    public function edit($id){
        $title = 'Edit Anggota';
        $dt = User::find($id);

        return view('profile.profile_edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
        $form = [];

        $form['nama_lengkap']   = $request->nama_lengkap;
        $form['alamat']         = $request->alamat;
        $form['no_hp']          = $request->no_hp;
        $form['name']           = $request->name;
        $form['email']          = $request->email;
        // $form['password'] = bcrypt('123');
        // $form['created_at'] = date('Y-m-d H:i:s');
        $form['updated_at']     = date('Y-m-d H:i:s');

        User::where('id',$id)->update($form);

        \Session::flash('sukses','Data berhasil Diubah');

        return redirect('master/profile');
    }

    public function delete($id){
        User::where('id',$id)->delete();

        return redirect('master/profile');
    }

}
