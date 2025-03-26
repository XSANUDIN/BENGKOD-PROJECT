<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    //
    protected $fillable =[
        'nama',
        'alamat',
        'no_hp',
        'email',
        'password',
        'role',
    ];
    

    //Relation

    public function pasien(): BelongsTo{
        return $this->belongsTo(Users::class, 'id_pasien');
    }

    public function dokter(): BelongsTo{
        return $this->belongsTo(Users::class, 'id_dokter');
    }

    public function periksa(): HasMany{
        return $this->hasMany(DetailPeriksa::class, 'id_periksa'); 
    }
}
