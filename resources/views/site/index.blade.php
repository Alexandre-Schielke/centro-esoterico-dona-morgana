@extends('site.template')
@section('conteudo')

    <section id="Banner" class="ast_service_wrapper">
        <div class="owl-banner owl-carousel owl-theme">
            @foreach($banners as $banner)
                <div class="item">


                    <div class="col-12" style="height: auto; max-width: 90%; text-align: center; margin: 0 auto;">
                        <img style="width: 100%!important;" src="/files/banner/{{$banner->id}}/capa.jpg">
                        {{--                            <div class="d-block" style="margin-top: 12%">--}}
                        {{--                                <span class="text-white">TORNE A SUA VENDA MAIS VISIVEL COM A NOSSA PLATAFORMA</span>--}}

                        {{--                                <h1 class="text-white">Crie agora o seu anúncio</h1>--}}

                        {{--                                <span class="text-white d-block mb-2">Dilvulgue seu anúncio de forma simples e sem burocracia</span>--}}

                        {{--                                <span class="text-white d-block mb-3">--}}

                        {{--                                        Planos a partir de <span class="font-weight-bold cor-principal" style="font-size: 1.5rem">R$100,00</span>--}}

                        {{--                                    </span>--}}

                        {{--                                <a class="text-white text-center p-3 d-block" style="width: 200px; border-radius: 5px; background-color: #F34E24; font-weight: bolder">QUERO ANÚNCIAR</a></span>--}}
                        {{--                            </div>--}}
                    </div>


                </div>
            @endforeach
        </div>
    </section>


    <script>
        $(document).ready(function () {
            $('.owl-banner').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })

            document.getElementsByClassName('owl-prev')[0].id = 'seta-left';
            document.getElementsByClassName('owl-next')[0].id = 'seta-right';
            document.getElementsByClassName('owl-prev')[0].innerHTML = '<i style="font-size: 2rem" class=\'fas fa-caret-square-left\'></i>';
            document.getElementsByClassName('owl-next')[0].innerHTML = '<i style="font-size: 2rem" class=\'fas fa-caret-square-right\'></i>';
            document.getElementsByClassName('owl-next')[0].addEventListener("focus", function () {
                this.style.outline = 'none';
                this.style.boxShadow = 'none';
            });
        });
    </script>

    <!--About Us Start-->
    <div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Quem É <span>Dona Morgana?</span></h1>
                    </div>
                </div>
                <div
                    class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0"
                    style="margin-top: 30px">
                    <div class="ast_about_info_img">
                        <img
                            src="{{ file_exists("files/conteudo/$quemSomos->id/imagem/capa/thumb.jpg") ? "/files/conteudo/$quemSomos->id/imagem/capa/thumb.jpg" : "https://www.sindicombustiveis-pa.com.br/imagens/logo.png" }}"
                            alt="About">
                    </div>
                </div>
                <div
                    class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">
                    <div class="ast_about_info">
                        <h4>{{  $quemSomos->titulo }}</h4>
                        {!! $quemSomos->conteudo !!}
                        <a href="#" class="ast_btn">Saber mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About Us End-->
    <!--Slider Start-->
    <div class="ast_slider_wrapper">
        <div class="ast_banner_text" style="    padding: 100px 0px!important;">
            <div class="starfield">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="ast_waves">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="ast_waves2">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="ast_waves3">
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
                <div class="ast_wave"></div>
            </div>
            <div class="container">
                <div class="ast_bannertext_wrapper">
                    <h2 style="color: white">Deseja efetuar um agendamento??</h2>
                    <ul class="ast_toppadder40 ast_bottompadder50">
                        <li>Horóscopos</li>
                        <li>numerologia</li>
                    </ul>
                    <a href="https://api.whatsapp.com/send?phone=5591982405621" class="ast_btn">Agende seu
                        atendimento</a>
                </div>
            </div>
        </div>
    </div>
    <!--Slider End-->
    <!--Services Start-->
    <div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Soluções para o Amor e os Negócios</h1>
                        <p>Escolha entre nossos serviços e alcance prosperidade em sua vida amorosa e nos negócios</p>
                    </div>
                </div>
                @foreach($servicos as $servico)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="ast_service_box">
                            <img width="200"
                                 src="{{ file_exists("./files/conteudo/$servico->id/imagem/capa/thumb.jpg") ? "./files/conteudo/$servico->id/imagem/capa/thumb.jpg" : "/imagens/tampao.jpg" }}"
                                 alt="Service">
                            <h4>{{$servico->titulo}}</h4>
                            <p style="text-transform: lowercase; height: 68px; overflow: hidden">{{$servico->descricao}}</p>
                            <div class="clearfix"></div>
                            <a href="{{route('conteudo.view', ['categoria'=> $servico->categoria->url_amiga, 'conteudo'=>$servico->url_amiga])}}"
                               class="ast_btn">Saiba mais</a>
                        </div>
                    </div>
                @endforeach
                {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                {{--                    <div class="ast_service_box">--}}
                {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/sv6.png" alt="Service">--}}
                {{--                        <h4>TRABALHOS</h4>--}}
                {{--                        <p style="text-transform: lowercase">On the other hand, we denounce with righteous indignation--}}
                {{--                            and dislike men.</p>--}}
                {{--                        <div class="clearfix"></div>--}}
                {{--                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                {{--                    <div class="ast_service_box">--}}
                {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/sv4.png" alt="Service">--}}
                {{--                        <h4>BANHOS</h4>--}}
                {{--                        <p style="text-transform: lowercase">On the other hand, we denounce with righteous indignation--}}
                {{--                            and dislike men.</p>--}}
                {{--                        <div class="clearfix"></div>--}}
                {{--                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                {{--                    <div class="ast_service_box">--}}
                {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/sv3.png" alt="Service">--}}
                {{--                        <h4>ORAÇÕES</h4>--}}
                {{--                        <p>On the other hand, we denounce with righteous indignation and dislike men.</p>--}}
                {{--                        <div class="clearfix"></div>--}}
                {{--                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                {{--                    <div class="ast_service_box">--}}
                {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/sv2.png" alt="Service">--}}
                {{--                        <h4>PASSE</h4>--}}
                {{--                        <p>On the other hand, we denounce with righteous indignation and dislike men.</p>--}}
                {{--                        <div class="clearfix"></div>--}}
                {{--                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                {{--                    <div class="ast_service_box">--}}
                {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/sv1.png" alt="Service">--}}
                {{--                        <h4>ARMONIZAÇÃO DE AMBIENTES</h4>--}}
                {{--                        <p>On the other hand, we denounce with righteous indignation and dislike men.</p>--}}
                {{--                        <div class="clearfix"></div>--}}
                {{--                        <a href="service_single.html" class="ast_btn">read more</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!--Services End-->
    {{--    <!--WeDo Start-->--}}
    {{--    <div class="ast_wedo_wrapper ast_toppadder70 ast_bottompadder50">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div--}}
    {{--                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">--}}
    {{--                    <div class="ast_heading">--}}
    {{--                        <h1>daily <span>routines</span></h1>--}}
    {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered--}}
    {{--                            alteration in some form, by injected hummer.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                            <div class="ast_vedic_astrology">--}}
    {{--                                <h4>vedic astrology</h4>--}}
    {{--                                <ul>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_1.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Sun Sign</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_2.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>moon Sign</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_3.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Planets</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_4.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Ascendant</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_5.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Twelve Houses</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vas_6.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Nakshatras</h5>--}}
    {{--                                                <p>On the other hand, we denounce with righteous indignation and dislike--}}
    {{--                                                    men.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                            <div class="ast_vedic_astrology">--}}
    {{--                                <h4>baby names by nakshatra</h4>--}}
    {{--                                <div class="ast_vedic_astro_box">--}}
    {{--                                    <img src="http://kamleshyadav.com/html/astrology/images/content/vdk_bb.jpg" alt="Baby">--}}
    {{--                                    <p>Daily Planetary OverviewIt is a long estable fact that a reader will be distracted by--}}
    {{--                                        the readable content of a page when looking at its layout.</p>--}}
    {{--                                    <a href="#" class="ast_btn pull-right">search now</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                            <div class="ast_vedic_astrology">--}}
    {{--                                <h4>astrology advice</h4>--}}
    {{--                                <ul>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_1.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>career</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_2.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>relationship</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_3.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>finance</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_4.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>business</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_5.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>education</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_6.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>health</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_7.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Ask A Question</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li>--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="http://kamleshyadav.com/html/astrology/images/content/vad_8.png"--}}
    {{--                                                 alt="Sign">--}}
    {{--                                            <div class="ast_vedic_astro_info">--}}
    {{--                                                <h5>Love Remedies</h5>--}}
    {{--                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum--}}
    {{--                                                    as their default model text.</p>--}}
    {{--                                            </div>--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                            <div class="ast_vedic_astrology">--}}
    {{--                                <h4>vastu shastra</h4>--}}
    {{--                                <div class="ast_vedic_astro_box">--}}
    {{--                                    <img src="http://kamleshyadav.com/html/astrology/images/content/vdk_vst.jpg"--}}
    {{--                                         alt="vastu">--}}
    {{--                                    <p>Daily Planetary OverviewIt is a long estable fact that a reader will be distracted by--}}
    {{--                                        the readable content of a page when looking at its layout.</p>--}}
    {{--                                    <a href="#" class="ast_btn pull-right">know more</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                            <div class="ast_vedic_astrology">--}}
    {{--                                <h4>Birth journal (kundli)</h4>--}}
    {{--                                <div class="ast_vedic_astro_box">--}}
    {{--                                    <img src="http://kamleshyadav.com/html/astrology/images/content/vdk_kndl.png"--}}
    {{--                                         alt="Baby">--}}
    {{--                                    <p>Daily Planetary OverviewIt is a long estable fact that a reader will be distracted by--}}
    {{--                                        the readable content of a page when looking at its layout.</p>--}}
    {{--                                    <a href="#" class="ast_btn pull-right">check now</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!--WeDo End-->
    <!--Team Start-->
    {{--    <div class="ast_team_wrapper ast_toppadder70 ast_bottompadder50">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div--}}
    {{--                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">--}}
    {{--                    <div class="ast_heading">--}}
    {{--                        <h1>our <span>experts</span></h1>--}}
    {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered--}}
    {{--                            alteration in some form, by injected hummer.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
    {{--                    <div class="ast_team_box">--}}
    {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/tm1.jpg" alt="team">--}}
    {{--                        <h4><a href="team_single.html">Clarence Kissel</a></h4>--}}
    {{--                        <p>astrologer</p>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
    {{--                    <div class="ast_team_box">--}}
    {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/tm2.jpg" alt="team">--}}
    {{--                        <h4><a href="team_single.html">Marie J. Vela</a></h4>--}}
    {{--                        <p>tarot reader</p>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
    {{--                    <div class="ast_team_box">--}}
    {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/tm3.jpg" alt="team">--}}
    {{--                        <h4><a href="team_single.html">Tim M. Hall</a></h4>--}}
    {{--                        <p>gemstonist</p>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
    {{--                    <div class="ast_team_box">--}}
    {{--                        <img src="http://kamleshyadav.com/html/astrology/images/content/tm4.jpg" alt="team">--}}
    {{--                        <h4><a href="team_single.html">Judith Travis</a></h4>--}}
    {{--                        <p>astrologist</p>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!--Team end-->
    <!--Timer Section start -->
    <div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Resultado do nosso <span>sucesso</span></h1>
{{--                        <p>Cuidado com quem você procura para lhe ajudar, eu trabalho com seriedade e compromisso!</p>--}}
                    </div>
                </div>
                <div class="ast_counter_wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">

                            <svg style="width: 150px" id="Object" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 791.3 791.3"><defs><style>.cls-1{mask:url(#mask);}.cls-10,.cls-12,.cls-14,.cls-16,.cls-2,.cls-4,.cls-6,.cls-8{mix-blend-mode:multiply;}.cls-2{fill:url(#linear-gradient);}.cls-3{mask:url(#mask-2);}.cls-4{fill:url(#linear-gradient-2);}.cls-5{mask:url(#mask-3);}.cls-6{fill:url(#linear-gradient-3);}.cls-7{mask:url(#mask-4);}.cls-8{fill:url(#linear-gradient-4);}.cls-9{mask:url(#mask-5);}.cls-10{fill:url(#linear-gradient-5);}.cls-11{mask:url(#mask-6);}.cls-12{fill:url(#linear-gradient-6);}.cls-13{mask:url(#mask-7);}.cls-14{fill:url(#linear-gradient-7);}.cls-15{mask:url(#mask-8);}.cls-16{fill:url(#linear-gradient-8);}.cls-17{mask:url(#mask-9);}.cls-18{fill:#ff7010;}.cls-19{fill:#031d2e;}.cls-20{mask:url(#mask-10);}.cls-21{mask:url(#mask-11);}.cls-22{mask:url(#mask-12);}.cls-23{mask:url(#mask-13);}.cls-24{mask:url(#mask-14);}.cls-25{mask:url(#mask-15);}.cls-26{mask:url(#mask-16);}.cls-27{filter:url(#luminosity-noclip-16);}.cls-28{filter:url(#luminosity-noclip-15);}.cls-29{filter:url(#luminosity-noclip-14);}.cls-30{filter:url(#luminosity-noclip-13);}.cls-31{filter:url(#luminosity-noclip-12);}.cls-32{filter:url(#luminosity-noclip-11);}.cls-33{filter:url(#luminosity-noclip-10);}.cls-34{filter:url(#luminosity-noclip-9);}.cls-35{filter:url(#luminosity-noclip-8);}.cls-36{filter:url(#luminosity-noclip-7);}.cls-37{filter:url(#luminosity-noclip-6);}.cls-38{filter:url(#luminosity-noclip-5);}.cls-39{filter:url(#luminosity-noclip-4);}.cls-40{filter:url(#luminosity-noclip-3);}.cls-41{filter:url(#luminosity-noclip-2);}.cls-42{filter:url(#luminosity-noclip);}</style><filter id="luminosity-noclip" x="47.58" y="-8553.35" width="694.15" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask" x="47.58" y="-8553.35" width="694.15" height="32766" maskUnits="userSpaceOnUse"><g class="cls-42"/></mask><linearGradient id="linear-gradient" x1="209.66" y1="2414.48" x2="641.77" y2="2165" gradientTransform="translate(1861.16 -1715.54) rotate(45) scale(1.07 1.1)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.54"/><stop offset="1" stop-color="#f1f1f1"/></linearGradient><filter id="luminosity-noclip-2" x="356.32" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-2" x="356.32" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-41"/></mask><linearGradient id="linear-gradient-2" x1="5001.29" y1="2832.38" x2="5080.69" y2="2832.38" gradientTransform="translate(3969.39 5266.01) rotate(-157.5)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.28" stop-color="#bababa"/><stop offset="0.94" stop-color="#101010"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-3" x="680.1" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-3" x="680.1" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-40"/></mask><linearGradient id="linear-gradient-3" x1="719.8" y1="353.91" x2="719.8" y2="433.31" gradientTransform="translate(937.51 -397.36) rotate(76.72)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-4" x="29.8" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-4" x="29.8" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-39"/></mask><linearGradient id="linear-gradient-4" x1="3516.48" y1="-870.46" x2="3595.88" y2="-870.46" gradientTransform="translate(-1829.58 3526.46) rotate(-45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-5" x="36.41" y="-8553.35" width="716.48" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-5" x="36.41" y="-8553.35" width="716.48" height="32766" maskUnits="userSpaceOnUse"><g class="cls-38"/></mask><linearGradient id="linear-gradient-5" x1="3469.33" y1="-808.76" x2="4185.8" y2="-808.76" gradientTransform="translate(1203.41 4222.55) rotate(-90)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.07" stop-color="#dfdfdf"/><stop offset="0.22" stop-color="#a5a5a5"/><stop offset="0.36" stop-color="#727272"/><stop offset="0.5" stop-color="#494949"/><stop offset="0.64" stop-color="#292929"/><stop offset="0.77" stop-color="#121212"/><stop offset="0.89" stop-color="#050505"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-6" x="67.51" y="-8553.35" width="654.28" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-6" x="67.51" y="-8553.35" width="654.28" height="32766" maskUnits="userSpaceOnUse"><g class="cls-37"/></mask><linearGradient id="linear-gradient-6" x1="1271.25" y1="3827.9" x2="1925.53" y2="3827.9" gradientTransform="translate(4222.55 -1203.41) rotate(90)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-7" x="96.36" y="-8553.35" width="596.59" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-7" x="96.36" y="-8553.35" width="596.59" height="32766" maskUnits="userSpaceOnUse"><g class="cls-36"/></mask><linearGradient id="linear-gradient-7" x1="1563.6" y1="-917.8" x2="2160.19" y2="-917.8" gradientTransform="translate(-272.92 2360.51) rotate(-45)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-8" x="353.58" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-8" x="353.58" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-35"/></mask><linearGradient id="linear-gradient-8" x1="353.58" y1="69.84" x2="432.98" y2="69.84" gradientTransform="translate(164.57 -257.64) rotate(45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-9" x="47.58" y="47.91" width="694.15" height="694.15" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-9" x="48.58" y="48.58" width="694.15" height="694.15" maskUnits="userSpaceOnUse"><g class="cls-34"><g transform="translate(1 0.67)"><g class="cls-1"><path class="cls-2" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z"/></g></g></g></mask><filter id="luminosity-noclip-10" x="36.41" y="36.75" width="716.48" height="716.48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-10" x="37.41" y="37.41" width="716.48" height="716.48" maskUnits="userSpaceOnUse"><g class="cls-33"><g transform="translate(1 0.67)"><g class="cls-9"><path class="cls-10" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z"/></g></g></g></mask><filter id="luminosity-noclip-11" x="67.51" y="67.84" width="654.28" height="654.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-11" x="68.51" y="68.51" width="654.28" height="654.28" maskUnits="userSpaceOnUse"><g class="cls-32"><g transform="translate(1 0.67)"><g class="cls-11"><path class="cls-12" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z"/></g></g></g></mask><filter id="luminosity-noclip-12" x="96.36" y="96.69" width="596.59" height="596.59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-12" x="97.36" y="97.36" width="596.59" height="596.59" maskUnits="userSpaceOnUse"><g class="cls-31"><g transform="translate(1 0.67)"><g class="cls-13"><path class="cls-14" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z"/></g></g></g></mask><filter id="luminosity-noclip-13" x="353.58" y="30.14" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-13" x="354.58" y="30.8" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-30"><g transform="translate(1 0.67)"><g class="cls-15"><circle class="cls-16" cx="393.28" cy="69.84" r="39.7" transform="translate(65.81 298.55) rotate(-45)"/></g></g></g></mask><filter id="luminosity-noclip-14" x="356.32" y="680.43" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-14" x="357.32" y="681.1" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-29"><g transform="translate(1 0.67)"><g class="cls-3"><circle class="cls-4" cx="396.02" cy="720.13" r="39.7" transform="translate(-245.44 206.37) rotate(-22.5)"/></g></g></g></mask><filter id="luminosity-noclip-15" x="680.1" y="353.91" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-15" x="681.1" y="354.58" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-28"><g transform="translate(1 0.67)"><g class="cls-5"><circle class="cls-6" cx="719.8" cy="393.61" r="39.7" transform="translate(171.34 1003.72) rotate(-76.72)"/></g></g></g></mask><filter id="luminosity-noclip-16" x="29.8" y="356.65" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-16" x="30.8" y="357.32" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-27"><g transform="translate(1 0.67)"><g class="cls-7"><circle class="cls-8" cx="69.5" cy="396.36" r="39.7" transform="translate(-259.91 165.24) rotate(-45)"/></g></g></g></mask></defs><title>Vector Smart Object</title><g class="cls-17"><path class="cls-18" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z" transform="translate(1 0.67)"/></g><path class="cls-18" d="M-.56,790.2h0a1.49,1.49,0,0,1,0-2.12L787.74-.23a1.51,1.51,0,0,1,2.12,0h0a1.49,1.49,0,0,1,0,2.12L1.56,790.2A1.51,1.51,0,0,1-.56,790.2Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="395.65" cy="395.65" r="237.04"/><g class="cls-20"><path class="cls-18" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z" transform="translate(1 0.67)"/></g><g class="cls-21"><path class="cls-18" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z" transform="translate(1 0.67)"/></g><g class="cls-22"><path class="cls-18" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z" transform="translate(1 0.67)"/></g><g class="cls-23"><circle class="cls-18" cx="393.28" cy="69.84" r="39.7" transform="translate(66.81 299.21) rotate(-45)"/></g><g class="cls-24"><circle class="cls-18" cx="396.02" cy="720.13" r="39.7" transform="translate(-244.44 207.03) rotate(-22.5)"/></g><path class="cls-19" d="M639.77,164.11A16.18,16.18,0,1,1,635,152.67,16,16,0,0,1,639.77,164.11Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,150.15a19.77,19.77,0,1,0,5.76,14A19.66,19.66,0,0,0,637.55,150.15Zm-25.39,25.39a16.19,16.19,0,1,1,11.43,4.73A16,16,0,0,1,612.16,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M623.59,640.1A16.18,16.18,0,1,1,635,635.36,16,16,0,0,1,623.59,640.1Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,637.88a19.76,19.76,0,1,0-14,5.77A19.64,19.64,0,0,0,637.55,637.88ZM612.16,612.5a16.15,16.15,0,1,1-4.74,11.42A16,16,0,0,1,612.16,612.5Z" transform="translate(1 0.67)"/><path class="cls-19" d="M163.77,147.93a16.17,16.17,0,1,1-11.44,4.74A16,16,0,0,1,163.77,147.93Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,150.15a19.75,19.75,0,1,0,14-5.77A19.6,19.6,0,0,0,149.82,150.15Zm25.38,25.39a16.16,16.16,0,1,1,4.74-11.43A16,16,0,0,1,175.2,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M147.6,627.47a16.17,16.17,0,1,1,4.73,11.44A16,16,0,0,1,147.6,627.47Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,641.43a19.76,19.76,0,1,0-5.77-14A19.61,19.61,0,0,0,149.82,641.43ZM175.2,616a16.16,16.16,0,1,1-11.43-4.74A16,16,0,0,1,175.2,616Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="677.87" cy="113.43" r="31.5"/><path class="cls-18" d="M676.87,145.76a33,33,0,0,1-23.33-56.33h0a33,33,0,1,1,23.33,56.33Zm0-63a29.83,29.83,0,0,0-21.21,8.78h0a30,30,0,1,0,21.21-8.78Z" transform="translate(1 0.67)"/><circle class="cls-18" cx="677.87" cy="113.43" r="18.78"/><circle class="cls-19" cx="110.21" cy="681.1" r="31.5"/><path class="cls-18" d="M109.21,713.41a33,33,0,1,1,23.33-9.65A32.89,32.89,0,0,1,109.21,713.41Zm0-63a30,30,0,1,0,21.21,8.77A29.9,29.9,0,0,0,109.21,650.45Z" transform="translate(1 0.67)"/><path class="cls-18" d="M122.49,693.72A18.77,18.77,0,0,1,91.59,687a18.79,18.79,0,0,0,24.13-24.13,18.77,18.77,0,0,1,6.77,30.9Z" transform="translate(1 0.67)"/><path class="cls-18" d="M394.65,633.52a238.53,238.53,0,1,1,168.67-69.86A237,237,0,0,1,394.65,633.52ZM227,227.37l1.06,1.06a235.55,235.55,0,1,0,166.55-69,234,234,0,0,0-166.55,69Z" transform="translate(1 0.67)"/><g class="cls-25"><circle class="cls-18" cx="719.8" cy="393.61" r="39.7" transform="translate(172.34 1004.39) rotate(-76.72)"/></g><g class="cls-26"><circle class="cls-18" cx="69.5" cy="396.36" r="39.7" transform="translate(-258.91 165.9) rotate(-45)"/></g></svg>
                            <h4 style="margin-top: 40px">Atuando a anos no mercado</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <svg style="width: 150px" id="Object" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 791.3 791.3"><defs><style>.cls-1{mask:url(#mask);}.cls-10,.cls-12,.cls-14,.cls-16,.cls-2,.cls-4,.cls-6,.cls-8{mix-blend-mode:multiply;}.cls-2{fill:url(#linear-gradient);}.cls-3{mask:url(#mask-2);}.cls-4{fill:url(#linear-gradient-2);}.cls-5{mask:url(#mask-3);}.cls-6{fill:url(#linear-gradient-3);}.cls-7{mask:url(#mask-4);}.cls-8{fill:url(#linear-gradient-4);}.cls-9{mask:url(#mask-5);}.cls-10{fill:url(#linear-gradient-5);}.cls-11{mask:url(#mask-6);}.cls-12{fill:url(#linear-gradient-6);}.cls-13{mask:url(#mask-7);}.cls-14{fill:url(#linear-gradient-7);}.cls-15{mask:url(#mask-8);}.cls-16{fill:url(#linear-gradient-8);}.cls-17{mask:url(#mask-9);}.cls-18{fill:#ff7010;}.cls-19{fill:#031d2e;}.cls-20{mask:url(#mask-10);}.cls-21{mask:url(#mask-11);}.cls-22{mask:url(#mask-12);}.cls-23{mask:url(#mask-13);}.cls-24{mask:url(#mask-14);}.cls-25{mask:url(#mask-15);}.cls-26{mask:url(#mask-16);}.cls-27{filter:url(#luminosity-noclip-16);}.cls-28{filter:url(#luminosity-noclip-15);}.cls-29{filter:url(#luminosity-noclip-14);}.cls-30{filter:url(#luminosity-noclip-13);}.cls-31{filter:url(#luminosity-noclip-12);}.cls-32{filter:url(#luminosity-noclip-11);}.cls-33{filter:url(#luminosity-noclip-10);}.cls-34{filter:url(#luminosity-noclip-9);}.cls-35{filter:url(#luminosity-noclip-8);}.cls-36{filter:url(#luminosity-noclip-7);}.cls-37{filter:url(#luminosity-noclip-6);}.cls-38{filter:url(#luminosity-noclip-5);}.cls-39{filter:url(#luminosity-noclip-4);}.cls-40{filter:url(#luminosity-noclip-3);}.cls-41{filter:url(#luminosity-noclip-2);}.cls-42{filter:url(#luminosity-noclip);}</style><filter id="luminosity-noclip" x="47.58" y="-8553.35" width="694.15" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask" x="47.58" y="-8553.35" width="694.15" height="32766" maskUnits="userSpaceOnUse"><g class="cls-42"/></mask><linearGradient id="linear-gradient" x1="209.66" y1="2414.48" x2="641.77" y2="2165" gradientTransform="translate(1861.16 -1715.54) rotate(45) scale(1.07 1.1)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.54"/><stop offset="1" stop-color="#f1f1f1"/></linearGradient><filter id="luminosity-noclip-2" x="356.32" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-2" x="356.32" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-41"/></mask><linearGradient id="linear-gradient-2" x1="5001.29" y1="2832.38" x2="5080.69" y2="2832.38" gradientTransform="translate(3969.39 5266.01) rotate(-157.5)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.28" stop-color="#bababa"/><stop offset="0.94" stop-color="#101010"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-3" x="680.1" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-3" x="680.1" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-40"/></mask><linearGradient id="linear-gradient-3" x1="719.8" y1="353.91" x2="719.8" y2="433.31" gradientTransform="translate(937.51 -397.36) rotate(76.72)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-4" x="29.8" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-4" x="29.8" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-39"/></mask><linearGradient id="linear-gradient-4" x1="3516.48" y1="-870.46" x2="3595.88" y2="-870.46" gradientTransform="translate(-1829.58 3526.46) rotate(-45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-5" x="36.41" y="-8553.35" width="716.48" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-5" x="36.41" y="-8553.35" width="716.48" height="32766" maskUnits="userSpaceOnUse"><g class="cls-38"/></mask><linearGradient id="linear-gradient-5" x1="3469.33" y1="-808.76" x2="4185.8" y2="-808.76" gradientTransform="translate(1203.41 4222.55) rotate(-90)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.07" stop-color="#dfdfdf"/><stop offset="0.22" stop-color="#a5a5a5"/><stop offset="0.36" stop-color="#727272"/><stop offset="0.5" stop-color="#494949"/><stop offset="0.64" stop-color="#292929"/><stop offset="0.77" stop-color="#121212"/><stop offset="0.89" stop-color="#050505"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-6" x="67.51" y="-8553.35" width="654.28" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-6" x="67.51" y="-8553.35" width="654.28" height="32766" maskUnits="userSpaceOnUse"><g class="cls-37"/></mask><linearGradient id="linear-gradient-6" x1="1271.25" y1="3827.9" x2="1925.53" y2="3827.9" gradientTransform="translate(4222.55 -1203.41) rotate(90)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-7" x="96.36" y="-8553.35" width="596.59" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-7" x="96.36" y="-8553.35" width="596.59" height="32766" maskUnits="userSpaceOnUse"><g class="cls-36"/></mask><linearGradient id="linear-gradient-7" x1="1563.6" y1="-917.8" x2="2160.19" y2="-917.8" gradientTransform="translate(-272.92 2360.51) rotate(-45)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-8" x="353.58" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-8" x="353.58" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-35"/></mask><linearGradient id="linear-gradient-8" x1="353.58" y1="69.84" x2="432.98" y2="69.84" gradientTransform="translate(164.57 -257.64) rotate(45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-9" x="47.58" y="47.91" width="694.15" height="694.15" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-9" x="48.58" y="48.58" width="694.15" height="694.15" maskUnits="userSpaceOnUse"><g class="cls-34"><g transform="translate(1 0.67)"><g class="cls-1"><path class="cls-2" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z"/></g></g></g></mask><filter id="luminosity-noclip-10" x="36.41" y="36.75" width="716.48" height="716.48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-10" x="37.41" y="37.41" width="716.48" height="716.48" maskUnits="userSpaceOnUse"><g class="cls-33"><g transform="translate(1 0.67)"><g class="cls-9"><path class="cls-10" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z"/></g></g></g></mask><filter id="luminosity-noclip-11" x="67.51" y="67.84" width="654.28" height="654.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-11" x="68.51" y="68.51" width="654.28" height="654.28" maskUnits="userSpaceOnUse"><g class="cls-32"><g transform="translate(1 0.67)"><g class="cls-11"><path class="cls-12" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z"/></g></g></g></mask><filter id="luminosity-noclip-12" x="96.36" y="96.69" width="596.59" height="596.59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-12" x="97.36" y="97.36" width="596.59" height="596.59" maskUnits="userSpaceOnUse"><g class="cls-31"><g transform="translate(1 0.67)"><g class="cls-13"><path class="cls-14" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z"/></g></g></g></mask><filter id="luminosity-noclip-13" x="353.58" y="30.14" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-13" x="354.58" y="30.8" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-30"><g transform="translate(1 0.67)"><g class="cls-15"><circle class="cls-16" cx="393.28" cy="69.84" r="39.7" transform="translate(65.81 298.55) rotate(-45)"/></g></g></g></mask><filter id="luminosity-noclip-14" x="356.32" y="680.43" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-14" x="357.32" y="681.1" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-29"><g transform="translate(1 0.67)"><g class="cls-3"><circle class="cls-4" cx="396.02" cy="720.13" r="39.7" transform="translate(-245.44 206.37) rotate(-22.5)"/></g></g></g></mask><filter id="luminosity-noclip-15" x="680.1" y="353.91" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-15" x="681.1" y="354.58" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-28"><g transform="translate(1 0.67)"><g class="cls-5"><circle class="cls-6" cx="719.8" cy="393.61" r="39.7" transform="translate(171.34 1003.72) rotate(-76.72)"/></g></g></g></mask><filter id="luminosity-noclip-16" x="29.8" y="356.65" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-16" x="30.8" y="357.32" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-27"><g transform="translate(1 0.67)"><g class="cls-7"><circle class="cls-8" cx="69.5" cy="396.36" r="39.7" transform="translate(-259.91 165.24) rotate(-45)"/></g></g></g></mask></defs><title>Vector Smart Object</title><g class="cls-17"><path class="cls-18" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z" transform="translate(1 0.67)"/></g><path class="cls-18" d="M-.56,790.2h0a1.49,1.49,0,0,1,0-2.12L787.74-.23a1.51,1.51,0,0,1,2.12,0h0a1.49,1.49,0,0,1,0,2.12L1.56,790.2A1.51,1.51,0,0,1-.56,790.2Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="395.65" cy="395.65" r="237.04"/><g class="cls-20"><path class="cls-18" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z" transform="translate(1 0.67)"/></g><g class="cls-21"><path class="cls-18" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z" transform="translate(1 0.67)"/></g><g class="cls-22"><path class="cls-18" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z" transform="translate(1 0.67)"/></g><g class="cls-23"><circle class="cls-18" cx="393.28" cy="69.84" r="39.7" transform="translate(66.81 299.21) rotate(-45)"/></g><g class="cls-24"><circle class="cls-18" cx="396.02" cy="720.13" r="39.7" transform="translate(-244.44 207.03) rotate(-22.5)"/></g><path class="cls-19" d="M639.77,164.11A16.18,16.18,0,1,1,635,152.67,16,16,0,0,1,639.77,164.11Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,150.15a19.77,19.77,0,1,0,5.76,14A19.66,19.66,0,0,0,637.55,150.15Zm-25.39,25.39a16.19,16.19,0,1,1,11.43,4.73A16,16,0,0,1,612.16,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M623.59,640.1A16.18,16.18,0,1,1,635,635.36,16,16,0,0,1,623.59,640.1Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,637.88a19.76,19.76,0,1,0-14,5.77A19.64,19.64,0,0,0,637.55,637.88ZM612.16,612.5a16.15,16.15,0,1,1-4.74,11.42A16,16,0,0,1,612.16,612.5Z" transform="translate(1 0.67)"/><path class="cls-19" d="M163.77,147.93a16.17,16.17,0,1,1-11.44,4.74A16,16,0,0,1,163.77,147.93Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,150.15a19.75,19.75,0,1,0,14-5.77A19.6,19.6,0,0,0,149.82,150.15Zm25.38,25.39a16.16,16.16,0,1,1,4.74-11.43A16,16,0,0,1,175.2,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M147.6,627.47a16.17,16.17,0,1,1,4.73,11.44A16,16,0,0,1,147.6,627.47Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,641.43a19.76,19.76,0,1,0-5.77-14A19.61,19.61,0,0,0,149.82,641.43ZM175.2,616a16.16,16.16,0,1,1-11.43-4.74A16,16,0,0,1,175.2,616Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="677.87" cy="113.43" r="31.5"/><path class="cls-18" d="M676.87,145.76a33,33,0,0,1-23.33-56.33h0a33,33,0,1,1,23.33,56.33Zm0-63a29.83,29.83,0,0,0-21.21,8.78h0a30,30,0,1,0,21.21-8.78Z" transform="translate(1 0.67)"/><circle class="cls-18" cx="677.87" cy="113.43" r="18.78"/><circle class="cls-19" cx="110.21" cy="681.1" r="31.5"/><path class="cls-18" d="M109.21,713.41a33,33,0,1,1,23.33-9.65A32.89,32.89,0,0,1,109.21,713.41Zm0-63a30,30,0,1,0,21.21,8.77A29.9,29.9,0,0,0,109.21,650.45Z" transform="translate(1 0.67)"/><path class="cls-18" d="M122.49,693.72A18.77,18.77,0,0,1,91.59,687a18.79,18.79,0,0,0,24.13-24.13,18.77,18.77,0,0,1,6.77,30.9Z" transform="translate(1 0.67)"/><path class="cls-18" d="M394.65,633.52a238.53,238.53,0,1,1,168.67-69.86A237,237,0,0,1,394.65,633.52ZM227,227.37l1.06,1.06a235.55,235.55,0,1,0,166.55-69,234,234,0,0,0-166.55,69Z" transform="translate(1 0.67)"/><g class="cls-25"><circle class="cls-18" cx="719.8" cy="393.61" r="39.7" transform="translate(172.34 1004.39) rotate(-76.72)"/></g><g class="cls-26"><circle class="cls-18" cx="69.5" cy="396.36" r="39.7" transform="translate(-258.91 165.9) rotate(-45)"/></g></svg>
                            <h4 style="margin-top: 40px">Clientes já atendidos</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <svg style="width: 150px" id="Object" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 791.3 791.3"><defs><style>.cls-1{mask:url(#mask);}.cls-10,.cls-12,.cls-14,.cls-16,.cls-2,.cls-4,.cls-6,.cls-8{mix-blend-mode:multiply;}.cls-2{fill:url(#linear-gradient);}.cls-3{mask:url(#mask-2);}.cls-4{fill:url(#linear-gradient-2);}.cls-5{mask:url(#mask-3);}.cls-6{fill:url(#linear-gradient-3);}.cls-7{mask:url(#mask-4);}.cls-8{fill:url(#linear-gradient-4);}.cls-9{mask:url(#mask-5);}.cls-10{fill:url(#linear-gradient-5);}.cls-11{mask:url(#mask-6);}.cls-12{fill:url(#linear-gradient-6);}.cls-13{mask:url(#mask-7);}.cls-14{fill:url(#linear-gradient-7);}.cls-15{mask:url(#mask-8);}.cls-16{fill:url(#linear-gradient-8);}.cls-17{mask:url(#mask-9);}.cls-18{fill:#ff7010;}.cls-19{fill:#031d2e;}.cls-20{mask:url(#mask-10);}.cls-21{mask:url(#mask-11);}.cls-22{mask:url(#mask-12);}.cls-23{mask:url(#mask-13);}.cls-24{mask:url(#mask-14);}.cls-25{mask:url(#mask-15);}.cls-26{mask:url(#mask-16);}.cls-27{filter:url(#luminosity-noclip-16);}.cls-28{filter:url(#luminosity-noclip-15);}.cls-29{filter:url(#luminosity-noclip-14);}.cls-30{filter:url(#luminosity-noclip-13);}.cls-31{filter:url(#luminosity-noclip-12);}.cls-32{filter:url(#luminosity-noclip-11);}.cls-33{filter:url(#luminosity-noclip-10);}.cls-34{filter:url(#luminosity-noclip-9);}.cls-35{filter:url(#luminosity-noclip-8);}.cls-36{filter:url(#luminosity-noclip-7);}.cls-37{filter:url(#luminosity-noclip-6);}.cls-38{filter:url(#luminosity-noclip-5);}.cls-39{filter:url(#luminosity-noclip-4);}.cls-40{filter:url(#luminosity-noclip-3);}.cls-41{filter:url(#luminosity-noclip-2);}.cls-42{filter:url(#luminosity-noclip);}</style><filter id="luminosity-noclip" x="47.58" y="-8553.35" width="694.15" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask" x="47.58" y="-8553.35" width="694.15" height="32766" maskUnits="userSpaceOnUse"><g class="cls-42"/></mask><linearGradient id="linear-gradient" x1="209.66" y1="2414.48" x2="641.77" y2="2165" gradientTransform="translate(1861.16 -1715.54) rotate(45) scale(1.07 1.1)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.54"/><stop offset="1" stop-color="#f1f1f1"/></linearGradient><filter id="luminosity-noclip-2" x="356.32" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-2" x="356.32" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-41"/></mask><linearGradient id="linear-gradient-2" x1="5001.29" y1="2832.38" x2="5080.69" y2="2832.38" gradientTransform="translate(3969.39 5266.01) rotate(-157.5)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.28" stop-color="#bababa"/><stop offset="0.94" stop-color="#101010"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-3" x="680.1" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-3" x="680.1" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-40"/></mask><linearGradient id="linear-gradient-3" x1="719.8" y1="353.91" x2="719.8" y2="433.31" gradientTransform="translate(937.51 -397.36) rotate(76.72)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-4" x="29.8" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-4" x="29.8" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-39"/></mask><linearGradient id="linear-gradient-4" x1="3516.48" y1="-870.46" x2="3595.88" y2="-870.46" gradientTransform="translate(-1829.58 3526.46) rotate(-45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-5" x="36.41" y="-8553.35" width="716.48" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-5" x="36.41" y="-8553.35" width="716.48" height="32766" maskUnits="userSpaceOnUse"><g class="cls-38"/></mask><linearGradient id="linear-gradient-5" x1="3469.33" y1="-808.76" x2="4185.8" y2="-808.76" gradientTransform="translate(1203.41 4222.55) rotate(-90)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.07" stop-color="#dfdfdf"/><stop offset="0.22" stop-color="#a5a5a5"/><stop offset="0.36" stop-color="#727272"/><stop offset="0.5" stop-color="#494949"/><stop offset="0.64" stop-color="#292929"/><stop offset="0.77" stop-color="#121212"/><stop offset="0.89" stop-color="#050505"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-6" x="67.51" y="-8553.35" width="654.28" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-6" x="67.51" y="-8553.35" width="654.28" height="32766" maskUnits="userSpaceOnUse"><g class="cls-37"/></mask><linearGradient id="linear-gradient-6" x1="1271.25" y1="3827.9" x2="1925.53" y2="3827.9" gradientTransform="translate(4222.55 -1203.41) rotate(90)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-7" x="96.36" y="-8553.35" width="596.59" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-7" x="96.36" y="-8553.35" width="596.59" height="32766" maskUnits="userSpaceOnUse"><g class="cls-36"/></mask><linearGradient id="linear-gradient-7" x1="1563.6" y1="-917.8" x2="2160.19" y2="-917.8" gradientTransform="translate(-272.92 2360.51) rotate(-45)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-8" x="353.58" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-8" x="353.58" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-35"/></mask><linearGradient id="linear-gradient-8" x1="353.58" y1="69.84" x2="432.98" y2="69.84" gradientTransform="translate(164.57 -257.64) rotate(45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-9" x="47.58" y="47.91" width="694.15" height="694.15" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-9" x="48.58" y="48.58" width="694.15" height="694.15" maskUnits="userSpaceOnUse"><g class="cls-34"><g transform="translate(1 0.67)"><g class="cls-1"><path class="cls-2" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z"/></g></g></g></mask><filter id="luminosity-noclip-10" x="36.41" y="36.75" width="716.48" height="716.48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-10" x="37.41" y="37.41" width="716.48" height="716.48" maskUnits="userSpaceOnUse"><g class="cls-33"><g transform="translate(1 0.67)"><g class="cls-9"><path class="cls-10" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z"/></g></g></g></mask><filter id="luminosity-noclip-11" x="67.51" y="67.84" width="654.28" height="654.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-11" x="68.51" y="68.51" width="654.28" height="654.28" maskUnits="userSpaceOnUse"><g class="cls-32"><g transform="translate(1 0.67)"><g class="cls-11"><path class="cls-12" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z"/></g></g></g></mask><filter id="luminosity-noclip-12" x="96.36" y="96.69" width="596.59" height="596.59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-12" x="97.36" y="97.36" width="596.59" height="596.59" maskUnits="userSpaceOnUse"><g class="cls-31"><g transform="translate(1 0.67)"><g class="cls-13"><path class="cls-14" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z"/></g></g></g></mask><filter id="luminosity-noclip-13" x="353.58" y="30.14" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-13" x="354.58" y="30.8" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-30"><g transform="translate(1 0.67)"><g class="cls-15"><circle class="cls-16" cx="393.28" cy="69.84" r="39.7" transform="translate(65.81 298.55) rotate(-45)"/></g></g></g></mask><filter id="luminosity-noclip-14" x="356.32" y="680.43" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-14" x="357.32" y="681.1" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-29"><g transform="translate(1 0.67)"><g class="cls-3"><circle class="cls-4" cx="396.02" cy="720.13" r="39.7" transform="translate(-245.44 206.37) rotate(-22.5)"/></g></g></g></mask><filter id="luminosity-noclip-15" x="680.1" y="353.91" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-15" x="681.1" y="354.58" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-28"><g transform="translate(1 0.67)"><g class="cls-5"><circle class="cls-6" cx="719.8" cy="393.61" r="39.7" transform="translate(171.34 1003.72) rotate(-76.72)"/></g></g></g></mask><filter id="luminosity-noclip-16" x="29.8" y="356.65" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-16" x="30.8" y="357.32" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-27"><g transform="translate(1 0.67)"><g class="cls-7"><circle class="cls-8" cx="69.5" cy="396.36" r="39.7" transform="translate(-259.91 165.24) rotate(-45)"/></g></g></g></mask></defs><title>Vector Smart Object</title><g class="cls-17"><path class="cls-18" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z" transform="translate(1 0.67)"/></g><path class="cls-18" d="M-.56,790.2h0a1.49,1.49,0,0,1,0-2.12L787.74-.23a1.51,1.51,0,0,1,2.12,0h0a1.49,1.49,0,0,1,0,2.12L1.56,790.2A1.51,1.51,0,0,1-.56,790.2Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="395.65" cy="395.65" r="237.04"/><g class="cls-20"><path class="cls-18" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z" transform="translate(1 0.67)"/></g><g class="cls-21"><path class="cls-18" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z" transform="translate(1 0.67)"/></g><g class="cls-22"><path class="cls-18" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z" transform="translate(1 0.67)"/></g><g class="cls-23"><circle class="cls-18" cx="393.28" cy="69.84" r="39.7" transform="translate(66.81 299.21) rotate(-45)"/></g><g class="cls-24"><circle class="cls-18" cx="396.02" cy="720.13" r="39.7" transform="translate(-244.44 207.03) rotate(-22.5)"/></g><path class="cls-19" d="M639.77,164.11A16.18,16.18,0,1,1,635,152.67,16,16,0,0,1,639.77,164.11Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,150.15a19.77,19.77,0,1,0,5.76,14A19.66,19.66,0,0,0,637.55,150.15Zm-25.39,25.39a16.19,16.19,0,1,1,11.43,4.73A16,16,0,0,1,612.16,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M623.59,640.1A16.18,16.18,0,1,1,635,635.36,16,16,0,0,1,623.59,640.1Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,637.88a19.76,19.76,0,1,0-14,5.77A19.64,19.64,0,0,0,637.55,637.88ZM612.16,612.5a16.15,16.15,0,1,1-4.74,11.42A16,16,0,0,1,612.16,612.5Z" transform="translate(1 0.67)"/><path class="cls-19" d="M163.77,147.93a16.17,16.17,0,1,1-11.44,4.74A16,16,0,0,1,163.77,147.93Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,150.15a19.75,19.75,0,1,0,14-5.77A19.6,19.6,0,0,0,149.82,150.15Zm25.38,25.39a16.16,16.16,0,1,1,4.74-11.43A16,16,0,0,1,175.2,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M147.6,627.47a16.17,16.17,0,1,1,4.73,11.44A16,16,0,0,1,147.6,627.47Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,641.43a19.76,19.76,0,1,0-5.77-14A19.61,19.61,0,0,0,149.82,641.43ZM175.2,616a16.16,16.16,0,1,1-11.43-4.74A16,16,0,0,1,175.2,616Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="677.87" cy="113.43" r="31.5"/><path class="cls-18" d="M676.87,145.76a33,33,0,0,1-23.33-56.33h0a33,33,0,1,1,23.33,56.33Zm0-63a29.83,29.83,0,0,0-21.21,8.78h0a30,30,0,1,0,21.21-8.78Z" transform="translate(1 0.67)"/><circle class="cls-18" cx="677.87" cy="113.43" r="18.78"/><circle class="cls-19" cx="110.21" cy="681.1" r="31.5"/><path class="cls-18" d="M109.21,713.41a33,33,0,1,1,23.33-9.65A32.89,32.89,0,0,1,109.21,713.41Zm0-63a30,30,0,1,0,21.21,8.77A29.9,29.9,0,0,0,109.21,650.45Z" transform="translate(1 0.67)"/><path class="cls-18" d="M122.49,693.72A18.77,18.77,0,0,1,91.59,687a18.79,18.79,0,0,0,24.13-24.13,18.77,18.77,0,0,1,6.77,30.9Z" transform="translate(1 0.67)"/><path class="cls-18" d="M394.65,633.52a238.53,238.53,0,1,1,168.67-69.86A237,237,0,0,1,394.65,633.52ZM227,227.37l1.06,1.06a235.55,235.55,0,1,0,166.55-69,234,234,0,0,0-166.55,69Z" transform="translate(1 0.67)"/><g class="cls-25"><circle class="cls-18" cx="719.8" cy="393.61" r="39.7" transform="translate(172.34 1004.39) rotate(-76.72)"/></g><g class="cls-26"><circle class="cls-18" cx="69.5" cy="396.36" r="39.7" transform="translate(-258.91 165.9) rotate(-45)"/></g></svg>
                            <h4 style="margin-top: 40px">O mais buscado no google maps</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter">
                            <svg style="width: 150px" id="Object" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 791.3 791.3"><defs><style>.cls-1{mask:url(#mask);}.cls-10,.cls-12,.cls-14,.cls-16,.cls-2,.cls-4,.cls-6,.cls-8{mix-blend-mode:multiply;}.cls-2{fill:url(#linear-gradient);}.cls-3{mask:url(#mask-2);}.cls-4{fill:url(#linear-gradient-2);}.cls-5{mask:url(#mask-3);}.cls-6{fill:url(#linear-gradient-3);}.cls-7{mask:url(#mask-4);}.cls-8{fill:url(#linear-gradient-4);}.cls-9{mask:url(#mask-5);}.cls-10{fill:url(#linear-gradient-5);}.cls-11{mask:url(#mask-6);}.cls-12{fill:url(#linear-gradient-6);}.cls-13{mask:url(#mask-7);}.cls-14{fill:url(#linear-gradient-7);}.cls-15{mask:url(#mask-8);}.cls-16{fill:url(#linear-gradient-8);}.cls-17{mask:url(#mask-9);}.cls-18{fill:#ff7010;}.cls-19{fill:#031d2e;}.cls-20{mask:url(#mask-10);}.cls-21{mask:url(#mask-11);}.cls-22{mask:url(#mask-12);}.cls-23{mask:url(#mask-13);}.cls-24{mask:url(#mask-14);}.cls-25{mask:url(#mask-15);}.cls-26{mask:url(#mask-16);}.cls-27{filter:url(#luminosity-noclip-16);}.cls-28{filter:url(#luminosity-noclip-15);}.cls-29{filter:url(#luminosity-noclip-14);}.cls-30{filter:url(#luminosity-noclip-13);}.cls-31{filter:url(#luminosity-noclip-12);}.cls-32{filter:url(#luminosity-noclip-11);}.cls-33{filter:url(#luminosity-noclip-10);}.cls-34{filter:url(#luminosity-noclip-9);}.cls-35{filter:url(#luminosity-noclip-8);}.cls-36{filter:url(#luminosity-noclip-7);}.cls-37{filter:url(#luminosity-noclip-6);}.cls-38{filter:url(#luminosity-noclip-5);}.cls-39{filter:url(#luminosity-noclip-4);}.cls-40{filter:url(#luminosity-noclip-3);}.cls-41{filter:url(#luminosity-noclip-2);}.cls-42{filter:url(#luminosity-noclip);}</style><filter id="luminosity-noclip" x="47.58" y="-8553.35" width="694.15" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask" x="47.58" y="-8553.35" width="694.15" height="32766" maskUnits="userSpaceOnUse"><g class="cls-42"/></mask><linearGradient id="linear-gradient" x1="209.66" y1="2414.48" x2="641.77" y2="2165" gradientTransform="translate(1861.16 -1715.54) rotate(45) scale(1.07 1.1)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.54"/><stop offset="1" stop-color="#f1f1f1"/></linearGradient><filter id="luminosity-noclip-2" x="356.32" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-2" x="356.32" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-41"/></mask><linearGradient id="linear-gradient-2" x1="5001.29" y1="2832.38" x2="5080.69" y2="2832.38" gradientTransform="translate(3969.39 5266.01) rotate(-157.5)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.28" stop-color="#bababa"/><stop offset="0.94" stop-color="#101010"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-3" x="680.1" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-3" x="680.1" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-40"/></mask><linearGradient id="linear-gradient-3" x1="719.8" y1="353.91" x2="719.8" y2="433.31" gradientTransform="translate(937.51 -397.36) rotate(76.72)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-4" x="29.8" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-4" x="29.8" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-39"/></mask><linearGradient id="linear-gradient-4" x1="3516.48" y1="-870.46" x2="3595.88" y2="-870.46" gradientTransform="translate(-1829.58 3526.46) rotate(-45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-5" x="36.41" y="-8553.35" width="716.48" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-5" x="36.41" y="-8553.35" width="716.48" height="32766" maskUnits="userSpaceOnUse"><g class="cls-38"/></mask><linearGradient id="linear-gradient-5" x1="3469.33" y1="-808.76" x2="4185.8" y2="-808.76" gradientTransform="translate(1203.41 4222.55) rotate(-90)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.07" stop-color="#dfdfdf"/><stop offset="0.22" stop-color="#a5a5a5"/><stop offset="0.36" stop-color="#727272"/><stop offset="0.5" stop-color="#494949"/><stop offset="0.64" stop-color="#292929"/><stop offset="0.77" stop-color="#121212"/><stop offset="0.89" stop-color="#050505"/><stop offset="1"/></linearGradient><filter id="luminosity-noclip-6" x="67.51" y="-8553.35" width="654.28" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-6" x="67.51" y="-8553.35" width="654.28" height="32766" maskUnits="userSpaceOnUse"><g class="cls-37"/></mask><linearGradient id="linear-gradient-6" x1="1271.25" y1="3827.9" x2="1925.53" y2="3827.9" gradientTransform="translate(4222.55 -1203.41) rotate(90)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-7" x="96.36" y="-8553.35" width="596.59" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-7" x="96.36" y="-8553.35" width="596.59" height="32766" maskUnits="userSpaceOnUse"><g class="cls-36"/></mask><linearGradient id="linear-gradient-7" x1="1563.6" y1="-917.8" x2="2160.19" y2="-917.8" gradientTransform="translate(-272.92 2360.51) rotate(-45)" xlink:href="#linear-gradient-5"/><filter id="luminosity-noclip-8" x="353.58" y="-8553.35" width="79.4" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-8" x="353.58" y="-8553.35" width="79.4" height="32766" maskUnits="userSpaceOnUse"><g class="cls-35"/></mask><linearGradient id="linear-gradient-8" x1="353.58" y1="69.84" x2="432.98" y2="69.84" gradientTransform="translate(164.57 -257.64) rotate(45)" xlink:href="#linear-gradient-2"/><filter id="luminosity-noclip-9" x="47.58" y="47.91" width="694.15" height="694.15" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-9" x="48.58" y="48.58" width="694.15" height="694.15" maskUnits="userSpaceOnUse"><g class="cls-34"><g transform="translate(1 0.67)"><g class="cls-1"><path class="cls-2" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z"/></g></g></g></mask><filter id="luminosity-noclip-10" x="36.41" y="36.75" width="716.48" height="716.48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-10" x="37.41" y="37.41" width="716.48" height="716.48" maskUnits="userSpaceOnUse"><g class="cls-33"><g transform="translate(1 0.67)"><g class="cls-9"><path class="cls-10" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z"/></g></g></g></mask><filter id="luminosity-noclip-11" x="67.51" y="67.84" width="654.28" height="654.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-11" x="68.51" y="68.51" width="654.28" height="654.28" maskUnits="userSpaceOnUse"><g class="cls-32"><g transform="translate(1 0.67)"><g class="cls-11"><path class="cls-12" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z"/></g></g></g></mask><filter id="luminosity-noclip-12" x="96.36" y="96.69" width="596.59" height="596.59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-12" x="97.36" y="97.36" width="596.59" height="596.59" maskUnits="userSpaceOnUse"><g class="cls-31"><g transform="translate(1 0.67)"><g class="cls-13"><path class="cls-14" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z"/></g></g></g></mask><filter id="luminosity-noclip-13" x="353.58" y="30.14" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-13" x="354.58" y="30.8" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-30"><g transform="translate(1 0.67)"><g class="cls-15"><circle class="cls-16" cx="393.28" cy="69.84" r="39.7" transform="translate(65.81 298.55) rotate(-45)"/></g></g></g></mask><filter id="luminosity-noclip-14" x="356.32" y="680.43" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-14" x="357.32" y="681.1" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-29"><g transform="translate(1 0.67)"><g class="cls-3"><circle class="cls-4" cx="396.02" cy="720.13" r="39.7" transform="translate(-245.44 206.37) rotate(-22.5)"/></g></g></g></mask><filter id="luminosity-noclip-15" x="680.1" y="353.91" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-15" x="681.1" y="354.58" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-28"><g transform="translate(1 0.67)"><g class="cls-5"><circle class="cls-6" cx="719.8" cy="393.61" r="39.7" transform="translate(171.34 1003.72) rotate(-76.72)"/></g></g></g></mask><filter id="luminosity-noclip-16" x="29.8" y="356.65" width="79.4" height="79.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-16" x="30.8" y="357.32" width="79.4" height="79.4" maskUnits="userSpaceOnUse"><g class="cls-27"><g transform="translate(1 0.67)"><g class="cls-7"><circle class="cls-8" cx="69.5" cy="396.36" r="39.7" transform="translate(-259.91 165.24) rotate(-45)"/></g></g></g></mask></defs><title>Vector Smart Object</title><g class="cls-17"><path class="cls-18" d="M130.33,742.06c-26.12,0-46.88-7.15-61.24-21.51-32.1-32.09-28.17-96.17,11-180.43,39-83.8,108.29-177.75,195.09-264.55S456,119.48,539.79,80.47c84.26-39.22,148.33-43.14,180.43-11s28.16,96.17-11.06,180.43c-39,83.8-108.29,177.75-195.09,264.55S333.32,670.49,249.52,709.5C203,731.16,162.57,742.06,130.33,742.06ZM659,50.91c-90.2,0-241.85,87-381.6,226.78C99,456,6.53,653.75,71.21,718.43c14,14,34.22,20.63,59.13,20.63,90.21,0,241.85-87,381.61-226.78C690.3,333.93,782.77,136.22,718.1,71.54,704.1,57.55,683.87,50.91,659,50.91Z" transform="translate(1 0.67)"/></g><path class="cls-18" d="M-.56,790.2h0a1.49,1.49,0,0,1,0-2.12L787.74-.23a1.51,1.51,0,0,1,2.12,0h0a1.49,1.49,0,0,1,0,2.12L1.56,790.2A1.51,1.51,0,0,1-.56,790.2Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="395.65" cy="395.65" r="237.04"/><g class="cls-20"><path class="cls-18" d="M394.65,753.22A358.33,358.33,0,0,1,255.21,64.9,358.33,358.33,0,0,1,534.09,725.07,356,356,0,0,1,394.65,753.22Zm0-713.47A355.24,355.24,0,0,0,143.46,646.18,355.24,355.24,0,1,0,645.84,143.79,352.91,352.91,0,0,0,394.65,39.75Z" transform="translate(1 0.67)"/></g><g class="cls-21"><path class="cls-18" d="M394.65,722.13A327.14,327.14,0,0,1,163.33,163.66,327.14,327.14,0,0,1,626,626.31,325,325,0,0,1,394.65,722.13Zm0-651.29a324.14,324.14,0,0,0-229.2,553.35,324.14,324.14,0,0,0,458.4-458.41A322,322,0,0,0,394.65,70.84Z" transform="translate(1 0.67)"/></g><g class="cls-22"><path class="cls-18" d="M394.65,693.28a298.28,298.28,0,1,1,210.93-87.37A296.33,296.33,0,0,1,394.65,693.28Zm0-593.59a295.28,295.28,0,1,0,208.81,86.49A293.37,293.37,0,0,0,394.65,99.69Z" transform="translate(1 0.67)"/></g><g class="cls-23"><circle class="cls-18" cx="393.28" cy="69.84" r="39.7" transform="translate(66.81 299.21) rotate(-45)"/></g><g class="cls-24"><circle class="cls-18" cx="396.02" cy="720.13" r="39.7" transform="translate(-244.44 207.03) rotate(-22.5)"/></g><path class="cls-19" d="M639.77,164.11A16.18,16.18,0,1,1,635,152.67,16,16,0,0,1,639.77,164.11Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,150.15a19.77,19.77,0,1,0,5.76,14A19.66,19.66,0,0,0,637.55,150.15Zm-25.39,25.39a16.19,16.19,0,1,1,11.43,4.73A16,16,0,0,1,612.16,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M623.59,640.1A16.18,16.18,0,1,1,635,635.36,16,16,0,0,1,623.59,640.1Z" transform="translate(1 0.67)"/><path class="cls-18" d="M637.55,637.88a19.76,19.76,0,1,0-14,5.77A19.64,19.64,0,0,0,637.55,637.88ZM612.16,612.5a16.15,16.15,0,1,1-4.74,11.42A16,16,0,0,1,612.16,612.5Z" transform="translate(1 0.67)"/><path class="cls-19" d="M163.77,147.93a16.17,16.17,0,1,1-11.44,4.74A16,16,0,0,1,163.77,147.93Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,150.15a19.75,19.75,0,1,0,14-5.77A19.6,19.6,0,0,0,149.82,150.15Zm25.38,25.39a16.16,16.16,0,1,1,4.74-11.43A16,16,0,0,1,175.2,175.54Z" transform="translate(1 0.67)"/><path class="cls-19" d="M147.6,627.47a16.17,16.17,0,1,1,4.73,11.44A16,16,0,0,1,147.6,627.47Z" transform="translate(1 0.67)"/><path class="cls-18" d="M149.82,641.43a19.76,19.76,0,1,0-5.77-14A19.61,19.61,0,0,0,149.82,641.43ZM175.2,616a16.16,16.16,0,1,1-11.43-4.74A16,16,0,0,1,175.2,616Z" transform="translate(1 0.67)"/><circle class="cls-19" cx="677.87" cy="113.43" r="31.5"/><path class="cls-18" d="M676.87,145.76a33,33,0,0,1-23.33-56.33h0a33,33,0,1,1,23.33,56.33Zm0-63a29.83,29.83,0,0,0-21.21,8.78h0a30,30,0,1,0,21.21-8.78Z" transform="translate(1 0.67)"/><circle class="cls-18" cx="677.87" cy="113.43" r="18.78"/><circle class="cls-19" cx="110.21" cy="681.1" r="31.5"/><path class="cls-18" d="M109.21,713.41a33,33,0,1,1,23.33-9.65A32.89,32.89,0,0,1,109.21,713.41Zm0-63a30,30,0,1,0,21.21,8.77A29.9,29.9,0,0,0,109.21,650.45Z" transform="translate(1 0.67)"/><path class="cls-18" d="M122.49,693.72A18.77,18.77,0,0,1,91.59,687a18.79,18.79,0,0,0,24.13-24.13,18.77,18.77,0,0,1,6.77,30.9Z" transform="translate(1 0.67)"/><path class="cls-18" d="M394.65,633.52a238.53,238.53,0,1,1,168.67-69.86A237,237,0,0,1,394.65,633.52ZM227,227.37l1.06,1.06a235.55,235.55,0,1,0,166.55-69,234,234,0,0,0-166.55,69Z" transform="translate(1 0.67)"/><g class="cls-25"><circle class="cls-18" cx="719.8" cy="393.61" r="39.7" transform="translate(172.34 1004.39) rotate(-76.72)"/></g><g class="cls-26"><circle class="cls-18" cx="69.5" cy="396.36" r="39.7" transform="translate(-258.91 165.9) rotate(-45)"/></g></svg>
                            <h4 style="margin-top: 40px">O mais buscado no google</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Timer Section end -->
    {{--    <!--Price Start-->--}}
    {{--    <div class="ast_packages_wrapper ast_toppadder70 ast_bottompadder70">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div--}}
    {{--                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">--}}
    {{--                    <div class="ast_heading ast_bottompadder20">--}}
    {{--                        <h1>price <span>packages</span></h1>--}}
    {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered--}}
    {{--                            alteration in some form, by injected hummer.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="ast_packages_mainbox">--}}
    {{--                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
    {{--                        <div class="ast_packages_box">--}}
    {{--                            <h3>basic Package</h3>--}}
    {{--                            <div class="ast_price">--}}
    {{--                                <h2>$ 1.99</h2>--}}
    {{--                                <p>per month</p>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Full customization</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Ticketing system</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Data security</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Advanced reporting</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Agent groups</li>--}}
    {{--                                <li><i class="fa fa-times" aria-hidden="true"></i>Multiple brandings</li>--}}
    {{--                                <li><i class="fa fa-times" aria-hidden="true"></i>Staffing prediction</li>--}}
    {{--                                <li><i class="fa fa-times" aria-hidden="true"></i>Work scheduler</li>--}}
    {{--                            </ul>--}}
    {{--                            <div class="clearfix"></div>--}}
    {{--                            <button type="submit" class="ast_btn">purchase now</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
    {{--                        <div class="ast_packages_box active">--}}
    {{--                            <span>most popular</span>--}}
    {{--                            <h3>Standard Package</h3>--}}
    {{--                            <div class="ast_price">--}}
    {{--                                <h2>$ 2.99</h2>--}}
    {{--                                <p>per month</p>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Full customization</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Ticketing system</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Data security</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Advanced reporting</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Agent groups</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Multiple brandings</li>--}}
    {{--                                <li><i class="fa fa-times" aria-hidden="true"></i>Staffing prediction</li>--}}
    {{--                                <li><i class="fa fa-times" aria-hidden="true"></i>Work scheduler</li>--}}
    {{--                            </ul>--}}
    {{--                            <div class="clearfix"></div>--}}
    {{--                            <button type="submit" class="ast_btn">purchase now</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
    {{--                        <div class="ast_packages_box">--}}
    {{--                            <h3>pro Package</h3>--}}
    {{--                            <div class="ast_price">--}}
    {{--                                <h2>$ 3.99</h2>--}}
    {{--                                <p>per month</p>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Full customization</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Ticketing system</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Data security</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Advanced reporting</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Agent groups</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Multiple brandings</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Staffing prediction</li>--}}
    {{--                                <li><i class="fa fa-check" aria-hidden="true"></i>Work scheduler</li>--}}
    {{--                            </ul>--}}
    {{--                            <div class="clearfix"></div>--}}
    {{--                            <button type="submit" class="ast_btn">purchase now</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!--Price End-->--}}

    <!-- Testimonials Start-->
    {{--    <div class="ast_testimonial_wrapper ast_toppadder70 ast_bottompadder70">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div--}}
    {{--                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">--}}
    {{--                    <div class="ast_heading">--}}
    {{--                        <h1>what client<span> says</span></h1>--}}
    {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have--}}
    {{--                            suffered--}}
    {{--                            alteration in some form, by injected hummer.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div--}}
    {{--                    class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">--}}
    {{--                    <div class="ast_testimonials_slider">--}}
    {{--                        <div class="owl-carousel owl-theme owl-loaded owl-drag">--}}
    {{--                            <div class="owl-stage-outer">--}}
    {{--                                <div class="owl-stage"--}}
    {{--                                     style="transform: translate3d(-1576px, 0px, 0px); transition: all 0s ease 0s; width: 6307px;">--}}
    {{--                                    <div class="owl-item cloned" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm3.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Louis Robinson, <span>horoscoper</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item cloned" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm4.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Judith Tierney, <span>psychologist</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item active" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm2.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Charlyn Stewart, <span>astrologer</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm1.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Kenneth Page, <span>tarot reader</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm3.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Louis Robinson, <span>horoscoper</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm4.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Judith Tierney, <span>psychologist</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item cloned" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm2.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Charlyn Stewart, <span>astrologer</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="owl-item cloned" style="width: 778.328px; margin-right: 10px;">--}}
    {{--                                        <div class="item">--}}
    {{--                                            <div class="ast_testimonials_slider_box">--}}
    {{--                                                <img src="http://kamleshyadav.com/html/astrology/images/content/tm1.jpg"--}}
    {{--                                                     alt="Testimonial">--}}
    {{--                                                <div class="ast_testimonials_slider_box_text">--}}
    {{--                                                    <p>It is a long established fact that a reader will be distracted by--}}
    {{--                                                        the--}}
    {{--                                                        readable content of a page when looking at its layout. The point--}}
    {{--                                                        of--}}
    {{--                                                        using Lorem Ipsum is that it has a more-or less normal--}}
    {{--                                                        distribution.</p>--}}
    {{--                                                    <h4>Kenneth Page, <span>tarot reader</span></h4>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="owl-nav">--}}
    {{--                                <div class="owl-prev">prev</div>--}}
    {{--                                <div class="owl-next">next</div>--}}
    {{--                            </div>--}}
    {{--                            <div class="owl-dots">--}}
    {{--                                <div class="owl-dot active"><span></span></div>--}}
    {{--                                <div class="owl-dot"><span></span></div>--}}
    {{--                                <div class="owl-dot"><span></span></div>--}}
    {{--                                <div class="owl-dot"><span></span></div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Testimonials End-->

    <!--WhyWe Us Start-->
    <div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Nossos <span>diferenciais</span></h1>
                        <p>Não preciso comprar seguidores em redes sociais para mostrar os resultados dos meus
                            trabalhos, o sucesso dos meus clientes são sigilosos e eles sempre me procuram quando
                            precisam e eu estou disposta a atender. Venha e comprove!</p>
                    </div>
                </div>
                <div class="ast_whywe_info">
                    @foreach($diferencial as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                            <span><img style="margin-top: 20%"
                                       src="{{ file_exists("files/conteudo/$item->id/imagem/capa/capa.jpg") ? "/files/conteudo/$item->id/imagem/capa/capa.jpg" : "/imagens/tampao.jpg" }}"
                                       alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>{{$item->titulo}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
                    {{--                        <div class="ast_whywe_info_box">--}}
                    {{--                            <span><img style="margin-top: 20%" src="/images/ww_2.png"--}}
                    {{--                                       alt=""></span>--}}
                    {{--                            <div class="ast_whywe_info_box_info">--}}
                    {{--                                <p>Sempre matemos contatos com nossos cliente</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
                    {{--                        <div class="ast_whywe_info_box">--}}
                    {{--                            <span><img style="margin-top: 20%" src="/images/ww_3.png"--}}
                    {{--                                       alt=""></span>--}}
                    {{--                            <div class="ast_whywe_info_box_info">--}}
                    {{--                                <p>Somos Reconhecidos pelo bom atendimento ao cliente</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
                    {{--                        <div class="ast_whywe_info_box">--}}
                    {{--                            <span><img style="margin-top: 20%" src="/images/ww_4.png"--}}
                    {{--                                       alt=""></span>--}}
                    {{--                            <div class="ast_whywe_info_box_info">--}}
                    {{--                                <p>Buscamos a melhor solução</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
                    {{--                        <div class="ast_whywe_info_box">--}}
                    {{--                            <span><img style="margin-top: 20%" src="/images/ww_5.png"--}}
                    {{--                                       alt=""></span>--}}
                    {{--                            <div class="ast_whywe_info_box_info">--}}
                    {{--                                <p>Privacidade garantida</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
                    {{--                        <div class="ast_whywe_info_box">--}}
                    {{--                            <span><img style="margin-top: 20%" src="/images/ww_6.png"--}}
                    {{--                                       alt=""></span>--}}
                    {{--                            <div class="ast_whywe_info_box_info">--}}
                    {{--                                <p>Temos a confiança de milhares de clientes</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!--WhyWe Us End-->

    <!--Overview wrapper start -->
    <div class="ast_overview_wrapper ast_toppadder100 ast_bottompadder100">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ast_overview_info">
                        <h1>Qual o objetivo do <span>esoterismo?</span></h1>
                        {!! $objetivo->conteudo !!}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overview wrapper end -->

    <!-- Download wrapper start-->
    <div class="ast_toppadder70 ast_bottompadder70">
        {{--        <div class="container">--}}
        {{--            <div class="row">--}}
        {{--                <div--}}
        {{--                    class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">--}}
        {{--                    <div class="ast_heading">--}}
        {{--                        <h1>Download our <span>Mobile App</span></h1>--}}
        {{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have--}}
        {{--                            suffered--}}
        {{--                            alteration in some form, by injected hummer.</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">--}}
        {{--                    <div class="ast_download_box">--}}
        {{--                        <ul>--}}
        {{--                            <li><a href="#"><img--}}
        {{--                                        src="http://kamleshyadav.com/html/astrology/images/content/download1.png"--}}
        {{--                                        alt="Download" title="Download"></a></li>--}}
        {{--                            <li><a href="#"><img--}}
        {{--                                        src="http://kamleshyadav.com/html/astrology/images/content/download2.png"--}}
        {{--                                        alt="Download" title="Download"></a></li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <!-- Download wrapper End-->

@stop
