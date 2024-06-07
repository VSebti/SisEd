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
        Schema::create('pagos_empleado', function (Blueprint $table) {
            $table->integer('id_pago')->primary();
            $table->integer('id_empleado')->nullable();
            $table->decimal('monto', 8, 2)->nullable();
            $table->date('fecha_pago')->nullable();

            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos_empleado');
    }
};
