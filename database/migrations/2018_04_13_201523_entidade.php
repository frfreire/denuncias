<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entidade extends Migration
{
    public function up()
    {
        Schema::create('tb_entidade', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cnpj');
            $table->string('tipo');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status');
            $table->string('entidade_vinculada');
            $table->string('representante');
            $table->string('email');
            $table->string('telefone_fixo');
            $table->string('telefone_celular');
            $table->string('endereco');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_entidade');
    }
}
