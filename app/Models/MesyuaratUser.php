<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesyuaratUser extends Model
{
    use HasFactory;

    protected $table = 'mesyuarat_user';

    protected $fillable = [
        'mesyuarat_id',
        'user_id'
    ];
}
