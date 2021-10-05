<?php

namespace App\Infrastructure\Persistence;

use App\Certificate;
use App\Http\Resources\CertificateResource;

class CertificateEloquent
{

    /**
     * @var Certificate
     */
    private Certificate $model;

    public function __construct()
    {
        $this->model = new Certificate();
    }

    /**
     * @param $nroControl
     * @return CertificateResource
     */
    public function findByControlNo($nroControl): CertificateResource
    {
        return CertificateResource::make($this->model->with('variables')->firstWhere('nro_control', $nroControl));
    }
}
