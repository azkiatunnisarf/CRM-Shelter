<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'kode_customer';
    protected $fillable = [
        'nama_perusahaan'
       ,'jenis_usaha'
       ,'bu_id'
       ,'alamat'
       ,'provinsi'
       ,'kabupaten'
       ,'telpon'
       ,'fax'
       ,'cp'
       ,'area_id'
       ,'wilayah_id'
       ,'email'
       
    ];
    public $incrementing = false;

    public function wilayah()
    {

        return $this->belongsTo(\App\Wilayah::class,'wilayah_id','wilayah_id');

    }
}
