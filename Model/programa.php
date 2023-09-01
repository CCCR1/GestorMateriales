<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramaModel extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'idPrograma';
    public $timestamps = false;

    protected $fillable = [
        'nombrePrograma',
    ];

    protected $hidden = [
        'idPrograma',
    ];
}
