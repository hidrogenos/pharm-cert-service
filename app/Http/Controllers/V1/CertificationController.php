<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CertificationController extends Controller
{
    use ResponseTrait;

    public function validateCertificate(string $nroControl): JsonResponse
    {
        /*//Return error 404 response if Invoice was not found
        if (!$this->invoiceEloquent->find($id))
            return $this->errorResponse(
                $this->serviceName,
                Response::HTTP_NOT_FOUND,
                'Invoice not found!'
            );*/
        return $this->successResponse(
            ['nro' => $nroControl],
            'CERT-SERVICE',
            Response::HTTP_OK
        );
    }
}
