<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{

    protected  $table = 'tb_entidade';
    protected  $guarded = ['id'];
    protected $fillable = [
                            'nome',
                            'cnpj',
                            'tipo',
                            'latitude',
                            'longitude',
                            'status',
                            'entidade_vinculada',
                            'representante',
                            'email',
                            'telefone_fixo',
                            'telefone_celular',
                            'endereco'
                           ];


    public function processos():OneToMany // Uma entidade pode ter muitos processos
    {
        return $this->hasMany('App/Model/Processo');
    }
}
