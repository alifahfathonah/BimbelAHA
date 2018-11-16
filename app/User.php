<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['username','password','nama','alamat',
                            'no_hp','asal_sekolah','email','verif_email'];

}
