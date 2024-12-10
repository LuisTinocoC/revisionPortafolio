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
        Schema::create('academics', function (Blueprint $table) {
            $table->id();

            //Relación con tabla Docente(professors)
            $table->foreignId('professor_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // Relación con tabla Semestre(semesters)
            $table->foreignId('semester_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // Relación con tabla Curso(courses)
            $table->foreignId('course_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // Relación con tabla Malla(curriculums)
            $table->foreignId('curricula_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // Relación con tabla Portafolio(portfolios)
            $table->foreignId('portfolio_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
