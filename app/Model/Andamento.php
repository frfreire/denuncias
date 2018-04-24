<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Andamento extends Model
{
    private $id;
    private $id_processo;
    private $id_tipoAndamento;

    public function tiposAndamento():ManyToOne // Muitos andamentos possui um tipo de andamento
    {
        return $this->hasMany('App/Model/TipoAndamento');
    }
    public function processo():ManyToOne  //Muitos andamento em um processos
    {
        return $this->hasMany('App/Model/Processo');
    }
}
