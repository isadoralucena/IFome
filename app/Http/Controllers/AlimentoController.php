<?php

namespace App\Http\Controllers;

use App\Http\Requests\Alimento\{
    StoreAlimentoRequest, UpdateAlimentoRequest
};
use App\Models\Alimento;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alimentos = Alimento::all();

        return response()->json($alimentos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlimentoRequest $request)
    {
        $alimento = Alimento::create([
        'nome' => $request->nome,
        'quantidade_estoque' => $request->quantidade_estoque,
        'valor' => $request->valor,
        'composicao' => $request->composicao,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Alimento criado com sucesso',
            'alimento' => $alimento
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $alimento = Alimento::findOrFail($id);

        return response()->json($alimento, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlimentoRequest $request, int $id)
    {
        $alimento = Alimento::findOrFail($id);

        $alimento->update([
        'nome' => $request->nome,
        'quantidade_estoque' => $request->quantidade_estoque,
        'valor' => $request->valor,
        'composicao' => $request->composicao,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Alimento editado com sucesso',
            'alimento' => $alimento
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $alimento = Alimento::findOrFail($id);

        $alimento->delete();

        return response()->json([
            'status' => true,
            'message' => 'Alimento deletado com sucesso',
            'alimento' => $alimento
        ], 200);
    }
}
