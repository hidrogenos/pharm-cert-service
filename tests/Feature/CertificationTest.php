<?php

namespace Tests\Feature;

use App\Certificate;
use App\Variables;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CertificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function should_validate_certificate()
    {
        $certificate = Certificate::factory()->create(['nro_control' => 'PT21-2487']);
        $variables = collect(Variables::ENSAYOS)->each(function ($ensayo) use ($certificate) {
            return Variables::factory()->create(['certificate_id' => $certificate->id, 'ensayo' => $ensayo]);
        });

        $response = $this->get('/api/V1/validate-cert/PT21-2487');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'status_code',
            'service',
            'data' => [
                "id",
                "nro_control",
                "id_pieza",
                "producto",
                "lote",
                "lote_granel",
                "cliente",
                "registro_sanitario",
                "fecha_fabricacion",
                "fecha_inicio_analisis",
                "fecha_recpecion_muestra",
                "cod_especificacion",
                "orden_produccion",
                "cantidad",
                "fecha_vencimiento",
                "fecha_terminacion_analisis",
                "observaciones",
                "conclusion",
                "estado",
                'variables' => [
                    [
                        "id",
                        "ensayo",
                        "especificaciones",
                        "metodo",
                        "resultado",
                        "tipo_variable",
                        "certificate_id",
                        "created_at",
                        "updated_at",
                    ]
                ]
            ]
        ]);
    }
}
