<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entidade extends Model
{

    protected  $table = 'tb_entidade';
    protected  $guarded = 'id';
    protected $fillable = [
                            'tx_nm_entidade',
                            'nr_cnpj',
                            'id_tipo_entidade',
                            'nr_latitude',
                            'nr_longitude',
                            'tp_status',
                            'id_entidade_vinculada',
                            'id_representante',
                            'tx_email',
                            'nr_telefone_fixo',
                            'nr_telefone_celular',
                            'tx_logradouro',
                            'tx_bairro',
                            'nr_cep',
                            'id_cidade'

                           ];


    public function denuncias(): HasMany
    {
        return $this->hasMany(Denuncia::class);
    }

    public function tipoEntidade(): BelongsTo
    {
        return $this->belongsTo(TipoEntidade::class);
    }

    public function entidadeVinculada(): HasMany
    {
        return $this->hasMany(Entidade::class);
    }

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }

    public function representante(): BelongsTo
    {
        return $this->belongsTo(Representante::class);
    }
}
