<?php

use App\Certificate;
use App\Variables;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Provider\Uuid;

class AddInitialData extends Migration
{
    const CERTIFICATES = [
        0 => [
            'id' => 'a9b51fa4-2579-11ec-9621-0242ac130002',
            'nro_control' => 'PT21-2487',
            'id_pieza' => 'PT01200A',
            'producto' => 'CLONIOINA 0.150 mg CAJA X500 TAB',
            'lote' => 'B090490',
            'lote_granel' => 'B070410',
            'cliente' => 'LABORATORIOS ECAR',
            'registro_sanitario' => 'INVIMA 2009M-0009253',
            'fecha_fabricacion' => '2023-07-29',
            'fecha_inicio_analisis' => '2021-09-29',
            'fecha_recpecion_muestra' => '2021-09-29',
            'cod_especificacion' => 'CCPT-01058',
            'orden_produccion' => '50085039',
            'cantidad' => '3000Cj',
            'fecha_vencimiento' => '2023-07-29',
            'fecha_terminacion_analisis' => '2021-09-30',
            'observaciones' => 'N/A',
            'conclusion' => 'La muestra analizada cumple con las especificaciones vigentes.',
            'estado' => '1',
        ],
        1 => [
            'id' => 'a9b521ac-2579-11ec-9621-0242ac130002',
            'nro_control' => 'PT21-2486',
            'id_pieza' => 'PT58029A',
            'producto' => 'VICAL VIT C NARANJA BOLSA X576 TAB',
            'lote' => 'B090343',
            'lote_granel' => 'B090085',
            'cliente' => 'LABORATORIOS ECAR',
            'registro_sanitario' => 'INVIMA 2016M-0004550-R1',
            'fecha_fabricacion' => '2021-09-09',
            'fecha_inicio_analisis' => '2021-09-29',
            'fecha_recpecion_muestra' => '2021-09-28',
            'cod_especificacion' => 'CCPT-58016',
            'orden_produccion' => '50084926',
            'cantidad' => '875Bo',
            'fecha_vencimiento' => '2023-09-09',
            'fecha_terminacion_analisis' => '2021-09-30',
            'observaciones' => 'N/A',
            'conclusion' => 'La muestra analizada cumple con las especificaciones vigentes.',
            'estado' => '1',
        ],
        2 => [
            'id' => 'a9b5229c-2579-11ec-9621-0242ac130002',
            'nro_control' => 'PT21-2482',
            'id_pieza' => 'PT01136R',
            'producto' => 'ATORVASTATINA 20 mg X 1000',
            'lote' => 'B090367',
            'lote_granel' => 'B080004',
            'cliente' => 'LABORATORIOS ECAR',
            'registro_sanitario' => 'INVIMA 2017M-0005892-R1',
            'fecha_fabricacion' => '2021-08-23',
            'fecha_inicio_analisis' => '2021-09-28',
            'fecha_recpecion_muestra' => '2021-09-28',
            'cod_especificacion' => 'CCPT-01049',
            'orden_produccion' => '50084950',
            'cantidad' => '2984Cj',
            'fecha_vencimiento' => '2023-08-23',
            'fecha_terminacion_analisis' => '2021-09-30',
            'observaciones' => 'N/A',
            'conclusion' => 'La muestra analizada cumple con las especificaciones vigentes.',
            'estado' => '1',
        ]
    ];

    const VARIABLES = [
        0 => [
            'id' => 'b3a08c5a-257a-11ec-9621-0242ac130002',
            'ensayo' => Variables::ENVASE,
            'especificaciones' => 'Blister x 10 tabletas',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[0]['id'],
        ],
        1 => [
            'id' => 'b3a093b2-257a-11ec-9621-0242ac130002',
            'ensayo' => Variables::EMPAQUE,
            'especificaciones' => 'Caja por 500 tabletas.',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[0]['id'],
        ],
        2 => [
            'id' => 'b3a094ac-257a-11ec-9621-0242ac130002',
            'ensayo' => Variables::PRUEBA_SELLADO,
            'especificaciones' => 'No debe presentar filtración',
            'metodo' => 'USP 43',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[0]['id'],
        ],
        3 => [
            'id' => 'b3a09696-257a-11ec-9621-0242ac130002',
            'ensayo' => Variables::INFORMACION_PRODUCTO,
            'especificaciones' => 'Todo producto debe estar marcado consu respectivo número de lote.fecha de fabricación, fecha de vencimiento,y leyendas que aplique',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[0]['id'],
        ],
        4 => [
            'id' => 'a3892b82-257b-11ec-9621-0242ac130002',
            'ensayo' => Variables::ENVASE,
            'especificaciones' => 'Sobre x 12 tabletas masticables',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[1]['id'],
        ],
        5 => [
            'id' => 'a3892d9e-257b-11ec-9621-0242ac130002',
            'ensayo' => Variables::EMPAQUE,
            'especificaciones' => 'Bolsa x 576 tabletas masticables (48 sobres x 12 tabletas masticables)',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[1]['id'],
        ],
        6 => [
            'id' => 'a3892f24-257b-11ec-9621-0242ac130002',
            'ensayo' => Variables::PRUEBA_SELLADO,
            'especificaciones' => 'No debe presentar filtración',
            'metodo' => 'USP 43',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[1]['id'],
        ],
        7 => [
            'id' => 'a3893046-257b-11ec-9621-0242ac130002',
            'ensayo' => Variables::INFORMACION_PRODUCTO,
            'especificaciones' => 'Todo producto debe estar marcado con su respectivo número de lote, fecha de fabricación, fecha de vencimiento y la leyenda de uso institucional, si aplica',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[1]['id'],
        ],
        8 => [
            'id' => 'c46a9c7c-257c-11ec-9621-0242ac130002',
            'ensayo' => Variables::ENVASE,
            'especificaciones' => 'Blister por 10 tabletas',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[2]['id'],
        ],
        9 => [
            'id' => 'c46a9e84-257c-11ec-9621-0242ac130002',
            'ensayo' => Variables::EMPAQUE,
            'especificaciones' => 'Caja por 100 blister',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[2]['id'],
        ],
        10 => [
            'id' => 'c46a9f74-257c-11ec-9621-0242ac130002',
            'ensayo' => Variables::PRUEBA_SELLADO,
            'especificaciones' => 'No debe presentar filtración',
            'metodo' => 'USP 43',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[2]['id'],
        ],
        11 => [
            'id' => 'c46aa230-257c-11ec-9621-0242ac130002',
            'ensayo' => Variables::INFORMACION_PRODUCTO,
            'especificaciones' => 'Todo producto debe estar marcado consurespectivo número de k>te, fecha de vencimiento, fecha de fabricación y la teyenda de uso institucional.si aplica',
            'metodo' => 'LABORATORIOS ECAR',
            'resultado' => '1',
            'tipo_variable' => Variables::VARIABLES_FISICAS,
            'certificate_id' => self::CERTIFICATES[2]['id'],
        ],
    ];

    public function up()
    {
        Certificate::query()->insert(self::CERTIFICATES);
        Variables::query()->insert(self::VARIABLES);
    }

    public function down()
    {
        DB::table('certificates')->truncate();
        DB::table('variables')->truncate();
    }
}
