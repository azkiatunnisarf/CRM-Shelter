<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'email';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'username'
        ,'nama_depan' 
        ,'nama_belakang'
        ,'email'
        ,'password'
        ,'email'
        ,'no_hp'
        ,'cabang'
        ,'wilayah_supervisi'
        ,'rule'
        ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $incrementing = false;
    // public function wilayah()
    // {
    //     return $this->belongsTo(\App\Wilayah::class,'wilayah_id','wilayah_id');
    // }

    const ADMIN_TYPE = 'admin';
    const OFFICER_TYPE = 'officer';
    const MANAGER_CRM_TYPE = 'manager_crm';


    public function isAdmin()    {        
        return $this->rule === self::ADMIN_TYPE;    
    }

    public function isOfficer()    {        
        return $this->rule === self::OFFICER_TYPE;    
    }
    public function isManagerCRM()    {        
        return $this->rule === self::MANAGER_CRM_TYPE;    
    }


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }

}
