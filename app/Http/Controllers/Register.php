<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Http\Requests\ApiRequest;
class Register extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiRequest $request)
    {

        $user = new User();

        $stats = $this->takeaCv($request);

        if($stats == false)
        {
            return response()->json(
                [
                    'Msg' => "Arquivo não é do tipo adequado ou está vazio"
                ],400);
        }else if(!is_bool($stats))
        {
            $user->nome = $request->get('nome');
            $user->email = $request->get('email');
            $user->senha = bcrypt($request->get('senha'));
            $user->ip = $this->ipClient($request);
            $user->endereco = $request->endereco;
            $user->telefone = $request->telefone;
            $user->curriculo = $stats;
    
            $status = $user->save();
        }

        if($status)
        {
            return response()->json(
                [
                    'Msg' => "Cadastrado com sucesso"
                ],200);
        }
            return response()->json(
                [
                    'Msg' => "Erro ao cadastrar"
                ],404);

        
    }


    private function ipClient(Request $request)
    {
        $ip_cliente = $request->ip();
        return $ip_cliente;
    }


    private function takeaCv(Request $request)
    {
        $file = $request->file()['curriculo'];
        $name = uniqid(date('HisYmd'));
        $extension = $request->curriculo->extension();
        $nameFile = "{$name}.{$extension}";

            $input = [
            'file' => $file
            ];

            $arq = $file->getMimeType();

            if($arq == "application/pdf" 
            || $arq == "text/plain" 
            || $arq == "inode/x-empty" 
            || $arq == "application/msword"
            || $arq == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            )
            {
            
                $path = $file->store('curriculos');
                
                $upload = $file->storeAs('curriculos', $nameFile, 'novoCaminho');
                return $path;    
            }

            return false;
    }
}
