<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipo_denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tx_descricao_denuncia',255);
            $table->string('tx_nm_denuncia',30)->unique();
            $table->boolean('tp_situacao_denuncia')->default(true);
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
        Schema::dropIfExists('tb_tipo_denuncia');
    }
}
