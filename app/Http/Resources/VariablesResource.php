<?php

namespace App\Http\Resources;

use App\Variables;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin Variables */
class VariablesResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ensayo' => $this->ensayo,
            'especificaciones' => $this->especificaciones,
            'metodo' => $this->metodo,
            'resultado' => $this->resultado,
            'tipo_variable' => $this->tipo_variable,
            'certificate_id' => $this->certificate_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
