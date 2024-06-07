<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->integer('id_estudiante')->primary();
            $table->string('nombre', 30)->nullable();
            $table->string('apellido', 30)->nullable();
            $table->string('Codigo', 8)->nullable();
            $table->integer('id_tutor')->nullable();
            $table->integer('id_curso')->nullable();

            $table->foreign('id_tutor')->references('id_tutor')->on('tutor')->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
