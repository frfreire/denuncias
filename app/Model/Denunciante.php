<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Denunciante extends Model
{
    protected $table = 'tb_denunciante';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_nm_denunciante',
        'nr_ip',
        'tx_email_denunciante',
        'nr_telefone_contato',
        'tx_logradouro_residencia',
        'tx_bairro_residencia',
        'id_cidade_residencia',
        'nr_cep_residencia'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }

    public function denuncias(): HasMany
    {
        return $this->hasMany(Denuncia::class);
    }
}
