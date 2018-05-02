<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    protected  $table = 'tb_evidencia';
    protected  $guarded = 'id';
    protected $fillable = [
        'id_tipo_evidencia',
        'tx_caminho_arquivo'

    ];
}
