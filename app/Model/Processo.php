<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    private $id;
    public $numeroProcesso;
    public $posicao;
    public $observacao;

    public function andamento():OneToMany // Um processo tem muitos Andamentos
    {
        return $this->hasMany('App/Model/Andamento');
    }

    public function entidade():ManyToOne // Muitos processos em uma Entidade
    {
        return $this->hasMany('App/Model/Entidade');
    }

}
