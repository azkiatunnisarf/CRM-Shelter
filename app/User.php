<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'user';
    protected $primaryKey = 'email';
    protected $fillable = [
         'username'
        ,'nama_depan' 
        ,'nama_belakang'
        ,'password'
        ,'email'
        ,'wilayah_id'
        ,'no_hp'
        ,'nama_area'
        ,'nama_wilayah'
        ,'rule'
        ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
        ,'remember_token'
    ];
    public $incrementing = false;

    public function wilayah()
    {
        return $this->belongsTo(\App\Wilayah::class,'wilayah_id','wilayah_id');
    }
}
