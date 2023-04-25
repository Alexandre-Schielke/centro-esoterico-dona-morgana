
@extends('painel.template')
@section('conteudo')

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
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
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>Sucesso!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body border-top">
                                <h5 class="card-header">Formulário de edição ( <span style="color: red">Imagens com fundo vermelho indica que a extensão é PNG</span> )</h5>
                                <form action="{{ route('painel.logo.update') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">
                                    <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <h4>Imagem de logo do menu</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                                <p>selecione uma imagem de logo para anexar ao menu</p>
                                                <input id="capa" type="file" name="logo-topo" placeholder="" class="form-control" accept="image/png, image/jpeg">
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            @if(count(File::glob(public_path("/imagens/logo/logo-topo/*.*"))) != 0)
                                                @foreach(File::glob(public_path("/imagens/logo/logo-topo/*.*")) as $imagem)
                                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        @php
                                                        if(isset($imagem)){
                                                                $baseName = explode('.', basename($imagem));
                                                                $fileName = $baseName[0];
                                                                $fileExt = $baseName[1];

                                                        }
                                                        @endphp
                                                        @if(basename($imagem) == "logo-topo.$fileExt")
                                                            <h4>Imagem Original</h4>
                                                        @elseif(basename($imagem) == "logo-topo-thumb.$fileExt")
                                                            <h4>Imagem Thumb</h4>
                                                        @endif
                                                        <div class="product-thumbnail">
                                                            <div class="product-img-head">
                                                                <div class="product-img {{$fileExt == 'png'? 'bg-danger' : '' }}">
                                                                    <img src="/imagens/logo/logo-topo/{{ basename($imagem) }}" alt="" class="img-fluid"></div>
                                                                <div class="ribbons"></div>
                                                                <div class="ribbons-text">capa</div>
                                                                @php
                                                                    if (isset($imagem)){
                                                                        if(basename($imagem)){
                                                                            $nome = basename($imagem);
                                                                        }
                                                                    }
                                                                @endphp
                                                                <a href='/imagens/logo/logo-topo/{{$nome}}' class="btn btn-primary text-center text-white" style="width:100%" download>Baixar</a>
                                                                <a href='/imagens/logo/logo-topo/{{$nome}}' class="btn btn-info text-center text-white" style="width:100%" target="_blank">Visualizar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

{{--                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
{{--                                                    <a href='{{ route("painel.conteudo.arquivo.delete", ["caminho" => "files+conteudo+$conteudo->id+imagem+capa+", "delDiretorio" => true]) }}' class="btn-sm btn active text-white btn-danger" style="">Deletar arquivo</a>--}}
{{--                                                </div>--}}
                                            @endif

                                        </div>

                                        <div class="row">
                                            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <h4>Imagem de logo do rodapé</h4>
                                                <p>selecione uma imagem de logo para anexar ao rodapé</p>
                                                <input id="capa" type="file" name="logo-rodape" placeholder="" class="form-control" accept="image/png, image/jpeg">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            @if(count(File::glob(public_path("/imagens/logo/logo-rodape/*.*"))) != 0)
                                                @foreach(File::glob(public_path("/imagens/logo/logo-rodape/*.*")) as $imagem)
                                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        @php
                                                            if(isset($imagem)){
                                                                    $baseName = explode('.', basename($imagem));
                                                                    $fileName = $baseName[0];
                                                                    $fileExt = $baseName[1];

                                                            }
                                                        @endphp
                                                        @if(basename($imagem) == "logo-rodape.$fileExt")
                                                            <h4>Imagem Original</h4>
                                                        @elseif(basename($imagem) == "logo-rodape-thumb.$fileExt")
                                                            <h4>Imagem Thumb</h4>
                                                        @endif
                                                        <div class="product-thumbnail">
                                                            <div class="product-img-head">
                                                                <div class="product-img {{$fileExt == 'png'? 'bg-danger' : '' }}">
                                                                    <img src="/imagens/logo/logo-rodape/{{ basename($imagem) }}" alt="" class="img-fluid"></div>
                                                                <div class="ribbons"></div>
                                                                <div class="ribbons-text">capa</div>
                                                                @php
                                                                    if (isset($imagem)){
                                                                        if(basename($imagem)){
                                                                            $nome = basename($imagem);
                                                                        }
                                                                    }
                                                                @endphp
                                                                <a href='/imagens/logo/logo-rodape/{{$nome}}' class="btn btn-primary text-center text-white" style="width:100%" download>Baixar</a>
                                                                <a href='/imagens/logo/logo-rodape/{{$nome}}' class="btn btn-info text-center text-white" style="width:100%" target="_blank">Visualizar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                {{--                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
                                                {{--                                                    <a href='{{ route("painel.conteudo.arquivo.delete", ["caminho" => "files+conteudo+$conteudo->id+imagem+capa+", "delDiretorio" => true]) }}' class="btn-sm btn active text-white btn-danger" style="">Deletar arquivo</a>--}}
                                                {{--                                                </div>--}}
                                            @endif

                                        </div>

                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input class="btn btn-success"   type="submit" name="editar" value="Envia dados">
                                            </div>
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
