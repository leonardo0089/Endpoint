<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Views extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin');
    }

    public function listaProducts()
    {
        return view('actions.listar-produtos');
    }
    public function listaClientes()
    {
        return view('actions.listar-clientes');
    }
    public function editData()
    {
        return view('actions.editar-dados');
    }


}
