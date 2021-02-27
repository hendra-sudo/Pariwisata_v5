<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Events';
        $data = \DB::table('m_event')->get();

        return view('event.event_index',compact('title','data'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Events';
        // $kategori =\DB::table('m_event')->get();

        return view('event.event_add',compact('title'));
    }

    //insert data
    public function store(Request $request){
        $event_judul        = $request->event_judul;
        $penyelenggara      = $request->penyelenggara;
        $tgl_pelaksanaan    = $request->tgl_pelaksanaan;
        $deskripsi             = $request->deskripsi;
        $tag                = $request->tag;

        $file               = $request->file('image_event');

        //Move Uploaded File
        $destinationPath = 'uploads_event';
        $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('m_event')->insert([
            'event_judul'           => $event_judul,
            'event_penyelenggara'   => $penyelenggara,
            'event_tgl'             => $tgl_pelaksanaan,
            'event_deskripsi'       => $deskripsi,
            'event_tag'             => $tag,
            'event_gambar'          => $file->getClientOriginalName(),

            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
        \Session::flash('sukses','Data berhasil di Tambah');

        return redirect('master/event');
    }

    //edit data
    public function edit($event_id){
        $dt = \DB::table('m_event')->where('event_id',$event_id)->first();
        $title = 'Edit Events';
        // $kategori =\DB::table('m_kategori')->get();

        return view('event.event_edit',compact('title','dt')); //view
    }

    //update data
    public function update(Request $request,$event_id){
        $event_judul        = $request->event_judul;
        $penyelenggara      = $request->penyelenggara;
        $tgl_pelaksanaan    = $request->tgl_pelaksanaan;
        $deskripsi          = $request->deskripsi;
        $tag                = $request->tag;

        // $file               = $request->file('image_event_id');
        // $file               = $request->file('image');
        $file               = $request->file('image_event');

        if($file){
            \DB::table('m_event')->where('event_id', $event_id)->update([
                'event_judul'           => $event_judul,
                'event_penyelenggara'   => $penyelenggara,
                'event_tgl'             => $tgl_pelaksanaan,
                'event_deskripsi'       => $deskripsi,
                'event_tag'             => $tag,

                'event_gambar'     =>$file->getClientOriginalName(),
                'updated_at'        => date('Y-m-d H:i:s')
            ]);

            //Move Uploaded File
                $destinationPath = 'uploads_event';
                $file->move($destinationPath,$file->getClientOriginalName());
        }else{
            \DB::table('m_event')->where('event_id', $event_id)->update([
                'event_judul'           => $event_judul,
                'event_penyelenggara'   => $penyelenggara,
                'event_tgl'             => $tgl_pelaksanaan,
                'event_deskripsi'       => $deskripsi,
                'event_tag'             => $tag,

                // 'event_gambar'         =>$file->getClientOriginalName(),
                'updated_at'            => date('Y-m-d H:i:s')
            ]);
        }

        \Session::flash('sukses','Data berhasil Di Update');

        return redirect('master/event');

    }

    //hapus data
    public function delete($event_id){
        \DB::table('m_event')->where('event_id',$event_id)->delete();

        \Session::flash('sukses','Data berhasil Dihapus');

        return redirect('master/event');
    }

}
