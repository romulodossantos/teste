<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use app\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json(cliente);
    }
    public function store (Request $request)
        {
            $cliente = Cliente::creat($reaquest->all());
            return response()->json(cliente, 201);
        }
        public function show ($id)
        {
            $client = Cliente::find($id);
            if ($cliente) {
                return reponse()->json($cliente);
            } else {
                return response ()->json(['message' => 'Cliente não encontrado'],404);
            
            }
        }
        public function update(Request $request, $id)
        {
            $cliente = Cliente::find($id);
            if ($cliente) {
                $clientes->update($request->all());
                return response()->json($cliente);
            } else { 
                return response()->json(['massage' => 'Cliente não encontrado'], 404);
            
            }
        }
        public function destroy($id)
        {
            $cliente = Cliente::find($id);
            if ($cliente) {
                $cliente->delete();
                return response()->json(['message' => 'Cliente deletado com sucesso ']);
            } else {
                response()->json(['message' => 'Cliente não encontrado'], 404);
            }
        }
            
}
