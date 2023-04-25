<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContato extends FormRequest
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
        'nomeContato' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
        'emailContato' => 'required_with:remailContato|email|regex:/^.+@.+$/i|same:remailContato',
        'remailContato' => 'required|email|regex:/^.+@.+$/i',
        'assuntoContato' => 'required',
        'telContato' => 'required|min:15',
        'mensagemContato' => 'required|min:30'

            //
        ];

    }

    public function messages()
    {

        return [
            'nomeContato.required' => 'Campo nome Obrigatorio',
            'nomeContato.regex' => 'Campo nome com formato inválido',
            'emailContato.required' => 'campo Email Obrigatório',
            'emailContato.regex' => 'campo Email com formato inválido',
            'remailContato.regex' => 'campo repetir email com formato inválido',
            'remailContato.required' => 'campo repetir email Obrigatório',
            'telContato.required' => 'Campo Telefone obrigatório',
            'telContato.min' => 'Número de telefone inválido',
            'assuntoContato.required' => 'Campo assunto obrigatório',
            'mensagemContato.required' => 'Campo mensagem obrigatório',
            'mensagemContato.min' => 'Mensagem muito curta, mínimo 30 caracter'
        ];

    }
    // 'name' => 'required|min:3|max:50',
}
