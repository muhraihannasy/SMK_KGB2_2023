<?php

namespace App\Traits;

trait HttpResponseTrait
{
    protected function successReponse($data, $statusCode = 200)
    {
        $response = [
            'success' => true,
        ];
        
        if($data !== null) $response['data'] = $data;

        return response()->json($response, $statusCode);
    }

    protected function errorResponse($message, $statusCode, $errors = []) {
        $response = [
            'success' => false,
            'message' => $message
        ];

        if(!empty($errors)) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $statusCode);
    }
}
