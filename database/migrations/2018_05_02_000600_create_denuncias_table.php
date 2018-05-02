<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('tx_descricao_fato');
            $table->integer('id_tipo_denuncia');
            $table->string('tx_nm_envolvido', 255)->nullable();
            $table->string('tx_funcao_envolvido', 100)->nullable();
            $table->string('tx_local_ocorrencia', 100)->nullable();
            $table->string('tx_empresa_denunciada', 100)->nullable();
            $table->integer('id_cidade_ocorrencia')->nullable();
            $table->integer('id_denunciante');
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
        Schema::dropIfExists('tb_denuncia');
    }
}
