<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_wahana extends Model
{
    protected $table = 'm_wahana';

    public function wisata_w(){
                                                     //nama Field yg ada di table wisata
    return $this->belongsTo('App\Models\M_wisata','wisata','wisata_id');
    }

    public function detail(){
        return $this->hasMany('App\Models\M_wahana_detail','wahana_id');
    }
}
