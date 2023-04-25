
@extends('painel.template')
@section('conteudo')

            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                            <h2 class="pageheader-title">{{ $modulo }}<span class="float-right h6" style='color:#999'>Bem vindo {{ Auth::user()->name }}</span></h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $modulo }}</li>
                                        </ol>
                                    </nav>
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" style="position: ">
                                        <strong>Sucesso!</strong> {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    </div>
				                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Listar usuários</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href="{{ route('painel.usuario.listar') }}" class="btn btn-primary">Listagem de usuários</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Adicionar  usuário </h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href='{{ route("painel.novo.usuario") }}' class="btn btn-primary">Adicionar um novo usuário</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Excluir usuário</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href='{{ route("painel.delete.usuario", ["id" => $usuario->id]) }}' class="btn btn-danger">Excluir este usuário</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Alterar senha</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <!-- Botão para acionar modal -->
                                            <a href='#' class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                                Alterar senha
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Editar conteúdo</h3>
                                    <p>Use este formulário para editar este conteúdo.</p>
                                </div>
                                <div class="card">
                                    <div class="card-body border-top">
                                        <h5 class="card-header">Formulário de edição</h5>
                                        <form action="{{ route('painel.editado.usuario') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">
                                            <div class="card-body">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label">Nome</label>
                                                    <input id="name" name="name" type="text" class="form-control" value="{{ $usuario->name }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="perfil_id" class="col-form-label">Perfil do usuário </label>
                                                    <select class="custom-select" id="perfil_id" name="perfil_id">
                                                        @foreach($perfis as $perfil)
                                                        <option value="{{ $perfil->id }}" {{ $perfil->id == $usuario->perfil_id ? 'selected' : '' }}>{{ $perfil->titulo }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="col-form-label">Email</label>
                                                    <input id="email" name="email" type="text" class="form-control" value="{{ $usuario->email }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email_secundario" class="col-form-label">Email secundário</label>
                                                    <input id="email_secundario" name="email_secundario" type="text" class="form-control" value="{{ $usuario->email_secundario }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cpf" class="col-form-label">CPF</label>
                                                    <input id="cpf" name="cpf" type="text" class="form-control cpf" value="{{ $usuario->cpf }}">
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label for="cnpj" class="col-form-label">CNPJ</label>
                                                    <input id="cnpj" name="cnpj" type="text" class="form-control" placeholder="digite seu cnpj" value="{{ $usuario->cnpj }}">
                                                </div> -->

                                                <div class="form-group">
                                                    <label for="telefone" class="col-form-label">Telefone</label>
                                                    <input id="telefone" name="telefone" type="text" class="form-control phone" placeholder="digite seu telefone" value="{{ $usuario->telefone }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="telefone_secundario" class="col-form-label">Telefone secundário</label>
                                                    <input id="telefone_secundario" name="telefone_secundario" type="text" class="form-control phone" placeholder="" value="{{ $usuario->telefone_secundario }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="nascimento" class="col-form-label">Nascimento</label>
                                                    <input id="nascimento" name="nascimento" type="text" class="form-control date" value="{{ $util->dataBr($usuario->nascimento) }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="sexo" class="col-form-label">Sexo </label>
                                                    <select class="custom-select" id="sexo" name="sexo">
                                                        <option value="m" {{ $usuario->sexo == 'm' ? 'selected' : '' }}>Masculino</option>
                                                        <option value="f" {{ $usuario->sexo == 'f' ? 'selected' : '' }}>Feminino</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nome_pai" class="col-form-label">Nome do pai</label>
                                                    <input id="nome_pai" name="nome_pai" type="text" class="form-control" placeholder="" value="{{ $usuario->nome_pai }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="nome_mae" class="col-form-label">Nome do mãe</label>
                                                    <input id="nome_mae" name="nome_mae" type="text" class="form-control" placeholder="" value="{{ $usuario->nome_mae }}">
                                                </div>


                                                <div class="form-group">
                                                    <label for="observacao" class="col-form-label">Observação</label>
                                                    <input id="observacao" name="observacao" type="text" class="form-control" placeholder="" value="{{ $usuario->observacao }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cep" class="col-form-label">CEP</label>
                                                    <input id="cep" name="cep" type="text" class="form-control cep" placeholder="" value="{{ $usuario->cep }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="estado" class="col-form-label">Estado</label>
                                                    <select class="custom-select" id="estado" name="estado">
                                                        <option value="AC" {{ $usuario->estado == 'AC' ? 'selected' : '' }}>Acre</option>
                                                        <option value="AL" {{ $usuario->estado == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                                        <option value="AP" {{ $usuario->estado == 'AP' ? 'selected' : '' }}>Amapá</option>
                                                        <option value="AM" {{ $usuario->estado == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                                        <option value="BA" {{ $usuario->estado == 'BA' ? 'selected' : '' }}>Bahia</option>
                                                        <option value="CE" {{ $usuario->estado == 'CE' ? 'selected' : '' }}>Ceará</option>
                                                        <option value="DF" {{ $usuario->estado == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                                        <option value="ES" {{ $usuario->estado == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                                        <option value="GO" {{ $usuario->estado == 'GO' ? 'selected' : '' }}>Goiás</option>
                                                        <option value="MA" {{ $usuario->estado == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                                        <option value="MT" {{ $usuario->estado == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                                        <option value="MS" {{ $usuario->estado == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                                        <option value="MG" {{ $usuario->estado == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                                        <option value="PA" {{ $usuario->estado == 'PA' ? 'selected' : '' }}>Pará</option>
                                                        <option value="PB" {{ $usuario->estado == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                                        <option value="PR" {{ $usuario->estado == 'PR' ? 'selected' : '' }}>Paraná</option>
                                                        <option value="PE" {{ $usuario->estado == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                                        <option value="PI" {{ $usuario->estado == 'PI' ? 'selected' : '' }}>Piauí</option>
                                                        <option value="RJ" {{ $usuario->estado == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                                        <option value="RN" {{ $usuario->estado == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                                        <option value="RS" {{ $usuario->estado == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                                        <option value="RO" {{ $usuario->estado == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                                        <option value="RR" {{ $usuario->estado == 'RR' ? 'selected' : '' }}>Roraima</option>
                                                        <option value="SC" {{ $usuario->estado == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                                        <option value="SP" {{ $usuario->estado == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                                        <option value="SE" {{ $usuario->estado == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                                        <option value="TO" {{ $usuario->estado == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                                        <option value="EX" {{ $usuario->estado == 'EX' ? 'selected' : '' }}>Estrangeiro</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cidade" class="col-form-label">Cidade</label>
                                                    <input id="cidade"  name="cidade" type="text" class="form-control" placeholder="" value="{{ $usuario->cidade }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="bairro" class="col-form-label">Bairro</label>
                                                    <input id="bairro"  name="bairro" type="text" class="form-control" placeholder="" value="{{ $usuario->bairro }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="endereco" class="col-form-label">Endereco</label>
                                                    <input id="endereco"  name="endereco" type="text" class="form-control" placeholder="" value="{{ $usuario->endereco }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="numero" class="col-form-label">Número</label>
                                                    <input id="numero"  name="numero" type="text" class="form-control" placeholder=""  onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="{{ $usuario->numero }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="restrito" class="col-form-label">Restrito </label>
                                                    <select class="custom-select" id="status" name="restrito">
                                                        <option value="1" {{ $usuario->restrito == '1' ? 'selected' : '' }}>Sim</option>
                                                        <option value="0" {{ $usuario->restrito == '0' ? 'selected' : '' }}>Não</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="status" class="col-form-label">Sexo </label>
                                                    <select class="custom-select" id="status" name="status">
                                                        <option value="1" {{ $usuario->status == '1' ? 'selected' : '' }}>Sim</option>
                                                        <option value="0" {{ $usuario->status == '0' ? 'selected' : '' }}>Não</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="ativo" class="col-form-label">Ativo </label>
                                                    <select class="custom-select" id="ativo" name="ativo">
                                                        <option value="1" {{ $usuario->sexo == '1' ? 'selected' : '' }}>Sim</option>
                                                        <option value="0" {{ $usuario->sexo == '0' ? 'selected' : '' }}>Não</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input class="btn btn-success"   type="submit" name="editar" value="Envia dados">
                                                    </div>
                                                </div>

                                                <input id="id" name="id" type="hidden" class="form-control" value="{{ $usuario->id}}">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Documentos do usuário</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive" style="padding:1%">
                                            <table id="example" class="display" style="width:100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome referente</th>
                                                    <th>Data</th>
                                                    <th>Tipo</th>
                                                    <th>Nome do arquivo</th>
                                                    <th>Baixar</th>
                                                    <th>Ativo</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($arquivos as $arquivo)
                                                    <tr>
                                                        <td>{{ $arquivo->id }}</td>
                                                        <td>{{ $arquivo->titulo }}</td>
                                                        <td>{{ $util->dataBr($arquivo->data_referente) }}</td>
                                                        <td>{{ $arquivo->tipoArquivo->titulo }}</td>
                                                        <td>{{ $arquivo->nome_arquivo }}</td>
                                                        <td><a href="{{ $arquivo->url }}" download="{{ $arquivo->nome_arquivo }}" class="btn btn-primary" type="submit">Baixar</a></td>
                                                        <td>{{ $arquivo->ativo == '1' ? 'Ativo' : 'Inativo' }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome referente</th>
                                                    <th>Data</th>
                                                    <th>Tipo</th>
                                                    <th>Nome do arquivo</th>
                                                    <th>Baixar</th>
                                                    <th>Ativo</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('senha') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">

                            <div class="modal-body">
                                <div class="card-body">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $usuario->id }}">
                                        <label for="name" class="col-form-label">Senha</label>
                                        <input id="senha" name="senha" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Alterar senha</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@stop
