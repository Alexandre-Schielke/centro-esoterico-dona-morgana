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
                                <h2 class="pageheader-title">{!! $modulo !!}<span class="float-right h6" style='color:#999'>Bem vindo {{ Auth::user()->name }}</span></h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{!! $modulo !!}</li>
                                        </ol>
                                    </nav>
                                </div>
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
                                            <a href="{{ route('painel.transparencia.financeiro') }}" class="btn btn-primary">Listar arquivo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="card">
                                    <div class="card-body border-top">
                                    <h3 class="section-title">Adicionar arquivo de transparência - Financeiro</h3>
                                    <p>Use este formulário para adicionar um novo arquivo de transparência.</p>
                                        <form action="{{ route('painel.store.transparencia.financeiro') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">                                        <div class="card-body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="titulo" class="col-form-label">Título</label>
                                                <input id="titulo" name="titulo" type="text" class="form-control" value="{{old('titulo')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="arquivo_categoria_id" class="col-form-label">Categoria do conteúdo</label>
                                                <select class="custom-select" id="arquivo_categoria_id" name="arquivo_categoria_id">
                                                    <optgroup label="Financeiro">
                                                        @foreach($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}">{{ $categoria->titulo }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="data_referente" class="col-form-label">Data refente</label>
                                                <input id="data_referente" name="data_referente" type="text" class="form-control date" value="{{old('data_referente')}}">
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
                                                    <h4>Selecione o arquivo que deseja enviar</h4>
                                                    <input id="arquivo" type="file" name="arquivo" placeholder="" class="form-control">
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
