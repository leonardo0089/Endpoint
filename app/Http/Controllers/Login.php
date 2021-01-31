<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function login(Request $req)
    {
        $email = $req->email;
        $senha = $req->senha;

        $usuario = User::where('email', $email)->first();

        if($usuario && Hash::check($senha, $usuario->senha))
        {
            Auth::login($usuario);
            return redirect()->route('admin.admin');
        }
        return redirect()->back()->withErrors('Erro ao tentar logar');
    }
}
