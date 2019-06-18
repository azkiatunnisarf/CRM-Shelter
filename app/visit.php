<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $table = 'visit';
    protected $primaryKey = 'visit_id';
    protected $fillable = [
        'nama_customer'
       ,'spv_pic'
       ,'tanggal_visit'
       ,'waktu_in'
       ,'waktu_out'
       ,'pic_meeted'
       ,'kegiatan'
    ];
}
