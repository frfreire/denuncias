<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AndamentoService;

class AndamentoController extends Controller
{
    protected $andamentoService;
    /**
     * AndamentoController constructor.
     */
    public function __construct(AndamentoService $andamentoService)
    {
        $this->andamentoService = $andamentoService;
    }

    public function create()
    {
        return $this->andamentoService->cadastrarAndamento();
    }

    public function update()
    {
        return $this->andamentoService->atualizarAndamento();
    }

    public function delete()
    {
        return $this->andamentoService->removerAndamento();
    }

    public function read()
    {
        return $this->andamentoService->verAndamento();
    }
}
