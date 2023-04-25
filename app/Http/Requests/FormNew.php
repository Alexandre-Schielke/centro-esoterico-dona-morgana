<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FormNew extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        // dd('ok');

        return [
            'razaoSocial' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'nomeFantasia' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cnpj' => 'required|min:18',
            'email' => 'required_with:remail|email|regex:/^.+@.+$/i|same:remail',
            'remail' => 'required|email|regex:/^.+@.+$/i',
//            'senha' => 'required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'senha' => 'required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/',
            'resenha' => 'required|min:6|same:senha',
            'numero' => 'required',
            'cidade' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep' => 'required|min:9',
            'telefone' => 'required|min:15',
            'inscricaoEstadual' => 'required',
            'registroJuntaComercial' => 'required',
            'inscricaoAnp' => 'required',
            'atividadeSobreBandeira' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'baseEstabelecimento' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'mensagem' => 'required|min:15',

            'nomePj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'nacionalidadePj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estadoCivilPj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'rgPj' => 'required|numeric',
            'orgaoExpeditorPj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'dataNascimentoPj' => 'required||min:10',
            'cpfPj' => 'required|min:14',
            'numeroPj' => 'required',
            'cidadePj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estadoPj' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cepPj' => 'required|min:9',
            'telefonePj' => 'required|min:15'
        ];
    }

    public function messages()
    {


        //Minimum eight characters, at least one letter and one number:
        //
        //"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
        //
        //Minimum eight characters, at least one letter, one number and one special character:
        //
        //"^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
        //
        //Minimum eight characters, at least one uppercase letter, one lowercase letter and one number:
        //
        //"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
        //
        //Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:
        //
        //"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
        //
        //Minimum eight and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character:
        //
        //"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$"



        return [
            'razaoSocial.required'  => 'Campo Razão Social Obrigatório',
            'razaoSocial.regex'     => 'Campo Razão Social com formato inválido',
            'nomeFantasia.required' => 'Campo Nome Fantasia Obrigatório',
            'nomeFantasia.regex'    => 'Campo Nome Fantasia com formato inválido',
            'email.required'        => 'campo Email Obrigatório',
            'email.regex'           => 'campo Email com formato inválido',
            'senha.required'        => 'campo Senha Obrigatório',
            'senha.regex'           => 'campo Senha com formato inválido ( Mínimo de 6 caracteres, pelo menos uma letra, um número e um caractere especial)',
            'numero.required'       => 'Campo Número Obrigatório',
            'cidade.required'       => 'Campo Cidade Obrigatório',
            'cidade.regex'          => 'Campo Cidade com formato inválido',
            'estado.required'       => 'Campo Estado Obrigatório',
            'estado.regex'          => 'Campo Estado com formato inválido',
            'cep.required'          => 'Campo cep Obrigatório',
            'cep.regex'             => 'Campo cep com formato inválido',
            'telefone.min'          => 'Campo CEP Deve Conter no Mínimo 9 Caracteres ',
            'telefone.required'     => 'Campo Telefone Obrigatório',
            'telefone.min'          => 'Campo Telefone Deve Conter no Mínimo 15 Caracteres ',
            'inscricaoEstadual.required' => 'Campo Inscrição Estadual Obrigatório',
            'registroJuntaComercial.required' => 'Campo Registro Junta Comercial Obrigatório',
            'inscricaoAnp.required'  => 'Campo Inscrição ANP Obrigatório',
            'atividadeSobreBandeira.required' => 'Campo Atividade Sobre Bandeira Obrigatório',
            'atividadeSobreBandeira.regex'    => 'Campo Atividade Sobre Bandeira com formato inválido',
            'baseEstabelecimento.required'    => 'Campo Base Estabelecimento Obrigatório',
            'baseEstabelecimento.regex' => 'Campo  Base Estabelecimento com formato inválido',
            'mensagem.required'         => 'Campo Mensagem Obrigatório',
            'mensagem.min'            => 'Campo Mensagem Deve conter no mínimo 15 caracteres ',

            'nomePj.required'  => 'Campo Nome do Sócio Obrigatório',
            'nomePj.regex'     => 'Campo Nome do Sócio  com formato inválido',
            'nacionalidadePj.required'  => 'Campo Nacionalidade do Sócio Obrigatório',
            'nacionalidadePj.regex'     => 'Campo Nacionalidade do Sócio com formato inválido',
            'estadoCivilPj.required'  => 'Campo Esatdo Cívil Obrigatório',
            'estadoCivilPj.regex'     => 'Campo Esatdo Cívil com formato inválido',
            'rgPj.required'  => 'Campo RG Obrigatório',
            'rgPj.numeric'     => 'Campo RG Com Formato Inválido',
            'orgaoExpeditorPj.required'  => 'Campo Orgão Expeditor Obrigatório',
            'orgaoExpeditorPj.regex'     => 'Campo Orgão Expeditor com formato inválido',
            'dataNascimentoPj.required'  => 'Campo Nascimento do Sócio Obrigatório',
            'dataNascimentoPj.min'     => 'Campo Nascimento do Sócio com Formato Inválido',
            'cpfPj.required'  => 'Campo CPF do Sócio Obrigatório',
            'cpfPj.min'     => 'Campo CPF do Sócio com Formato Inválido',
            'numeroPj.required'  => 'Campo Número do Sócio Obrigatório',
            'cidadePj.required'  => 'Campo Cidade do Sócio Obrigatório',
            'cidadePj.regex'     => 'Campo Cidade do Sócio com formato inválido',
            'estadoPj.required'  => 'Campo Estado do Sócio Obrigatório',
            'esatdoPj.regex'     => 'Campo Estado do Sócio com formato inválido',
            'cepPj.required'  => 'Campo CEP do Sócio Obrigatório',
            'cepPj.min'     => 'Campo CEP do Sócio com formato inválido',
            'telefonePj.required'  => 'Campo Telefone do Sócio Obrigatório',
            'telefonePj.min'     => 'Campo Telefone do Sócio com formato inválido'
        ];

    }

}
