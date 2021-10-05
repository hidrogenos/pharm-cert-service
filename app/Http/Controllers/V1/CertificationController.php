<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Infrastructure\Persistence\CertificateEloquent;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CertificationController extends Controller
{
    use ResponseTrait;

    private $certificateEloquent;

    private const SERVICE_NAME = 'CERT-SERVICE';

    public function __construct(CertificateEloquent $certificateEloquent)
    {
        $this->certificateEloquent = $certificateEloquent;
    }

    public function validateCertificate(string $nroControl): JsonResponse
    {
        //Return error 404 response if Invoice was not found
        if (!$this->certificateEloquent->findByControlNo($nroControl))
            return $this->errorResponse(
                self::SERVICE_NAME,
                Response::HTTP_NOT_FOUND,
                'Certificate not found!'
            );
        return $this->successResponse(
            $this->certificateEloquent->findByControlNo($nroControl),
            self::SERVICE_NAME,
            Response::HTTP_OK
        );
    }
}
