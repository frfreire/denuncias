<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_denunciante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tx_nm_denunciante', 100);
            $table->string('nr_ip', 50);
            $table->string('tx_email_denunciante',100);
            $table->string('nr_telefone_contato', 20);
            $table->string('tx_logradouro_residencia', 100);
            $table->string('tx_bairro_residencia', 50);
            $table->integer('id_cidade_residencia');
            $table->string('nr_cep_residencia',15);
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
        Schema::dropIfExists('tb_denunciante');
    }
}
