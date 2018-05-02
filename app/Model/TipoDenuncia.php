<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoDenuncia extends Model
{

    protected $table = 'tb_tipo_denuncia';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_descricao_denuncia',
        'tx_nm_denuncia',
        'tp_situacao_denuncia',
    ];

    public function denuncias(): HasMany
    {
        return $this->hasMany(Denuncia::class);
    }
}
