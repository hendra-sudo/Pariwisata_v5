<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_cinderamata extends Model
{
    protected $table = 'm_cinderamata';

    public function wisata_w(){
                                                        //nama Field yg ada di table wisata
        return $this->belongsTo('App\Models\M_wisata','wisata','wisata_id');   
    }
}
