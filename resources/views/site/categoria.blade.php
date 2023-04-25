@extends('site.template')

@section('conteudo')

<!--Breadcrumb start-->
<div class="ast_pagetitle" style="padding: 100px 0px 100px 0px!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>{{ $categoriaConteudo->titulo}}</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="#">{{ $categoriaConteudo->titulo}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!--Services Start-->
<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
    <div class="container">
        <div class="row">

            @if(count($conteudoLista) > 0)
                @foreach($conteudoLista as $servico)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="ast_service_box">
                            <img width="200"
                                 src="{{ file_exists("files/conteudo/$servico->id/imagem/capa/thumb.jpg") ? "/files/conteudo/$servico->id/imagem/capa/thumb.jpg" : "/imagens/tampao.jpg" }}"
                                 alt="Service">
                            <h4>{{$servico->titulo}}</h4>
                            <p style="text-transform: lowercase">{{$servico->descricao}}</p>
                            <div class="clearfix"></div>
                            <a href="{{route('conteudo.view', ['categoria'=> $servico->categoria->url_amiga, 'conteudo'=>$servico->url_amiga])}}"
                               class="ast_btn">Saiba mais</a>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="text-center" style="margin-top: 10%!important; margin-bottom: 10%!important;">Categoria sem conteúdo no momento</h3>
            @endif

        </div>
    </div>
</div>

@stop

{{--<!--Srart Style -->--}}
{{--<link rel="stylesheet" type="text/css" href="css/animate.css">--}}
{{--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">--}}
{{--<link rel="stylesheet" type="text/css" href="css/font-awesome.css">--}}
{{--<link rel="stylesheet" type="text/css" href="css/fonts.css">--}}

{{--<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">--}}
{{--<link rel="stylesheet" type="text/css" href="css/style.css">--}}

{{--<!-- Footer wrapper End-->--}}
{{--<!--Main js file Style-->--}}
{{--<script type="text/javascript" src="js/jquery.js"></script>--}}
{{--<script type="text/javascript" src="js/bootstrap.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>--}}
{{--<script type="text/javascript" src="js/owl.carousel.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.countTo.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.appear.js"></script>--}}
{{--<script type="text/javascript" src="js/custom.js"></script>--}}
