<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoSolicitado extends Model
{
    protected $table = 'elemento_solicitado';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'cantidad',
        'contador',
        'nombre',
        'codigo',
        'unidadMedida',
        'observacion',
        'reporte_id',
    ];

    public function reporte()
    {
        return $this->belongsTo(Reporte::class, 'reporte_id');
    }

    public function getTotal()
    {
        return $this->cantidad + 1;
    }
}
