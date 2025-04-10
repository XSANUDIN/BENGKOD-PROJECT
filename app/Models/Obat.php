<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $fillable =[
        'nama_obat',
        'kemasan',
        'harga',
    ];


    //Relation

    public function obat(): HasMany{
        return $this->hasMany(DetailPeriksa::class, 'id_obat'); 
    }
}
