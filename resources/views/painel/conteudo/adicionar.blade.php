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
                                            <a href="{{ route('painel.conteudo') }}" class="btn btn-primary">Listar Conteúdo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Adicionar conteúdo</h3>
                                    <p>Use este formulário para editar este conteúdo.</p>
                                </div>
                                <div class="card">
                                    <div class="card-body border-top">
                                        <h5 class="card-header">Formulário de edição</h5>
                                        <form action="{{ route('painel.store.conteudo') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">                                        <div class="card-body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="titulo" class="col-form-label">Título</label>
                                                <input id="titulo" name="titulo" type="text" class="form-control" value="{{old('titulo')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="descricao" class="col-form-label">Descrição</label>
                                                <input id="descricao" name="descricao" type="text" class="form-control" value="{{old('descricao')}}">
                                            </div>


                                            <div class="form-group">
                                                <label for="conteudo_categoria_id" class="col-form-label">Categoria do conteúdo</label>
                                                <select class="custom-select" id="conteudo_categoria_id" name="conteudo_categoria_id">
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{ $categoria->id }}">{{ $categoria->titulo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="autor">Autor (não obrigatório)</label>
                                                <input id="autor" name="autor" type="text" placeholder="" class="form-control" value="{{old('autor')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="tags">tags</label>
                                                <input type="text" id="tags" class="tagged form-control" data-removeBtn="true" name="tags" value="{{old('tags')}}" placeholder="Adicionar" style="width:100% !important;"><!-- exe:value="PC,Play Station 4,X-BOX One" -->
                                            </div>

                                            <div class="form-group">
                                                <label for="link_fonte">link da Fonte</label>
                                                <input id="link_fonte" name="link_fonte" type="text" placeholder="" class="form-control" value="{{old('link_fonte')}}" >
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


                                            <div class="form-group">
                                                <label for="elm1">Conteúdo</label>
                                                <textarea class="form-control" id="elm1" name="conteudo" rows="3">{{old('conteudo')}}</textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <h4>Imagem de capa</h4>
                                                    <p>selecione uma imagem de capa clicando no botão abaixo</p>
                                                    <input id="capa" type="file" name="capa" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h3>Imagem do conteúdo</h3>
                                                    <p>selecione uma imagem do conteúdo</p>
                                                    <input id="capa" type="file" name="imagem[]" placeholder="" class="form-control" accept="image/png, image/jpeg" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h3>Arquivos do conteúdo</h3>
                                                    <p>selecione arquivos do conteúdo</p>
                                                    <input id="arquivo" type="file" name="arquivo[]" placeholder="" class="form-control" accept="audio/mpeg, video/mp4, application/pdf, text/plain, application/excel, application/vnd.openxmlformats-officedocument.wordprocessingml.document, video/x-ms-asf, application/vnd.oasis.opendocument.text" multiple>
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
            </div>
           @stop
