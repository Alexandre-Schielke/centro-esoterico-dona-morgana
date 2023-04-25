
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Adicionar  Banner </h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href='{{ route("painel.novo.banner") }}' class="btn btn-primary">Adicionar um novo Banner</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Excluir Banner</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href='{{ route("painel.delete.banner", ["id" => $banner->id]) }}' class="btn btn-danger">Excluir este Banner</a>
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
                                        <form action="{{ route('painel.editado.banner') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">                                        <div class="card-body">
                                            @csrf

                                            <input id="id" name="id" type="hidden" class="form-control" value="{{ $banner->id}}">

                                            <div class="form-group">
                                                <label for="titulo" class="col-form-label">Título</label>
                                                <input id="titulo" name="titulo" type="text" class="form-control" value="{{ $banner->titulo }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="conteudo_categoria_id" class="col-form-label">Categoria do conteúdo</label>
                                                <select class="custom-select" id="banner_categoria_id" name="banner_categoria_id">
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{ $categoria->id }}" {{ $categoria->id == $banner->banner_categoria_id ? 'selected' : '' }}>{{ $categoria->titulo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="descricao" class="col-form-label">Descrição</label>
                                                <input id="descricao" name="descricao" type="text" class="form-control" value="{{ $banner->descricao }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="conteudo_ref" class="col-form-label">URL do conteúdo referente</label>
                                                <input id="conteudo_ref" name="conteudo_ref" type="text" class="form-control" value="{{ $banner->conteudo_ref }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="link_externo" class="col-form-label">URL do link externo</label>
                                                <select class="custom-select" id="link_externo" name="link_externo">
                                                    <option value="1" {{ $banner->link_externo == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{ $banner->link_externo == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="restrito" class="col-form-label">Restrito</label>
                                                <select class="custom-select" id="restrito" name="restrito">
                                                    <option value="1" {{ $banner->restrito == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{ $banner->restrito == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="ativo" class="col-form-label">Ativo</label>
                                                <select class="custom-select" id="ativo" name="ativo">
                                                    <option value="1" {{ $banner->ativo == '1' ? 'selected' : '' }}>Sim</option>
                                                    <option value="0" {{ $banner->ativo == '0' ? 'selected' : '' }}>Não</option>
                                                </select>
                                            </div>


                                            <div class="row">
                                                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 mb-5">
                                                    <h4>Imagem do Banner (1360 X 500)</h4>
                                                    <p>OBS: trate a imagem para 1360 x 500 para que siga um padrão no layout</p>
                                                    <input id="capa" type="file" name="capa" placeholder="" class="form-control">
                                                </div>

                                                @foreach(File::glob(public_path("files/banner/$banner->id/*.*")) as $imagem)
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                @if(basename($imagem) == 'capa.jpg')
                                                    <h4>Imagem Original</h4>
                                                @elseif(basename($imagem) == 'thumb-banner.jpg')
                                                        <h4>Imagem Banner</h4>
                                                @elseif(basename($imagem) == 'thumb.jpg')
                                                        <h4>Imagem Thumb</h4>
                                                @endif
                                                    <div class="product-thumbnail">
                                                        <div class="product-img-head">
                                                            <div class="product-img">
                                                                <img src='/files/banner/{{ $banner->id }}/{{ basename($imagem) }}' alt="" class="img-fluid"></div>
                                                            <div class="ribbons"></div>
                                                            <div class="ribbons-text">capa</div>
                                                            <a href='/files/banner/{{ $banner->id }}/capa.jpg' class="btn btn-primary text-center text-white" style="width:100%" download>Baixar</a>
                                                            <a href='/files/banner/{{ $banner->id }}/capa.jpg' class="btn btn-info text-center text-white" target="_blank" style="width:100%">Visualizar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <a href='{{ route("painel.banner.arquivo.delete", ["id" => $banner->id, "caminho" => "files+banner+$banner->id+"]) }}' class="btn-sm btn active text-white btn-danger" style="">Deletar arquivo</a>
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
