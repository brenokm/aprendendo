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
        Schema::create('disciplina_cursos', function (Blueprint $table) {
            $table->id('disciplina_curso_id')->primary()->unique();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();

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
        Schema::dropIfExists('disciplina_cursos');
    }
};
