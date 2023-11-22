<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

trait ApiErrorResponse
{
    /**
     * Returns a json exception with validation errors
     *
     * @param Validator $validator
     *
     * @return void
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException (
            response()->json([
            'status' => false,
            'message' => 'Validação falhou',
            'errors' => $validator->errors()
            ], 400)
        );
    }
}
