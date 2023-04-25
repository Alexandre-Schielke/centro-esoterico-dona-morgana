
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
                                            <a href="{{ route('painel.banner') }}" class="btn btn-primary">Listar Banners</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Edicionar Banner</h3>
                                    <p>Use este formulário para editar este banner.</p>
                                </div>
                                <div class="card">
                                    <div class="card-body border-top">
                                        <h5 class="card-header">Formulário de edição</h5>
                                        <form action="{{ route('painel.store.banner') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">
                                        <div class="card-body">
                                            @csrf

                                            <div class="form-group">
                                                <label for="titulo" class="col-form-label">Título</label>
                                                <input id="titulo" name="titulo" type="text" class="form-control" value="{{ old('titulo') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="banner_categoria_id" class="col-form-label">Categoria do banner</label>
                                                <select class="custom-select" id="banner_categoria_id" name="banner_categoria_id">
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{ $categoria->id }}" {{ $categoria->id == old('banner_categoria_id') ? 'selected' : '' }}>{{ $categoria->titulo}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="descricao" class="col-form-label">Descrição</label>
                                                <input id="descricao" name="descricao" type="text" class="form-control" value="{{ old('descricao') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="conteudo_ref" class="col-form-label">URL do conteúdo referente</label>
                                                <input id="conteudo_ref" name="conteudo_ref" type="text" class="form-control" value="{{ old('conteudo_ref') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="link_externo" class="col-form-label">Abrir link em uma nova janela?</label>
                                                <select class="custom-select" id="link_externo" name="link_externo">
                                                    <option value="1" {{old('link_externo') == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{old('link_externo') == '1' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="restrito" class="col-form-label">Restrito </label>
                                                <select class="custom-select" id="restrito" name="restrito">
                                                    <option value="1" {{old('restrito') == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{old('restrito') == '0' ? 'selected' : '' }}>Não</option>
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
                                                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 mb-5">
                                                    <h4>Imagem do Banner (1360 X 500)</h4>
                                                    <p>OBS: trate a imagem para 1360 x 500 para que siga um padrão no layout</p>
                                                    <input id="capa" type="file" name="capa" placeholder="" class="form-control">
                                                </div>
                                            </div>
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
@stop
