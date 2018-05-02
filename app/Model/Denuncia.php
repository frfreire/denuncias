<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Denuncia extends Model
{
    protected $table = 'tb_denuncia';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_descricao_fato',
        'id_tipo_denuncia',
        'tx_nm_envolvido',
        'tx_funcao_envolvido',
        'tx_local_ocorrencia',
        'tx_empresa_denunciada',
        'dt_inicio_analise',
        'dt_fim_analise',
        'id_cidade_ocorrencia',
        'id_denunciante',
        'id_entidade'
    ];

    public function tipoDenuncia(): BelongsTo
    {
        return $this->belongsTo(TipoDenuncia::class);
    }

    public function denunciante(): BelongsTo
    {
        return $this->belongsTo(Denunciante::class);
    }

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }

    public function evidencias(): HasMany
    {
        return $this->hasMany(Evidencia::class);
    }

    public function entidadeDenunciada(): BelongsTo
    {
        return $this->belongsTo(Entidade::class);
    }
}
