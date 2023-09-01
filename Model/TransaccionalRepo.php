<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransaccionalRepoModel extends Model
{
    protected $table = 'Reporte_Maquina';
    protected $primaryKey = 'idReporte';
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'idPer',
        'idAmbiente',
        'idMaquina',
        'Observaciones',
    ];

    public function personalCenigrafModel(): BelongsTo
    {
        return $this->belongsTo(PersonalCenigrafModel::class, 'idPer');
    }

    public function ambienteModel(): BelongsTo
    {
        return $this->belongsTo(AmbienteModel::class, 'idAmbiente');
    }

    public function maquinaModel(): BelongsTo
    {
        return $this->belongsTo(MaquinaModel::class, 'idMaquina');
    }
}

