<?php
    /**
     * Created by PhpStorm.
     * User: Douglas
     * Date: 12/04/2018
     * Time: 23:26
     */

    namespace App\Service;


    use App\Http\Controllers\EntidadeController;
    use App\Model\Entidade;
    use Illuminate\Http\Request;


    class EntidadeService
    {
        private $entidade;
        private $table;


        public function __construct(Entidade $entidade)
        {
            $this->entidade = $entidade;


        }

        public function cadastrarEntidade($entidade)
        {

            return $this->entidade::create(
                [
                    'nome' => $entidade->nome,
                    'cnpj' => $entidade->cnpj,
                    'tipo' => $entidade->tipo,
                    'latitude' => $entidade->latitude,
                    'longitude' => $entidade->longitude,
                    'status' => $entidade->status,
                    'entidade_vinculada' => $entidade->entidade_vinculada,
                    'representante' => $entidade->representante,
                    'email' => $entidade->email,
                    'telefone_fixo' => $entidade->telefone_fixo,
                    'telefone_celular' => $entidade->telefone_celular,
                    'endereco' => $entidade->endereco

                ]);
        }

        public function atualizarEntidade($request)
        {

            $ent = $this->entidade::find($request->id);



            $ent -> nome = 'nome';
            $ent -> cnpj = 'cnpj';
            $ent -> tipo = 'tipo';
            $ent -> latitude = 'latitude';
            $ent -> longitude = 'longitude';
            $ent -> status = 'status';
            $ent -> entidade_vinculada = 'entidade_vinculada';
            $ent -> representante = 'representante';
            $ent -> email = 'email';
            $ent -> telefone_fixo = 'telefone_fixo';
            $ent -> telefone_celular = 'telefone_celular';
            $ent -> endereco = 'endereco';


            return $ent->save();


        }

        public function removerEntidade($id)
        {
            return $this->entidade = \DB::table('tb_entidade')->delete($id);

        }

        public function verEntidade($entidade)
        {
            $this->entidade = \DB::table('tb_entidade')->where('entidade','nome')->get();
            return 'Teste';
        }

        public function buscarEntidadePorId($id)
        {
            return $this->entidade::find($id);
        }

    }