<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Alimento\{
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
        try{
            $bebida = Bebida::findOrFail($id);

            return response()->json($bebida, 200);

        } catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBebidaRequest $request, int $id)
    {
        try{
            $bebida = Bebida::findOrFail($id);

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
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try{
            $bebida = Bebida::findOrFail($id);

            $bebida->delete();

            return response()->json([
                'status' => true,
                'message' => 'Bebida deletada com sucesso',
                'bebida' => $bebida
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
