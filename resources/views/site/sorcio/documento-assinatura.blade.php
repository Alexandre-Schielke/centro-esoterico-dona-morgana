@extends('site.template')
@section('conteudo')
    <nav class="float-left nav-interno">
        <div class="container pt-3 pb-3">
            <i class="fas fa-tag"></i> Você esta em <a href="./">Home</a> /
            <a href="#">Assinatura Associado</a>
        </div>
    </nav>

    <main role="main" class="pt-5 pb-5 float-left" style="width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-2 col-md-2">
                    <h1 class="bg-dark pt-2 pb-2 text-center text-white">Menu</h1>
                    <ul>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.painel') }}"><i class="fas fa-user-edit"></i> Editar Dados</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.documentos') }}"><i class="fas fa-file-alt"></i> Documentos</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.documentos.assinatura') }}"><i class="fas fa-portrait"></i> Assinatura</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-10 col-xl-10">
                    <div class="row">
                        <div class="col-sm-12  col-md-12 col-xl-12 mb-5">
                            <span class="text-danger">OBS: não é possível editar esses dados por motivos de segurança, caso deseje atualizar seus dados entre em contato</span><br/>
                        </div>
                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Razão Social:</span><br/>
                            {{ $arquivo->razao_social }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Nome Fantasia:</span><br/>
                            {{ $arquivo->nome_fantasia }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>CNPJ:</span><br/>
                            {{ $arquivo->CNPJ }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Número do endereço:</span><br/>
                            {{ $arquivo->numero }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6">
                            <span>Bairro:</span><br/>
                            {{ $arquivo->bairro }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Cidade:</span><br/>
                            {{ $arquivo->cidade }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>CEP:</span><br/>
                            {{ $arquivo->cep }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>País:</span><br/>
                            {{ $arquivo->pais }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Telefone:</span><br/>
                            {{ $arquivo->telefone }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Inscrição estadual:</span><br/>
                            {{ $arquivo->inscricao_estadual }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Registro junta comercial:</span><br/>
                            {{ $arquivo->rg_junta_comercial }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Inscrição ANP:</span><br/>
                            {{ $arquivo->inscricao_anp }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Atividade sobre bandeira:</span><br/>
                            {{ $arquivo->atividade_bandeira }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Base de estabelecimento:</span><br/>
                        {{ $arquivo->base_estabelecimento }}
                        </div>

                        <div class="col-sm-12  col-md-12 col-xl-12 mb-5">
                            <span>Mensagem:</span><br/>
                            {{ $arquivo->mensagem }}
                        </div>

                        <div class="col-sm-12  col-md-6 col-xl-6 mb-5">
                            <span>Data do cadastro:</span><br/>
                            {{ $arquivo->created_at }}
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </main>
@stop
