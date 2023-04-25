<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContato;

use App\Mail\ContatoEmail;
use Illuminate\Support\Facades\Mail;


class FormularioController extends Controller
{

    public function envioContato(FormContato $dados)
    {

//      Mail::to($dados->emailContato, $dados->nomeContato)->send(new ContatoEmail($dados));
        Mail::to('contato@centroesotericodonamorgana.com.br', 'Formulário de contato')->send(new ContatoEmail($dados));

        if(!Mail::failures()){
            return back()->with('SucessoContato', 'Email enviao com Sucesso!');
        }else{
            return back()->with('Falhou', 'Email não enviado');
        }

    }



}
