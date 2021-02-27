<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_wahana_detail extends Model
{
    protected $table = 'm_wahana_detail';

    protected $fillable = [
        'wahana_id',
        'nama_wahana',
        // 'gambar',
        'htm',
        'deskripsi'
    ];
}
