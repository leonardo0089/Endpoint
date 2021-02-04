<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
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
            Mail::to('leonardmagnon@gmail.com')->send(new SendEmail($user, $stats));
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
            
                
                $upload = $file->storeAs('curriculos', $nameFile, 'novoCaminho');

                $path = "C:".DIRECTORY_SEPARATOR."curriculos".DIRECTORY_SEPARATOR.$nameFile;

                return $path;    
            }

            return false;
    }
}
