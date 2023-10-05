<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesyuarat extends Model
{
    use HasFactory;

    // Maklumkan nama table yang perlu Model ini hubungi
    protected $table = 'mesyuarat';

    public function senaraiUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
