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
        Schema::create('alunos_disciplinas', function (Blueprint $table) {
            $table->id('aluno_disciplina_id')->primary()->unique();
            $table->unsignedBigInteger('disciplina_id');
            $table->unsignedBigInteger('aluno_id');
            $table->timestamps();

            $table->foreign('disciplina_id')
            ->references('disciplina_id')
            ->on('disciplinas');

            $table->foreign('aluno_id')
            ->references('aluno_id')
            ->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos_disciplinas');
    }
};