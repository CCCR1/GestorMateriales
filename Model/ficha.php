<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichaModel extends Model
{
    protected $table = 'ficha';
    protected $primaryKey = 'idFicha';
    public $timestamps = false;

    protected $fillable = [
        'numeroFicha',
    ];

    protected $hidden = [
        'idFicha',
    ];

    public function reporte()
    {
        return $this->belongsTo(Reporte::class);
    }
}
