<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{


    /**
     * DenunciaController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {

    }

    public function cadastrar()
    {
        return view('denuncia/cadastrar');
    }
}
