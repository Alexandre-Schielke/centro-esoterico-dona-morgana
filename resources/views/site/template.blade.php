<html lang="en"><!--<![endif]--><!-- Begin Head -->
<head>
    <title>Centro esoterico Dona Morgana</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- favicon referencia: https://www.favicon-generator.org/ --}}
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="//images/faviconapple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    {{-- end favicon --}}

    <meta name="description" content="Centro esoterico">
    {{--    <meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">--}}
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet"
          href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/bfddfb0c1c.js" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="{{ asset('/js/mask/jquery.mask.js') }}"></script>

</head>
<body>
<!-- Header Start -->
<div class="ast_top_header">
    <div class="row" style="width: 100%!important;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_contact_details">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:91982405621">(91) 98240-5621</a>
                        </li>
                        <li><a href="mailto:contato@centroesotericodonamorgana.com.br"><i class="fas fa-envelope"></i>
                                contato@centroesotericodonamorgana.com.br</a>
                        </li>
                    </ul>
                </div>
                <div class="ast_autho_wrapper">
                    <ul>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/morgana.esoterica.96/"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/morganaesoterica/"><i
                                    class="fab fa-instagram-square"></i></a></li>
                    </ul><!---->
                </div>
            </div>
        </div>
    </div>
    <hr style="margin: 0">
    <div class="row" style="width: 100%!important;">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="ast_logo">
                    <a href="/"><img src="/images/logo-h.png"
                                     alt="Logo" title="Logo"></a>
                    <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="ast_main_menu_wrapper">
                    <div class="ast_menu">
                        <ul>
                            <li>
                                <a href="{{route('conteudo.view', ['categoria'=> 'institucional', 'conteudo'=>'quem-e-dona-morgana'])}}">Dona
                                    Morgana</a>
                                {{--                                <ul class="submenu">--}}
                                {{--                                    <li><a href="index.html">Dona Morgana</a></li>--}}
                                {{--                                    <li><a href="index-horoscope.html">horoscope</a></li>--}}
                                {{--                                    <li><a href="index-tarot.html">tarot card</a></li>--}}
                                {{--                                    <li><a href="index-palmistry.html">palmistry</a></li>--}}
                                {{--                                    <li><a href="index-vastu.html">vastu shastra</a></li>--}}
                                {{--                                    <li><a href="index-gemstone.html">gemstone</a></li>--}}
                                {{--                                    <li><a href="index-numerology.html">numerology</a></li>--}}
                                {{--                                </ul>--}}
                            </li>
                            <li><a href="{{ route('conteudo.listar', ['categoria' => $catServicos->url_amiga]) }}">Serviços</a>
                            </li>
                            <li><a href="{{ route('conteudo.listar', ['categoria' => 'noticias']) }}">Notícias</a></li>
                            {{--                            <li><a href="#">blog</a>--}}
                            {{--                                <ul class="submenu">--}}
                            {{--                                    <li><a href="#">blog</a>--}}
                            {{--                                        <ul class="submenu">--}}
                            {{--                                            <li><a href="blog.html">blog default</a></li>--}}
                            {{--                                            <li><a href="blog_rs.html">right sidebar</a></li>--}}
                            {{--                                            <li><a href="blog_ls.html">left sidebar</a></li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li><a href="#">blog single</a>--}}
                            {{--                                        <ul class="submenu">--}}
                            {{--                                            <li><a href="blog_single.html">full width</a></li>--}}
                            {{--                                            <li><a href="blog_single_rs.html">right sidebar</a></li>--}}
                            {{--                                            <li><a href="blog_single_ls.html">left sidebar</a></li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            <li><a href="{{ route('conteudo.listar', ['categoria' => 'evento']) }}">Eventos</a></li>
                            <li><a href="{{ route('contato') }}">Fale conosco</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ast_header_bottom menu_fixed animated fadeInDown">
    <div class="container">

    </div>
</div>
<!-- Header End -->

@yield('conteudo')

<!-- Footer wrapper start-->
<div style="background-color: #333!important;" class="ast_toppadder70 ast_bottompadder20">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                <div class="ast_footer_info">
                    <img src="/images/logo-branco.png" alt="Logo" style="width: 400px; margin-top: 40px">

                    {{--                    <ul>--}}
                    {{--                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                    {{--                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
                    {{--                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>--}}
                    {{--                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>--}}
                    {{--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                    {{--                    </ul>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">Receba notícias</h4>
                    <div class="ast_newsletter">
                        <p>Cadastre seu email para receber notícias, promoções e eventos... não fique de fora!</p>
                        <div class="ast_newsletter_box">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">Serviços</h4>
                    <div class="ast_servicelink">
                        <ul>
                            @foreach($servicos as $servico)
                                <li>
                                    <a href="{{route('conteudo.view', ['categoria'=> $servico->categoria->url_amiga, 'conteudo'=>$servico->url_amiga])}}">{{$servico->titulo}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">Outros links</h4>
                    <div class="ast_sociallink">
                        <ul>
                            <li><a target="_blank" href="https://www.todamateria.com.br/umbanda/">todamateria.com.br</a>
                            </li>
                            <li><a target="_blank"
                                   href="https://super.abril.com.br/sociedade/os-orixas-mais-populares-do-brasil">super.abril.com.br</a>
                            </li>
                            <li><a target="_blank"
                                   href="https://epoca.globo.com/conheca-as-diferencas-semelhancas-do-candomble-da-umbanda-24127498">epoca.globo.com</a>
                            </li>
                            <li><a target="_blank"
                                   href="https://epoca.globo.com/conheca-as-diferencas-semelhancas-do-candomble-da-umbanda-24127498">epoca.globo.com</a>
                            </li>
                            <li><a target="_blank"
                                   href="https://pt.wikipedia.org/wiki/Tarot#:~:text=9%20Liga%C3%A7%C3%B5es%20externas-,Introdu%C3%A7%C3%A3o,mais%20tradicionais%20da%20Europa%20continental">pt.wikipedia.org</a>
                            </li>
                            <li><a target="_blank"
                                   href="https://tnonline.uol.com.br/noticias/cotidiano/67,378810,07,07,apos-pesquisa-cientifica-medico-diz-que-oracao-tem-efeitos-positivos-contra-doencas">tnonline.uol.com.br</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">Nos encontre</h4>
                    <div class="ast_gettouch">
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p> Tv. Antônio Baena, 70 - Pedreira, Belém - PA, 66087-082</p></li>
                            <li><i class="fa fa-at" aria-hidden="true"></i> <a href="#">contato@centroesotericodonamorgana.com.br</a><a
                                    href="#">suporte@centroesotericodonamorgana.com.br</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p><a href="tel:91982405621">(91) 98240-5621</a></p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_copyright_wrapper">
                    <p>
                        © Copyright 2021 -
                        <a href="https://centroesotericodonamorgana.com.br">centroesotericodonamorgana.com.br</a>
                        <span class="d-none d-sm-none d-md-none d-lg-inline-block d-lg-inline-block"> | </span>
                        <span class="d-block d-sm-block d-md-block d-lg-inline-block d-xl-inline-block">
                            Desenvolvido por
                            <a style="color: #fff" href="https://codezeus.com.br/" target="_blank">
                                <b>Code <i class="fas fa-bolt" style="color: #fecc00" aria-hidden="true"></i> Zeus</b>
                            </a>
                        </span>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer wrapper End-->
<!--Main js file Style-->

<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/js/jquery.appear.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<!--Main js file End-->

@if ($errors->any())
    <script>
        $(document).ready(function () {
            $('#errojs').show();
        });
    </script>
@endif

@if (!$errors->any())
    <script>
        $(document).ready(function () {
            $('#errojs').hide();
        });
    </script>
@endif

<script>


    $('#close').on('click', function () {
        $('#errojs').hide();
    });

    $('#errojs').on('click', function () {
        $('#errojs').hide();
    });

</script>

<script>
    $(document).ready(function () {

        $('.phone_with_ddd').mask('(00) 00000-0000');

    });

</script>
</body>
</html>


