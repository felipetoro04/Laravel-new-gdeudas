<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idInstitucion')->constrained('institucion');
            $table->string('numeroBoleta');                           
            $table->date('fechaEmision');
            $table->date('fechaVencimiento');
            $table->integer('montoPagar');
            $table->foreignId('idEstado')->constrained('parametros');
            $table->foreignId('idUsuario')->constrained('usuarios');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('boletas');
    }
}