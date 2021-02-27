<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_wisata extends Model
{
    protected $table = 'm_wisata';

    public function kategori_w(){
                                                        //nama Field yg ada di table wisata
        return $this->belongsTo('App\Models\M_kategori','kategori','kategori_id');
    }

    public function cinderamata_r(){
                                                        //nama Field yg ada di table wisata
        return $this->hasOne('App\Models\M_cinderamata','wisata','wisata_id');
    }


}
