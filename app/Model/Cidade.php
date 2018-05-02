<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cidade extends Model
{
    protected $table = 'tb_cidade';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_sg_cidade',
        'tx_nm_cidade',
        'id_uf'
    ];

    public function uf(): BelongsTo
    {
        return $this->belongsTo(Uf::class);
    }

    public function denuncias(): HasMany
    {
        return $this->hasMany(Denuncia::class);
    }
}
