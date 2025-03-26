<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
    //
    protected $fillable =[
        'id_periksa',
        'id_obat',
    ];

    public function obat(): BelongsTo{
        return $this->belongsTo(Obat::class, 'id_obat'); 
    }
    
    public function periksa(): BelongsTo{
        return $this->belongsTo(Periksa::class, 'id_obat'); 
    }
}
