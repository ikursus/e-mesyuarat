<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relation user kepada mesyuarat menerusi pivot table mesyuarat_user
    public function senaraiMesyuarat()
    {
        // Jika tidak menggunakan nama pivot table mengikut ejaan singular kepada nama table relation
        // maka perlu declare nama pivot tersebut seperti berikut:
        // return $this->belongsToMany(Mesyuarat::class, 'nama_pivot_table');

        // Jika mengikut best practice laravel dalam pemberian nama pivot, maka tak perlu declare
        return $this->belongsToMany(Mesyuarat::class);
    }

    // public function meeting()
    // {
    //     return $this->hasOne(Mesyuarat::class, 'mesyuaratId', 'uid');
    //     return $this->belongsTo(Mesyuarat::class);
    // }
}
