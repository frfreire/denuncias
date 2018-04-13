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



    public function create()
    {
        return $this->ajusteCondutaService->cadastrarAjusteConduta();
    }

    public function update()
    {
        return $this->ajusteCondutaService->atualizarAjusteConduta();
    }

    public function delete()
    {
        return $this->ajusteCondutaService->removerAjusteConduta();
    }

    public function read()
    {
        return $this->ajusteCondutaService->verAjusteConduta();
    }

}
