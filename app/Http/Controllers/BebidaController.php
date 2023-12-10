<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bebida\{
    StoreBebidaRequest, UpdateBebidaRequest
};
use App\Models\Bebida;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bebidas = Bebida::all();
        return response()->json($bebidas, 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBebidaRequest $request)
    {
        $bebida = Bebida::create([
        'nome' => $request->nome,
        'quantidade_estoque' => $request->quantidade_estoque,
        'valor' => $request->valor,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Bebida criada com sucesso',
            'bebida' => $bebida
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $bebida = Bebida::findOrFail($id);

        return response()->json($bebida, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBebidaRequest $request, Bebida $bebida)
    {
        $bebida->update([
        'nome' => $request->nome,
        'quantidade_estoque' => $request->quantidade_estoque,
        'valor' => $request->valor,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Bebida editada com sucesso',
            'bebida' => $bebida
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bebida $bebida)
    {
        $bebida->delete();

        return response()->json([
            'status' => true,
            'message' => 'Bebida deletada com sucesso',
            'bebida' => $bebida
        ], 200);
    }
}
