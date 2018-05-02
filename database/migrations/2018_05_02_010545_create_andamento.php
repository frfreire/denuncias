<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_andamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tx_descricao_andamento', 255);
            $table->integer('id_tipo_andamento');
            $table->integer('id_denuncia');
            $table->integer('id_responsavel');
            $table->date('dt_registro_andamento');
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
        Schema::dropIfExists('tb_andamento');
    }
}
