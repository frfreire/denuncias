<?php

namespace App\Http\Controllers;

use App\Service\AjusteCondutaService;
use Illuminate\Http\Request;

class AjusteCondutaController extends Controller
{

    protected $ajusteCondutaService;

    /**
     * AjusteCondutaController constructor.
     * @param $ajusteCondutaService
     */
    public function __construct(AjusteCondutaService $ajusteCondutaService)
    {
        $this->ajusteCondutaService = $ajusteCondutaService;

    }


    public function index()
    {
        return 'Passou aqui';
    }

    public function create()
    {
        return $this->ajusteCondutaService->cadastrarAjusteConduta();

    }

    public function udpadte(){

        return->$this->ajusteCondutaService->atualizarAjusteConduta();

    }

    public function delete(){

    }

    public function read(){

    }

}
