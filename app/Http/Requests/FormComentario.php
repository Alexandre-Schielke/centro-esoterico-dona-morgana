<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FormComentario extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        // dd('ok');

        return [
            'nome' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'email' => 'required|email|regex:/^.+@.+$/i',
            'comentario' => 'required'
        ];
    }

    public function messages()
    {

        return [
            'nome.required' => 'Campo nome Obrigatorio',
            'nome.regex' => 'Campo nome com formato inválido',
            'email.required' => 'campo Email Obrigatório',
            'email.regex' => 'campo Email com formato inválido',
            'comentario.required' => 'campo comentário Obrigatório'
        ];

    }

}
