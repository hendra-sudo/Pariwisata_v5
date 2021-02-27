<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_akomodasi extends Model
{
    protected $table = 'm_akomodasi';

    public function wisata_w(){
                                                        //nama Field yg ada di table wisata
        return $this->belongsTo('App\Models\M_wisata','wisata','wisata_id');
    }
}
