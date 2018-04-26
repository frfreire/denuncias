<?php

namespace App\Http\Controllers;

use App\Model\Entidade;
use App\Service\EntidadeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EntidadeController extends Controller
{

    protected $entidadeService;
    protected $criar;
    protected $ver;

    public function __construct(EntidadeService $entidadeService)
    {
        $this->entidadeService = $entidadeService;

    }
    public function index(){
        //$criar = Entidade::get();
        $entidades = Entidade::get();
        return view('entidade.entidade', compact('entidades',$entidades));
    }

    public function cadastrar()
    {
        return view('entidade.cadastrar');

    }

    public function editar($id)
    {
        $ent = $this->entidadeService->buscarEntidadePorId($id);

        return view('entidade.editar')->with('entidade',$ent);
    }

    public function update(Request $request)
    {
        
        $this->entidadeService->atualizarEntidade($request);
        return redirect()->route('entidade');
    }

    public function create(Request $request)
    {
        $this->entidadeService->cadastrarEntidade($request);
        return redirect(route('entidade'));
    }




    public function delete($id)
    {
        $this->entidadeService->removerEntidade($id);
        return redirect(route('entidade'));
    }

    public function read($id)
    {

        $ver = $this->entidadeService->verEntidade($id);
        return view('entidade.visualizar') ->with('ver',$ver);
    }

    public function show()
    {
        echo "Passou aqui!!!!";
    }


}
