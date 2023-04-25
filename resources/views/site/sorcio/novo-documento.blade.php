@extends('site.template')
@section('conteudo')
    <nav class="float-left nav-interno">
        <div class="container pt-3 pb-3">
            <i class="fas fa-tag"></i> Você esta em <a href="./">Home</a> /
            <a href="#">Novo documento</a>
        </div>
    </nav>

    <main role="main" class="pt-5 pb-5 float-left" style="width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-2 col-md-2">
                    <h1 class="bg-dark pt-2 pb-2 text-center text-white">Menu</h1>
                    <ul>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a class="d-block w-100" href="{{ route('sorcio.painel') }}"><i class="fas fa-user-edit"></i> Editar Dados</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a class="d-block w-100"  href="{{ route('sorcio.documentos') }}"><i class="fas fa-file-alt"></i> Documentos</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a class="d-block w-100"  href="{{ route('sorcio.documentos.assinatura') }}"><i class="fas fa-portrait"></i> Assinatura</a></li>
                    </ul>
                </div>
                <div class="col-sm-12   col-md-10 col-xl-10">
                    <div class="table-responsive" style="padding:1%">
                        <h1 class="h4 font-weight-bolder">Anexar documento</h1>
                        <form action="{{ route('sorcio.novo.documento') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">

                            <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" style="position: ">
                                            <strong>Sucesso!</strong> {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="titulo" class="col-form-label">Nome referência</label>
                                    <input id="titulo" name="titulo" type="text" class="form-control" value="{{old('titulo')}}">
                                </div>

                                <div class="form-group">
                                    <label for="dataReferente" class="col-form-label">Data refente</label>
                                    <input id="dataReferente" name="dataReferente" type="text" class="form-control date" value="{{old('dataReferente')}}">
                                </div>

                                <div class="form-group">
                                    <label for="tipoArquivo" class="col-form-label">Tipo de arquivo</label>
                                    <select class="form-control" name="tipoArquivo" id="tipoArquivo">
                                        <option disabled selected>Selecione o tipo de arquivo</option>
                                        @foreach($tipoArquivos as  $tipoArquivo)
                                        <option value="{{ $tipoArquivo->id }}" >{{ $tipoArquivo->titulo }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                        <h4>Anexar arquivo</h4><br/>
                                        <input style="cursor: pointer;" id="arquivo" type="file" name="arquivo" placeholder="" >
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-success"   type="submit" name="editar" value="Adicionar arquivo">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </main>
@stop
