<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name',191)->unique();
            $table->string('brand_code',191)->nullable();
            $table->string('brand_address',191)->nullable();
            $table->string('brand_image',191)->nullable();
            $table->string('brand_code_postal',20)->nullable();
            $table->string('brand_telefono',20)->nullable();
            $table->string('brand_email',191)->nullable();
            $table->string('brand_web',191)->nullable();
            $table->string('brand_code_distrito',10)->nullable();
            $table->string('brand_code_provincia',10)->nullable();
            $table->string('brand_code_departamento',10)->nullable();
            $table->string('brand_ubigeo',10)->nullable();
            $table->boolean('brand_estado')->default(1);
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
        Schema::dropIfExists('marcas');
    }
}
