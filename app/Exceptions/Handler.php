<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')){

                return response()->json([
                    'message ' => 'Rota incorreta ou recurso não encontrado',
                    'status' => false
                ], 404);
            }
        });

        $this->renderable(function (QueryException $e, Request $request) {
            if ($request->is('api/*')){

                return response()->json([
                    'message ' => 'Servidor do banco de dados não encontrado',
                    'status' => false,
                    'code' => $e->getCode(),
                ], 500);
            }
        });

        $this->renderable(function (Throwable $e, Request $request) {
            if ($request->is('api/*')) {

                return response()->json([
                    'message' => 'Erro genérico',
                    'status' => false
                ], 500);
            }
        });
    }
}
