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
            $table->string('tx_nm_entidade', 50);
            $table->string('tx_sg_entidade', 15);
            $table->string('nr_cnpj', 20)->nullable();
            $table->string('id_tipo_entidade');
            $table->string('nr_latitude', 30)->nullable();
            $table->string('nr_longitude', 30)->nullable();
            $table->integer('tp_status');
            $table->integer('id_entidade_vinculada')->nullable();
            $table->string('id_representante')->nullable();
            $table->string('tx_email')->nullable();
            $table->string('nr_telefone_fixo')->nullable();
            $table->string('nr_telefone_celular')->nullable();
            $table->string('tx_logradouro')->nullable();
            $table->string('tx_bairro')->nullable();
            $table->string('nr_cep')->nullable();
            $table->integer('id_cidade')->nullable();
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
