<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'tb_representante';

    protected $primaryKey = 'id';
    protected $fillable = [
        'tx_nm_representante',
        'tx_nr_cpf'
    ];
}
