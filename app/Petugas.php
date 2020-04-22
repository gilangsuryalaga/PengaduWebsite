<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use Notifiable;
    protected $guard = 'petugas';
    protected $table = 'petugas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey ='id_petugas';
    
    protected $fillable = [
        'nama_petugas','email','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];
    public function is_admin(){
        if($this->admin){
            return true;
        }
            return false;
    }
}
