<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reporte extends Model
{
    protected $table = 'reporte'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'fechaYHora',
        'area',
        'destinoBienes',
        'nombreCoordinador',
        'Cuentadante1',
        'Cuentadante2',
        'Cuentadante3',
        'tipoCuentadante',
        'firma',
    ];

    public function elementosSolicitados(): HasMany
    {
        return $this->hasMany(ElementoSolicitado::class, 'reporte_id');
    }

    public function ficha(): HasMany
    {
        return $this->hasMany(FichaModel::class, 'reporte_id');
    }

    public function personalCenigrafModel(): HasMany
    {
        return $this->hasMany(PersonalCenigrafModel::class, 'reporte_id');
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->fechaYHora = Utiles::obtenerFechaYHoraActual();
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->elementosSolicitados as $elemento) {
            $total += $elemento->getTotal();
        }
        return $total;
    }
}
