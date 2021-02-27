<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_fasilitas extends Model
{
    protected $table = 'm_fasilitas';

    public function wisata_w(){
            //nama Field yg ada di table wisata
    return $this->belongsTo('App\Models\M_wisata','wisata','wisata_id');
    }
}
