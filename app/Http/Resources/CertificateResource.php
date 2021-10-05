<?php

namespace App\Http\Resources;

use App\Certificate;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin Certificate */
class CertificateResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nro_control' => $this->nro_control,
            'id_pieza' => $this->id_pieza,
            'producto' => $this->producto,
            'lote' => $this->lote,
            'lote_granel' => $this->lote_granel,
            'cliente' => $this->cliente,
            'registro_sanitario' => $this->registro_sanitario,
            'fecha_fabricacion' => $this->fecha_fabricacion,
            'fecha_inicio_analisis' => $this->fecha_inicio_analisis,
            'fecha_recpecion_muestra' => $this->fecha_recpecion_muestra,
            'cod_especificacion' => $this->cod_especificacion,
            'orden_produccion' => $this->orden_produccion,
            'cantidad' => $this->cantidad,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'fecha_terminacion_analisis' => $this->fecha_terminacion_analisis,
            'observaciones' => $this->observaciones,
            'conclusion' => $this->conclusion,
            'estado' => $this->estado,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'variables' => VariablesResource::collection($this->variables),
        ];
    }
}
