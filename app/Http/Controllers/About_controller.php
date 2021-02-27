<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'About';
        $data = \DB::table('m_about')->get();

        return view('about.about_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Abouts';
        // $kategori =\DB::table('m_about')->get();

        return view('about.about_add',compact('title'));
    }

        //insert data
        public function store(Request $request){
        //  database                 nama di form
        $deskripsi          = $request->deskripsi;
        $status             = $request->status;

        $file               = $request->file('image_about');

        //Move Uploaded File
        $destinationPath = 'uploads_about';
        $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('m_about')->insert([
            'about_deskripsi'           => $deskripsi,
            'status'                    => $status,
            'about_gambar'              => $file->getClientOriginalName(),

            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
        \Session::flash('sukses','Data berhasil di Tambah');

        return redirect('master/about');
    }

    //edit data
    public function edit($about_id){
        $dt = \DB::table('m_about')->where('about_id',$about_id)->first();
        $title = 'Edit Abouts';
        // $kategori =\DB::table('m_kategori')->get();

        return view('about.about_edit',compact('title','dt')); //view
    }

    //update data
    public function update(Request $request,$about_id){
        $deskripsi          = $request->deskripsi;
        $status             = $request->status;

        // $file               = $request->file('image_about_id');
        // $file               = $request->file('image');
        $file               = $request->file('image_about');

        if($file){
            \DB::table('m_about')->where('about_id', $about_id)->update([
                'about_deskripsi'           => $deskripsi,
                'status'                    => $status,


                'about_gambar'      =>$file->getClientOriginalName(),
                'updated_at'        => date('Y-m-d H:i:s')
            ]);

            //Move Uploaded File
                $destinationPath = 'uploads_about';
                $file->move($destinationPath,$file->getClientOriginalName());
        }else{
            \DB::table('m_about')->where('about_id', $about_id)->update([
                'about_deskripsi'           => $deskripsi,
                'status'                    => $status,

                // 'about_gambar'         =>$file->getClientOriginalName(),
                'updated_at'            => date('Y-m-d H:i:s')
            ]);
        }

        \Session::flash('sukses','Data berhasil Di Update');

        return redirect('master/about');

    }

    //hapus data
    public function delete($about_id){
        \DB::table('m_about')->where('about_id',$about_id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/about');
    }

}
