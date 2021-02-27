<?php

namespace App\Http\Controllers;

use App\Models\M_fasilitas;
use Illuminate\Http\Request;

class Fasilitas_controller extends Controller
{
    //Tampilan index
    public function index(){
        $title = 'Fasilitas Wisata';
        $data = \DB::table('m_fasilitas as f')->join('m_wisata as w','f.wisata','=','w.wisata_id')->get();
        // $data = \DB::table('m_fasilitas as b')->join('m_wisata as a','b.nama','=','a.wisata_id')->select('a.kategori_nama','b.wisata','b.nama','b.wisata_tag','b.htm_lokal','b.htm_intl','b.latitude','b.longitude','b.gambar')->get();
        // $data = M_wisata::get();

        $data_2 = $data = \DB::table('m_fasilitas as f')->join('fasilitas_wisata as w','f.farwis_1','=','w.id')->get();

        return view('fasilitas.fasilitas_index',compact('title','data'));
        // return view('wisata.wisata_index',compact('title'));
    }

    //Tampilan tambah data
    public function add(){
        $title = 'Menambah Fasilitas Wisata';
        $wisata['wisata']  =\DB::table('m_wisata')->get();
        $fasilitas['fasilitas'] =\DB::table('fasilitas_wisata')->get();

        return view('fasilitas.fasilitas_add',compact('title','wisata','fasilitas'));
    }
    // public function add(){
    //     // $data['list_fasilitas'] = \DB::table('fasilitas_wisata')->get();
    //     $data['fasilitas'] = \DB::table('fasilitas_wisata')->get();
    //     // $data['list_hasil'] = \DB::table('m_fasilitas')->get();
         
    //     return redirect('master/fasilitas',$data);
    // }

    // //insert data
    public function store(Request $request){
        // dd($request->all());
        if(!empty($request->input('farwis_1'))){
            // $will_insert = [];
            // foreach ($request->input('farwis_1') as $key => $value) {
            //     array_push($will_insert, ['farwis_1'=>$value]);
            // }
            // \DB::table('m_fasilitas')->insert($will_insert);
            $checkbox = join(',',$request->input('farwis_1'));
            \DB::table('m_fasilitas')->insert(['farwis_1'=>$checkbox]);
        }else{
            $checkbox = ''; 
        }

        return redirect('master/fasilitas');
    }

    // insert data 2
    // public function store(Request $request){
    //     // dd($request->all());
    //     if(!empty($request->input('farwis_1'))){
    //         $will_insert = [];
    //         foreach ($request->input('farwis_1') as $key => $value) {
    //             array_push($will_insert, ['farwis_1'=>$value]);
    //         }
    //         \DB::table('m_fasilitas')->insert($will_insert);
    //         // $checkbox = join(',',$request->input('farwis_1'));
    //         // \DB::table('m_fasilitas')->insert(['farwis_1'=>$checkbox]);
    //     }else{
    //         $checkbox = ''; 
    //     }

    //     return redirect('master/fasilitas');
    // }



    public function checkboxPage(){
        
        // $data['list_fasilitas'] = \DB::table('fasilitas_wisata')->get();
        // $data['fasilitas'] = \DB::table('fasilitas_wisata')->get();
        $data['list_hasil'] = \DB::table('m_fasilitas')->get();
         
        return redirect('master/fasilitas',$data);
    }






   //hapus data
   public function delete($id){
    \DB::table('m_fasilitas')->where('id',$id)->delete();

    // \Session::flash('sukses','Data berhasil Dihapus');

    return redirect('master/fasilitas');
    }

}
