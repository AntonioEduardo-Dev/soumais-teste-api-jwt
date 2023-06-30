<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 90)->collation('utf8mb4_general_ci');
            $table->string('cpf', 20)->index('cpf')->nullable()->collation('utf8mb4_general_ci');
            $table->string('sexo', 1)->nullable()->collation('utf8mb4_general_ci');
            $table->string('endereco', 200)->collation('utf8mb4_general_ci');
            $table->string('telefone', 20)->collation('utf8mb4_general_ci');
            $table->string('bairro', 60)->collation('utf8mb4_general_ci');
            $table->string('cidade', 60)->collation('utf8mb4_general_ci');
            $table->string('email', 150)->collation('utf8mb4_general_ci');
            $table->string('estado', 2)->collation('utf8mb4_general_ci');
            $table->datetime('dt_inclusao')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('cep', 10)->collation('utf8mb4_general_ci');
            $table->string('cpftit', 20)->nullable()->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumidor');
    }
}
