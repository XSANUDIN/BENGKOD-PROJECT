<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    //
    protected $fillable =[
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
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
