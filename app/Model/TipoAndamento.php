<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoAndamento extends Model
{
    protected $table = 'tb_tipo_andamento';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_nm_providencia'
    ];

    public function andamentos():HasMany
    {
        return $this->hasMany(Andamento::class);
    }
}
