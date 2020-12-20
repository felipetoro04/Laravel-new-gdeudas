<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idTipoDoc')->constrained('parametros');
            $table->string('numeroDoc');
            $table->string('nombre');
            $table->foreignId('idTipoSex')->constrained('parametros');
            $table->integer('edad');
            $table->string('email');
            $table->string('contrasenia');
            $table->foreignId('idPerfil')->constrained('perfil');
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
        Schema::dropIfExists('usuarios');
    }
}
