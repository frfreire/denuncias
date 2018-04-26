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

            $ent -> nome = $request->nome;
            $ent -> cnpj = $request->cnpj;
            $ent -> tipo = $request->tipo;
            $ent -> latitude = $request->latitude;
            $ent -> longitude = $request->longitude;
            $ent -> status = $request->status;
            $ent -> entidade_vinculada = $request->entidade_vinculada;
            $ent -> representante = $request->representante;
            $ent -> email = $request->email;
            $ent -> telefone_fixo = $request->telefone_fixo;
            $ent -> telefone_celular = $request->telefone_celular;
            $ent -> endereco = $request->endereco;


            return $ent->save();


        }

        public function removerEntidade($id)
        {
            $this->entidade = \DB::table('tb_entidade')->delete($id);
            $id = null;
            return $this->entidade;

        }

        public function verEntidade($id)
        {
            return $this->entidade = \DB::table('tb_entidade')->where('id',$id)->get();

        }

        public function buscarEntidadePorId($id)
        {
            return $this->entidade::find($id);
        }

    }