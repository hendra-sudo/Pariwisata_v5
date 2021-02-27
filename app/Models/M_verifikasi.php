<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_verifikasi extends Model
{
    protected $table = 'm_verifikasi';

    public function wisata_r(){
                                                     //nama Field foreign key  yg ada di table m_wisata
    return $this->belongsTo('App\Models\M_wisata','wisata','wisata_id');
    }

    public function user_r(){
                                                //nama Field foreign key  yg ada di table m_wisata
    return $this->belongsTo('App\User','user');
    }
}
