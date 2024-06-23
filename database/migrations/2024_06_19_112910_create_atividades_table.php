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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id('atividade_id')->primary()->unique();
            $table->unsignedBigInteger('turma_id');
            $table->string('atividade_nome');
            $table->string('atividade_descricao');
            $table->timestamps();

            $table->foreign('turma_id')
                ->references('turma_id')
                ->on('turmas');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
