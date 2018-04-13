<?php

namespace App\Http\Controllers;

use App\Service\EntidadeService;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{

    protected $entidadeService;

    public function __construct(EntidadeService $entidadeService)
    {
        $this->entidadeService = $entidadeService;

    }

    public function create()
    {
        return $this->entidadeService->cadastrarEntidade();
    }

    public function update()
    {
        return $this->entidadeService->atualizarEntidade();
    }

    public function delete()
    {
        return $this->entidadeService->removerEntidade();
    }

    public function read()
    {
        return $this->entidadeService->verEntidade();
    }

}
