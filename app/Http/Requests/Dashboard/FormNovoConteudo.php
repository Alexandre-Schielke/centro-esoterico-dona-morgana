<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;


class FormNovoConteudo extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        // dd('ok');

        return [
            'conteudo_categoria_id' => 'required',
//            'titulo' => 'required|max:100|conteudounico',
            'titulo' => 'required|max:100',
            //'autor' => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$',
            'descricao' => 'required|max:200',
            'conteudo' => 'required|min:100',
            'restrito' => 'required',
            'ativo' => 'required'
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }

    public function messages()
    {

        return [
            'conteudo_categoria_id.require' => 'Campo categoria obrigatório',
            'titulo.required' => 'Campo Título Obrigatório',
            'titulo.max' => 'Campo título muito grande (maxímo 100 caracteres)',
            'autor.regex' => 'Campo autor formato inválido',
            'descricao.required' => 'Campo Descrição Obrigatório',
            'descricao.max' => 'Campo Descrição pode ter no maxímo 200 caracteres',
            'conteudo.required' => 'Campo Conteúdo Obrigatório',
            'conteudo.min' => 'Campo Conteúdo tem que ter no mínimo 100 caracteres',
            'restrito.required' => 'Campo Restrito Obrigatório',
            'ativo.required' => 'Campo Ativo Obrigatório'
        ];

    }

}
