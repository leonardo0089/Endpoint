<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Cadastro extends Controller
{
    public function cadastro(Request $request)
    {
        $user = new User();

        $user->nome = $request->get('nome');
        $user->email = $request->get('email');
        $user->senha = bcrypt($request->get('senha'));
        $status = $user->save();

        if($status)
        {
            return redirect()->route('inicial')->with('sucesso', 'Usuario cadastrado com sucesso !');
        }
        return redirect()->back()->withErrors('Erro ao cadastrar novo usuario !');

    }

}
