<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->id();
            $table->string('cliente_razao_social',50)->default('')->nullable();
            $table->string('cliente_nome_fantasia',50)->default('')->nullable();
            $table->string('cliente_cnpj',50)->default('')->nullable();
            $table->string('cliente_cpf',50)->default('')->nullable();
            $table->string('cliente_inscricao_estatadual',20)->default('')->nullable();
            $table->enum('cliente_flag_simples_nacional',['S','N'])->default('N');
            $table->enum('cliente_flag_pessoa_juridica',['F','J','I '])->default('F');
            $table->enum('cliente_flag_pre_cadastro',['S','N'])->default('S');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
