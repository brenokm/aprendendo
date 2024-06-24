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
            $table->unsignedBigInteger('funcionario_id');
            $table->timestamps();

            $table->foreign('funcionario_id')
            ->references('funcionario_id')
            ->on('funcionarios');     
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
