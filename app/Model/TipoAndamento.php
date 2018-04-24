<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoAndamento extends Model
{
    private $id;
    private $status;

    public function andamentos():OneToMany //Um tipo pode estar em vários andamentos
    {
        return $this->hasMany('App/Model/Andamento');
    }
}
