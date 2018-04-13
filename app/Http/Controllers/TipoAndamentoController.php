<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\TipoAndamentoService;

class TipoAndamentoController extends Controller
{
    protected $tipoAndamentoService;

    /**
     * TipoAndamentoController constructor.
     * @param $tipoAndamentoService
     */
    public function __construct(TipoAndamentoService $tipoAndamentoService)
    {
        $this->tipoAndamentoService = $tipoAndamentoService;
    }

    public function create()
    {
        return $this->tipoAndamentoService->cadastrarTipoAndamento();
    }

    public function update()
    {
        return $this->tipoAndamentoService->atualizarTipoAndamento();
    }

    public function delete()
    {
        return $this->tipoAndamentoService->removerTipoAndamento();
    }

    public function read()
    {
        return $this->tipoAndamentoService->verTipoAndamento();
    }


}
