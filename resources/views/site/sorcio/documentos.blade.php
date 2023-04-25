@extends('site.template')
@section('conteudo')
    <nav class="float-left nav-interno">
        <div class="container pt-3 pb-3">
            <i class="fas fa-tag"></i> Você esta em <a href="./">Home</a> /
            <a href="#">Documentos do Associado</a>
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
                <div class="col-sm-12   col-md-9 col-xl-10">
                    @if (isset($sucesso))
                        <div class="alert alert-success alert-dismissible fade show" style="position: ">
                            <strong>Sucesso!</strong> {{ $sucesso }}
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif

                    @if(isset($falha))
                        <div class="alert alert-danger alert-dismissible fade show" style="position: ">
                            <strong>Erro!</strong> {{ $falha }}
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif

                    <div class="table-responsive" style="padding:1%">
                        <a href="{{ route('sorcio.documento.form.novo') }}" class="w-25 pt-2 mb-5 pb-2 d-block bg-primary text-center text-white">Novo arquivo</a>
                        <table id="example" class="display" style="width:100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome referente</th>
                                <th>Data</th>
                                <th>Arquivo</th>
                                <th>Tipo</th>
                                <th>Baixar</th>
                                <th>Visualiza</th>
                                <th>Excluir</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($arquivos as $arquivo)
                            <tr>
                                <td>{{ $arquivo->id }}</td>
                                <td>{{ $arquivo->titulo }}</td>
                                <td>{{ $util->dataBr($arquivo->data_referente) }}</td>
                                <td>{{ $arquivo->nome_arquivo }}</td>
                                <td>{{ $arquivo->tipoArquivo->titulo }}</td>
                                <td>{{ $arquivo->ativo == '1' ? 'Ativo' : 'Inativo' }}</td>
                                <td><a href="{{ $arquivo->url }}" download="{{ $arquivo->nome_arquivo }}" class="btn btn-primary" type="submit">Baixar</a></td>
                                <td><a href="{{ route("sorcio.delete.arquivo", ["caminho" => "files+documentos+usuario+$user->id+$arquivo->nome_arquivo", "id" => $arquivo->id]) }}" class="btn btn-danger">excluir</a></td>
                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nome referente</th>
                                <th>Data</th>
                                <th>Arquivo</th>
                                <th>Tipo</th>
                                <th>Ativo</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </main>
@stop
