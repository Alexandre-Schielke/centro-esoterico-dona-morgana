<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class FormUpdateUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'email'             => 'required|email',
            'emailSecundario'   => 'nullable|email',
            'nascimento'        => 'nullable|min:10',
            'cpf'               => 'nullable|min:14',
            'telefone'          => 'nullable|min:15',
            'telefoneSecundario' => 'nullable|min:15',
            'sexo'              => 'min:1|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'nomePai'           => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'nomeMae'           => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estadoCivil'       => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'nacionalidade'     => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'orgaoExpeditor'    => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cargo'             => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'numero'            => 'nullable|min:1',
            'rua'               => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'bairro'            => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cidade'            => 'nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep'               => 'nullable|min:9',
            'estado'            => 'nullable|min:2',

        ];
    }


    public function messages()
    {

        return [
            'name.required'         => 'Campo nome obrigatório',
            'name.regex'            => 'Campo nome inválido',
            'email.required'        => 'Campo email obrigatório',
            'email.email'           => 'Campo email inválido',
            'emailSecundario.email' => 'Campo email inválido',
            'nascimento.min'        => 'Campo nascimento inválido',
            'cpf.min'               => 'Campo cpf inválido',
            'telefone.min'          => 'Campo telefone inválido',
            'telefoneSecundario.min' => 'Campo telefone secundário inválido',
            'sexo.required'         => 'Campo sexo obrigatório',
            'nomePai.regex'         => 'Campo Nome do pai inválido',
            'nomeMae.regex'         => 'Campo Nome da mãe inválido',
            'estadoCivil.regex'     => 'Campo Estado Civil   inválido',
            'nacionalidade.regex'   => 'Campo Nacionalidade inválido',
            'orgaoExpeditor.regex'  => 'Campo Orgão Expeditor inválido',
            'cargo.regex'           => 'Campo cargo inválido',
            'numero.numeric'        => 'Campo número aceita valores numericos',
            'rua.regex'             => 'Campo rua inválido',
            'bairro.regex'          => 'Campo bairro inválido',
            'cidade.regex'          => 'Campo cidade inválido',
            'cep.min'               => 'Campo cep inválido',
            'estado.min'            => 'Campo estado inválido',
        ];

    }

}
