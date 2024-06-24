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
        Schema::create('criancas', function (Blueprint $table) {
            $table->id('crianca_id')->primary()->unique();
            $table->string('crianca_nome');
            $table->string('crianca_responsavel');
            $table->unsignedBigInteger('turma_id');
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
        Schema::dropIfExists('criancas');
    }
};
