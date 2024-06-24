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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id('aluno_id')->primary()->unique();
            $table->string('aluno_nome');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('turma_id');
            $table->timestamps();

            $table->foreign('usuario_id')
            ->references('usuario_id')
            ->on('usuarios');

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
        Schema::dropIfExists('alunos_usuarios');
    }
};