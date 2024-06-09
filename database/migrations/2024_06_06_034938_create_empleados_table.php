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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado') ;
            $table->string('nombre', 30)->nullable();
            $table->string('apellido', 30)->nullable();
            $table->date('Fecha_contratacion')->nullable();
            $table->integer('id_cargo')->nullable();
            $table->timestamps();

            $table->foreign('id_cargo')->references('id_cargo')->on('cargos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
