<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Uf extends Model
{
    protected $table = 'tb_uf';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_sg_uf',
        'tx_nm_uf',
    ];

    public function cidades(): HasMany
    {
        return $this->hasMany(Cidade::class);
    }
}
