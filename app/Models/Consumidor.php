<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Consumidor extends Authenticatable implements JWTSubject
{
    use HasFactory;
    
    protected $table = 'consumidor';
    
    protected $fillable = [
        "nome", "cpf", "sexo", "endereco", "telefone", "bairro", "cidade", "email", "estado", "dt_inclusao", "cep", "cpftit"
    ];

    // Implementação dos métodos da interface JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
