<?php

namespace App\Model;

use App\Model\Entidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TipoEntidade extends Model
{
    protected $table = 'tb_tipo_entidade';

    protected $primaryKey = 'id';
    protected $fillable = [
        'sg_tipo_entidade',
        'nm_tipo_entidade',
    ];

    public function entidades(): BelongsToMany
    {
        return $this->belongsToMany(Entidade::class);
    }


}
