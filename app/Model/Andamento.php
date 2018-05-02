<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Andamento extends Model
{
    protected $table = 'tb_andamento';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_descricao_andamento',
        'id_tipo_andamento',
        'id_denuncia',
        'id_responsavel',
        'dt_registro_andamento'
    ];

    public function tipoAndamento(): BelongsTo
    {
        return $this->belongsTo(TipoAndamento::class);
    }

    public function responsavel(): HasOne
    {
        return $this->hasOne(Responsavel::class);
    }

    public function denuncia(): HasOne
    {
        return $this->hasOne(Denuncia::class);
    }
}
