<?php

namespace App\Utils;

class Utiles
{
    public static function obtenerFechaYHoraActual()
    {
        $formato = 'Y-m-d H:i:s';
        $fechaHoraActual = date($formato);
        return $fechaHoraActual;
    }
}
