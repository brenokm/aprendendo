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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id('turma_id')->primary()->unique();
            $table->string('turma_nome');
            $table->timestamps();

            $table->foreign('professor_id')
                ->references('professor_id')
                ->on('professores');
                
                $table->foreign('aluno_id')
                ->references('aluno_id')
                ->on('alunos');
                
                $table->foreign('curso_id')
                ->references('curso_id')
                ->on('cursos');

                $table->foreign('disciplina_id')
                ->references('disciplina_id')
                ->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
