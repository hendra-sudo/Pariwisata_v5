<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_profile extends Model
{

    protected $table = 'users';

    public function alamat_k(){
                                                //nama Field yg ada di table wisata
    return $this->belongsTo('App\Models\M_alamat','desa','id'); 
    }

}
