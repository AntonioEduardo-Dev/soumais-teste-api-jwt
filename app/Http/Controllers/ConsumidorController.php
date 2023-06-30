<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumidor;
use Tymon\JWTAuth\Facades\JWTAuth;
use Carbon\Carbon;

class ConsumidorController extends Controller
{
    // Função responsavel por gerar token, para uso da api
    public function generateToken(Request $request)
    {
        // Esta linha executa a validação dos campos cpf, ip e dthora presentes no objeto $request.
		$this->validate($request, [
            'cpf' => 'required|string',
            'ip' => 'required|ip',
            'dthora' => 'required'
        ]);

        // Bloco try-catch, para capturar possíveis exceções durante a execução.
        try {
            $cpf = preg_replace('/\D/', '', $request->cpf); // Supondo que o CPF seja enviado como um parâmetro da requisição

            // Esta linha busca no banco de dados um registro da tabela Consumidor onde o campo cpf corresponda ao valor armazenado na variável $cpf.
            $consumidor = Consumidor::where('cpf', $cpf)->first();
            
            // Aqui, verifico se a variável $consumidor é falsa
            if (!$consumidor) {
                return response()->json(['error' => 'Unauthorized'], 401); // Erro 401 Unauthorized
            }
            
            // Gera um token JWT para o consumidor
            $token = JWTAuth::fromUser($consumidor);
            
            // Aqui, estou utilizando a biblioteca Carbon para obter a data e hora atual no fuso horário de São Paulo.
            $date = Carbon::now('America/Sao_Paulo')->format('d/m/Y H:i:s');
            
            // Retorna uma resposta JSON contendo os dados relevantes para o cliente. 
            return response()->json([
                'cpf' => $consumidor->cpf,
                'result' => true,
                'dthora' => $date,
                'token' => $token
            ]);
            
        } catch (\Exception $exception) { // Se ocorrer qualquer exceção durante a execução do código dentro do bloco try, é capturado a exceção
            return response()->json(['error' => 'Internal Server Error'], 500); // Erro 500 Internal Server Error
        }
    }

    // Função responsavel por testar token, para uso da api
    public function testApi(Request $request)
    {
        // Esta linha executa a validação do campo cpf.
		$this->validate($request, [
            'cpf'   => 'required|string'
        ]);

        // Obter os dados do JSON
        $cpf = preg_replace('/\D/', '', $request->input('cpf')); // De cpf
        $token = $request->input('token'); // De token

        // Verificar a autenticação do token JWT
        try {
            $consumidor = JWTAuth::authenticate($token);

        } catch (\Exception $e) { // Se ocorrer qualquer exceção durante a execução do token
            return response()->json(['error' => 'Token inválido'], 401); // Erro 401 Unauthorized
        }
        
        // Verificar o usuario com cpf do token JWT
        try {
            // Aqui irei fazer a lógica para obter os consumidores com base no CPF
            $consumidores = Consumidor::where('cpf', $cpf)->get(['nome', 'email', 'endereco']);

            // Se existir pelo menos um resultado
            if($consumidores->count() > 0){
                // Retorna uma resposta JSON contendo os dados relevantes do cpf para o consumidor. 
                return response()->json($consumidores);
            }else{
                return response()->json(['error' => 'Not found'], 404); // Erro 404 Not found
            }
            
        } catch (\Exception $e) { // Se ocorrer qualquer exceção durante a execução do código dentro do bloco try, é capturado a exceção
            return response()->json(['error' => 'Internal Server Error'], 500); // Erro 500 Internal Server Error
        }
    }
}
