
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
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href="{{ route('painel.usuario.listar') }}" class="btn btn-primary">Listar usuários</a>
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
                                        <form action="{{ route('painel.store.usuario') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">
                                        <div class="card-body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Nome</label>
                                                <input id="name" name="name" type="text" class="form-control" value="{{ old('name')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="perfil_id" class="col-form-label">Perfil do usuário </label>
                                                <select class="custom-select" id="perfil_id" name="perfil_id">
                                                    @foreach($perfis as $perfil)
                                                    <option value="{{ $perfil->id }}" {{ $perfil->id == old('perfil_id') ? 'selected' : '' }}>{{ $perfil->titulo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input id="email" name="email" type="text" class="form-control" value="{{ old('email')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="senha" class="col-form-label">Senha</label>
                                                <input id="senha" name="senha" type="text" class="form-control" value="{{ old('senha')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="email_secundario" class="col-form-label">Email secundário</label>
                                                <input id="email_secundario" name="email_secundario" type="text" class="form-control" value="{{ old('emial_secundario')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="cpf" class="col-form-label">CPF</label>
                                                <input id="cpf" name="cpf" type="text" class="form-control cpf" value="{{ old('cpf')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="telefone" class="col-form-label">Telefone</label>
                                                <input id="telefone" name="telefone" type="text" class="form-control phone" placeholder="digite seu telefone" value="{{ old('telefone')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="telefone_secundario" class="col-form-label">Telefone secundário</label>
                                                <input id="telefone_secundario" name="telefone_secundario" type="text" class="form-control phone" placeholder="" value="{{ old('telefone_secundario')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="nascimento" class="col-form-label">Nascimento</label>
                                                <input id="nascimento" name="nascimento" type="text" class="form-control date" value="{{ $util->dataBr(old('nascimento')) }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="sexo" class="col-form-label">Sexo </label>
                                                <select class="custom-select" id="sexo" name="sexo">
                                                    <option value="m" {{old('sexo') == 'm' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="f" {{old('sexo') == 'f' ? 'selected' : '' }}>Feminino</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="nome_pai" class="col-form-label">Nome do pai</label>
                                                <input id="nome_pai" name="nome_pai" type="text" class="form-control" placeholder="" value="{{ old('nome_pai')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="nome_mae" class="col-form-label">Nome do mãe</label>
                                                <input id="nome_mae" name="nome_mae" type="text" class="form-control" placeholder="" value="{{ old('nome_mae')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="observacao" class="col-form-label">Observação</label>
                                                <input id="observacao" name="observacao" type="text" class="form-control" placeholder="" value="{{ old('observacao')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="cep" class="col-form-label">CEP</label>
                                                <input id="cep" name="cep" type="text" class="form-control cep" placeholder="" value="{{ old('cep')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="estado" class="col-form-label">Estado</label>
                                                <select class="custom-select" id="estado" name="estado">
                                                    <option value="AC"{{ old('estado') == 'AC' ? 'selected' : '' }}>Acre</option>
                                                    <option value="AL"{{ old('estado') == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                                    <option value="AP"{{ old('estado') == 'AP' ? 'selected' : '' }}>Amapá</option>
                                                    <option value="AM"{{ old('estado') == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                                    <option value="BA"{{ old('estado') == 'BA' ? 'selected' : '' }}>Bahia</option>
                                                    <option value="CE"{{ old('estado') == 'CE' ? 'selected' : '' }}>Ceará</option>
                                                    <option value="DF"{{ old('estado') == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                                    <option value="ES"{{ old('estado') == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                                    <option value="GO"{{ old('estado') == 'GO' ? 'selected' : '' }}>Goiás</option>
                                                    <option value="MA"{{ old('estado') == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                                    <option value="MT"{{ old('estado') == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                                    <option value="MS"{{ old('estado') == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                                    <option value="MG"{{ old('estado') == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                                    <option value="PA"{{ old('estado') == 'PA' ? 'selected' : '' }}>Pará</option>
                                                    <option value="PB"{{ old('estado') == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                                    <option value="PR"{{ old('estado') == 'PR' ? 'selected' : '' }}>Paraná</option>
                                                    <option value="PE"{{ old('estado') == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                                    <option value="PI"{{ old('estado') == 'PI' ? 'selected' : '' }}>Piauí</option>
                                                    <option value="RJ"{{ old('estado') == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                                    <option value="RN"{{ old('estado') == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                                    <option value="RS"{{ old('estado') == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                                    <option value="RO"{{ old('estado') == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                                    <option value="RR"{{ old('estado') == 'RR' ? 'selected' : '' }}>Roraima</option>
                                                    <option value="SC"{{ old('estado') == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                                    <option value="SP"{{ old('estado') == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                                    <option value="SE"{{ old('estado') == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                                    <option value="TO"{{ old('estado') == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                                    <option value="EX"{{ old('estado') == 'EX' ? 'selected' : '' }}>Estrangeiro</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="cidade" class="col-form-label">Cidade</label>
                                                <input id="cidade"  name="cidade" type="text" class="form-control" placeholder="" value="{{ old('cidade')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="bairro" class="col-form-label">Bairro</label>
                                                <input id="bairro"  name="bairro" type="text" class="form-control" placeholder="" value="{{ old('bairro')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="endereco" class="col-form-label">Endereco</label>
                                                <input id="endereco"  name="endereco" type="text" class="form-control" placeholder="" value="{{ old('endereco')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="numero" class="col-form-label">Número</label>
                                                <input id="numero"  name="numero" type="text" class="form-control" placeholder=""  onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="restrito" class="col-form-label">Restrito </label>
                                                <select class="custom-select" id="status" name="restrito">
                                                    <option value="1" {{old('restrito') == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{old('restrito') == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="status" class="col-form-label">Sexo </label>
                                                <select class="custom-select" id="status" name="status">
                                                    <option value="1" {{old('status') == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{old('status') == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="ativo" class="col-form-label">Ativo </label>
                                                <select class="custom-select" id="ativo" name="ativo">
                                                    <option value="1" {{old('ativo') == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{old('ativo') == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>


                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <input class="btn btn-success"   type="submit" name="editar" value="Envia dados">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
