<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Masyarakat extends Authenticatable
{
    use Notifiable;

    protected $table = 'masyarakat';

    protected $primaryKey = 'id';
    
    protected $fillable = ['password','nik','name','jenis_kelamin','email','telepon'];

    protected $hidden = ['password', 'remember_token'];
}
