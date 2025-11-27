<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';       // nama tabel
    protected $primaryKey = 'id_user';
    public $timestamps = false;      // karena tabel kamu gak ada created_at / updated_at

    protected $fillable = [
        'username', 'password', 'role'
    ];
}
