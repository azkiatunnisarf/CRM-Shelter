<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class call extends Model
{
    protected $table = 'call';
    protected $primaryKey = 'call_id';
    protected $fillable = [
        'nama_customer'
       ,'spv_pic'
       ,'tanggal_call'
       ,'jam_call'
       ,'pembicaraan'
       ,'pic_called'
       ,'hal_menonjol'
    ];

    // function initialism($str, $as_space = array('-'))
    // {
    //     $str = str_replace($as_space, ' ', trim($str));
    //     $ret = '';
    //     foreach (explode(' ', $str) as $word) {
    //         $ret .= strtoupper($word[0]);
    //     }
    //     return $ret;
    //  sdfsdf
    // }
}
