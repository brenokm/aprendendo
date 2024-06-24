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
            $table->unsignedBigInteger('professor_id');
            $table->timestamps();

            $table->foreign('professor_id')
            ->references('professor_id')
            ->on('professores');     
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
