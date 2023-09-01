<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaquinaModel extends Model
{
    protected $table = 'Maquina';
    protected $primaryKey = 'idMaquina';
    public $timestamps = false;

    protected $fillable = [
        'nombreMaquina',
        'placa',
        'serial',
        'adquisicion',
    ];

    protected $hidden = [
        'idMaquina',
    ];

    public function transaccionalRepoModels()
    {
        return $this->hasMany(TransaccionalRepoModel::class, 'maquinaModel_id');
    }
}
