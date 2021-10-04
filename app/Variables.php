<?php

namespace App;

use App\Traits\UuidsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variables extends Model
{
    use HasFactory, UuidsTrait;

    // VARIABLES
    const VARIABLES_FISICAS = 'VARIABLES_FISICAS';
    const VARIABLES_MICROBIOLOGICAS = 'VARIABLES_MICROBIOLOGICAS';

    //ENSAYOS
    const ENVASE = 'ENVASE';
    const EMPAQUE = 'EMPAQUE';
    const PRUEBA_SELLADO = 'PRUEBA_SELLADO';
    const INFORMACION_PRODUCTO = 'INFORMACION_PRODUCTO';

    const VARIABLES = [
        self::VARIABLES_FISICAS,
        self::VARIABLES_MICROBIOLOGICAS
    ];

    const ENSAYOS = [
        self::ENVASE,
        self::EMPAQUE,
        self::PRUEBA_SELLADO,
        self::INFORMACION_PRODUCTO
    ];

    /**
     * @return BelongsTo
     */
    public function certificate(): BelongsTo
    {
        return $this->belongsTo(Certificate::class);
    }
}
