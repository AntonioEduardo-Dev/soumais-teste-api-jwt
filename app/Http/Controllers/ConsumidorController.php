<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumidor;
use Tymon\JWTAuth\Facades\JWTAuth;
use Carbon\Carbon;

class ConsumidorController extends Controller
{
    public function gerarToken(Request $request)
    {
		$this->validate($request, [
            'cpf' => 'required|string',
            'ip' => 'required|ip',
            'dthora' => 'required'
        ]);

        try {
            $cpf = $request->cpf; // Assuming the CPF is sent as a request parameter
    
            $consumidor = Consumidor::where('cpf', $cpf)->first();
    
            if (!$consumidor) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            
            $token = JWTAuth::fromUser($consumidor);
            
            $date = Carbon::now('America/Sao_Paulo')->format('d/m/Y H:i:s');
    
            return response()->json([
                'cpf' => $consumidor->cpf,
                'result' => true,
                'dthora' => $date,
                'token' => $token
            ]);

        } catch (\Exception $exception) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function testApi(Request $request)
    {
		$this->validate($request, [
            'cpf'   => 'required|string'
        ]);

        // Obter os dados do JSON
        $cpf = $request->input('cpf');
        $token = $request->input('token');

        // Verificar a autenticação do token JWT
        try {
            $consumidor = JWTAuth::authenticate($token);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token inválido'], 401);
        }
        
        // Verificar o usuario com cpf do token JWT
        try {
            // Aqui irei fazer a lógica para obter os consumidores com base no CPF
            $consumidores = Consumidor::where('cpf', $cpf)->get(['nome', 'email', 'endereco']);

            return response()->json($consumidores);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
