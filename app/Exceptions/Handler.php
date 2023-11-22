<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    protected $customMessage;
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
                $this->customMessage = 'Rota incorreta ou recurso não encontrado';

                return response()->json([
                    'message' => $this->customMessage,
                    'status' => false
                ], 404);
            }
        });

        $this->renderable(function (Throwable $e, Request $request) {
            if ($request->is('api/*')) {
                $this->customMessage = 'Erro genérico';

                return response()->json([
                    'message' => $this->customMessage,
                    'status' => false
                ], 500);
            }
        });
    }

    public function getCustomMessage() : string
    {
        return $this->customMessage;
    }

}
