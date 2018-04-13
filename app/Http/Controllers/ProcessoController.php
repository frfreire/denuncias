<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ProcessoService;

class ProcessoController extends Controller
{
    protected $processoService;

    public function __construct(ProcessoService $processoService)
    {
        $this->processoService = $processoService;
    }

    public function create()
    {
        return $this->processoService->cadastrarProcesso();
    }

    public function update()
    {
        return $this->processoService->utualizarProcesso();
    }

    public function delete()
    {
        return $this->processoService->removerProcesso();
    }

    public function read()
    {
        return $this->processoService->verProcesso();
    }

}
