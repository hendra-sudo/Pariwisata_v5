<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'DetailWisata_controller@index');

Route::get('keluar',function(){
    \Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','Dasboard_controller@index')->name('home');

//Detail_wisata
Route::get('search','DetailWisata_controller@search');
Route::get('detail/{wisata_id}','DetailWisata_controller@detail');
Route::get('wisata/kategori/{kategori_id}','DetailWisata_controller@wisata_kategori');
Route::get('event_detail/{event_id}','DetailWisata_controller@detail_event');
Route::get('berita_detail/{berita_id}','DetailWisata_controller@detail_berita');
// Start
Route::group(['middleware'=>'auth'],function(){

    Route::get('master/profile','Beranda_controller@index');

    //Manage Profile
    Route::get('master/profile','Profile_controller@index');
    Route::get('master/profile/add','Profile_controller@add');
    Route::post('master/profile/add','Profile_controller@store');
    Route::get('master/profile/{id}','Profile_controller@edit');
    Route::put('master/profile/{id}','Profile_controller@update');
    Route::delete('master/profile/{id}','Profile_controller@delete');

    // Dasboard
    Route::get('master/dasboard','Dasboard_controller@index');

    //Berita
    Route::get('master/berita','Berita_controller@index');
    Route::get('master/berita/add','Berita_controller@add');
    Route::post('master/berita/add','Berita_controller@store');
    Route::get('master/berita/{berita_id}','Berita_controller@edit');
    Route::put('master/berita/{berita_id}','Berita_controller@update');
    Route::delete('master/berita/{berita_id}','Berita_controller@delete');

    // Event
    Route::get('master/event','Event_controller@index');
    Route::get('master/event/add','Event_controller@add');
    Route::post('master/event/add','Event_controller@store');
    Route::get('master/event/{event_id}','Event_controller@edit');
    Route::put('master/event/{event_id}','Event_controller@update');
    Route::delete('master/event/{event_id}','Event_controller@delete');


    // master kategori
    Route::get('master/kategori','Kategori_controller@index'); //menampilkan Data table
    Route::get('master/kategori/add','Kategori_controller@add'); //mengarahkan button ke link tamnah data
    Route::post('master/kategori/add','Kategori_controller@store'); //insert data
    Route::get('master/kategori/{kategori_id}','Kategori_controller@edit'); //edit data
    Route::put('master/kategori/{kategori_id}','Kategori_controller@update'); //button update
    Route::delete('master/kategori/{kategori_id}','Kategori_controller@delete'); //delete data

    // master wisata
    // Route::get('master/wisata','Wisata_controller@index');

    // Route::get('wisata/detail/{wisata_id}','Wisata_controller@show');

    // Route::get('master/wisata/add','Wisata_controller@add');
    // Route::post('master/wisata/add','Wisata_controller@store');
    // Route::get('master/wisata/{wisata_id}','Wisata_controller@edit');
    // Route::put('master/wisata/{wisata_id}','Wisata_controller@update');
    // Route::delete('master/wisata/{wisata_id}','Wisata_controller@delete');


    //Wisata New
    Route::get('master/wisata_new','Wisata_new_controller@index');

    Route::get('wisata/detail/{wisata_id}','Wisata_new_controller@show');
    Route::get('master/wisata_new/nonaktif','Wisata_new_controller@nonaktif');

    Route::get('wisata_new/periode','Wisata_new_controller@periode');

    Route::get('master/wisata_new/add','Wisata_new_controller@add');
    Route::post('master/wisata_new/add','Wisata_new_controller@store');
    Route::get('master/wisata_new/{wisata_id}','Wisata_new_controller@edit');
    Route::put('master/wisata_new/{wisata_id}','Wisata_new_controller@update');
    Route::delete('master/wisata_new/{wisata_id}','Wisata_new_controller@delete');

    Route::get('master/wisata_new/status/{wisata_id}','Wisata_new_controller@status');

    //Verifikasi Wisata
    Route::get('verifikasi','Verifikasi_controller@index');
    Route::get('verifikasi/{wisata_id}','Verifikasi_controller@store');

    Route::get('verifikasi/setujui/{id}','Verifikasi_controller@setujui');
    Route::get('verifikasi/tolak/{id}','Verifikasi_controller@tolak');

    //Fasilitas wisata
    Route::get('master/fasilitas','Fasilitas_controller@index');

    Route::post('master/fasilitas/add','Fasilitas_controller@checkboxPage');

    Route::get('master/fasilitas/add','Fasilitas_controller@add');
    Route::post('master/fasilitas/add','Fasilitas_controller@store');
    Route::get('master/fasilitas/{id}','Fasilitas_controller@edit');
    Route::put('master/fasilitas/{id}','Fasilitas_controller@update');
    Route::delete('master/fasilitas/{id}','Fasilitas_controller@delete');


    //Fasilitas pendukung
    Route::get('master/fasilitas','Fasilitas_controller@index');
    Route::get('master/fasilitas/add','Fasilitas_controller@add');
    Route::post('master/fasilitas/add','Fasilitas_controller@store');
    Route::get('master/fasilitas/{fasilitas_id}','Fasilitas_controller@edit');
    Route::put('master/fasilitas/{fasilitas_id}','Fasilitas_controller@update');
    Route::delete('master/fasilitas/{fasilitas_id}','Fasilitas_controller@delete');


    //Wahana
    Route::get('master/wahana','Wahana_controller@index');

    Route::get('wahana/detail/{id}','Wahana_controller@show');

    Route::get('master/wahana/add','Wahana_controller@add');
    Route::post('master/wahana/add','Wahana_controller@store');
    Route::get('master/wahana/{wahana_id}','Wahana_controller@edit');
    Route::put('master/wahana/{wahana_id}','Wahana_controller@update');
    Route::delete('master/wahana/{wahana_id}','Wahana_controller@delete');

    //wisatawan
    Route::get('master/wisatawan','Wisatawan_controller@index');
    Route::get('master/wisatawan/add','Wisatawan_controller@add');
    Route::post('master/wisatawan/add','Wisatawan_controller@store');
    Route::get('master/wisatawan/{wisatawan_id}','Wisatawan_controller@edit');
    Route::put('master/wisatawan/{wisatawan_id}','Wisatawan_controller@update');
    Route::delete('master/wisatawan/{wisatawan_id}','Wisatawan_controller@delete');

    //Pendapatan
    Route::get('master/pendapatan','Pendapatan_controller@index');
    Route::get('master/pendapatan/add','Pendapatan_controller@add');
    Route::post('master/pendapatan/add','Pendapatan_controller@store');
    Route::get('master/pendapatan/{pendapatan_id}','Pendapatan_controller@edit');
    Route::put('master/pendapatan/{pendapatan_id}','Pendapatan_controller@update');
    Route::delete('master/pendapatan/{pendapatan_id}','Pendapatan_controller@delete');

    //About
    Route::get('master/about','About_controller@index');
    Route::get('master/about/add','About_controller@add');
    Route::post('master/about/add','About_controller@store');
    Route::get('master/about/{about_id}','About_controller@edit');
    Route::put('master/about/{about_id}','About_controller@update');
    Route::delete('master/about/{about_id}','About_controller@delete');

    //Kontak
    Route::get('master/kontak','Kontak_controller@index');
    Route::get('master/kontak/add','Kontak_controller@add');
    Route::post('master/kontak/add','Kontak_controller@store');
    Route::get('master/kontak/{kontak_id}','Kontak_controller@edit');
    Route::put('master/kontak/{kontak_id}','Kontak_controller@update');
    Route::delete('master/kontak/{kontak_id}','Kontak_controller@delete');

    //Cinderamata
    Route::get('master/cinderamata','Cinderamata_controller@index');

    Route::get('cinderamata/detail/{id}','Cinderamata_controller@show');

    Route::get('master/cinderamata/add','Cinderamata_controller@add');
    Route::post('master/cinderamata/add','Cinderamata_controller@store');
    Route::get('master/cinderamata/{id}','Cinderamata_controller@edit');
    Route::put('master/cinderamata/{id}','Cinderamata_controller@update');
    Route::delete('master/cinderamata/{id}','Cinderamata_controller@delete');

    //Kuliner
    Route::get('master/kuliner','Kuliner_controller@index');

    Route::get('kuliner/detail/{id}','Kuliner_controller@show');

    Route::get('master/kuliner/add','Kuliner_controller@add');
    Route::post('master/kuliner/add','Kuliner_controller@store');
    Route::get('master/kuliner/{id}','Kuliner_controller@edit');
    Route::put('master/kuliner/{id}','Kuliner_controller@update');
    Route::delete('master/kuliner/{id}','Kuliner_controller@delete');

    //Akomodasi
    Route::get('master/akomodasi','Akomodasi_controller@index');

    Route::get('akomodasi/detail/{id}','Akomodasi_controller@show');

    Route::get('master/akomodasi/add','Akomodasi_controller@add');
    Route::post('master/akomodasi/add','Akomodasi_controller@store');
    Route::get('master/akomodasi/{id}','Akomodasi_controller@edit');
    Route::put('master/akomodasi/{id}','Akomodasi_controller@update');
    Route::delete('master/akomodasi/{id}','Akomodasi_controller@delete');




});

// End


