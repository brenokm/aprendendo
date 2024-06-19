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
        Schema::create('professores', function (Blueprint $table) {
            $table->id('professor_id')->primary()->unique();
            $table->string('professor_nome');
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('usuario_id')
                ->on('usuarios');
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
        Schema::dropIfExists('professores');
    }
};
