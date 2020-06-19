<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('per_nro_documento');
            $table->integer('per_tipo_documento');
            $table->integer('per_tipo_genero');
            $table->integer('per_primer_nombre');
            $table->integer('per_segunto_nombre');
            $table->integer('per_primer_apellido');
            $table->integer('per_segundo_apellido');
            $table->integer('per_fecha_nacimiento');
            $table->integer('per_direccion');
            $table->integer('per_correo');
            $table->integer('per_principal_telefono');
            $table->integer('per_secundario_telefono');
            $table->integer('per_ubieo');
            $table->integer('per_imagen');
            $table->integer('per_nacionalidad');
            $table->integer('per_grado_instruccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
