@extends('site.template')

@section('conteudo')

    <!--Breadcrumb start-->
    <div class="ast_pagetitle" style="padding: 100px 0px 100px 0px!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>{{ $conteudo->titulo  }}</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="/">home</a></li>
                        <li>//</li>
                        <li><a href="{{ route('conteudo.listar', ['categoria' => $conteudo->categoria->url_amiga]) }}">{{ $conteudo->categoria->titulo}}</a></li>
                        <li>//</li>
                        <li><a href="#">{{ $conteudo->titulo  }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Breadcrumb end-->
    <div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                    <div class="ast_blog_box">
                        <div class="ast_blog_img">
{{--                            <span class="ast_date_tag">28 august, 2018</span>--}}
                            <div style="max-height: 50%; overflow: hidden">
                            @if(file_exists("files/conteudo/$conteudo->id/imagem/capa/capa.jpg"))
                                <img  style="width:100%" alt="{{ $conteudo->titulo }}"   src="{{ file_exists("files/conteudo/$conteudo->id/imagem/capa/capa.jpg") ? "/files/conteudo/$conteudo->id/imagem/capa/thumb.jpg" : "/imagens/tampao.jpg" }}">
                            @elseif(file_exists("files/conteudo/$conteudo->id/imagem/capa/thumb.png"))
                                <img style="width:100%"
                                     alt="{{ $conteudo->titulo }}"   src="{{ file_exists("files/conteudo/$conteudo->id/imagem/capa/thumb.png") ? "/files/conteudo/$conteudo->id/imagem/capa/thumb.png" : "/imagens/tampao.jpg" }}">
                            @endif
                            </div>
                        </div>
                        <div class="ast_blog_info">
                            <ul class="ast_blog_info_text">
{{--                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28 comments</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Andrew Coyne</a></li>--}}
                                <li class="text-white" style="color: #FFF!important;">{{ $conteudo->descricao }}</li>
                            </ul>
                            <h2 class="ast_blog_info_heading">{{ $conteudo->titulo }}</h2>
                            <span class="ast_blog_info_details">{!! $conteudo->conteudo !!}</span>
                        </div>
                    </div>
                    <div class="ast_blog_comment_wrapper" style="display: none">
{{--                        <h4 class="ast_blog_heading">all comments</h4>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <div class="ast_blog_comment">--}}
{{--                                    <div class="ast_comment_image">--}}
{{--                                        <img src="images/content/bloger_1.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ast_comment_text">--}}
{{--                                        <h5 class="ast_bloger_name">Andrew Coyne</h5>--}}
{{--                                        <span class="ast_blog_date">May 12, 2018</span>--}}
{{--                                        <p class="ast_blog_post">Lorem ipsum dolor sit amet, consectetur adipiscing--}}
{{--                                            elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus--}}
{{--                                            volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra--}}
{{--                                            justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis--}}
{{--                                            ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>--}}
{{--                                        <a href="" class="ast_comment_reply">Reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <div class="ast_blog_comment">--}}
{{--                                            <div class="ast_comment_image">--}}
{{--                                                <img src="images/content/bloger_2.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="ast_comment_text">--}}
{{--                                                <h5 class="ast_bloger_name">Elexa Styan</h5>--}}
{{--                                                <span class="ast_blog_date">May 13, 2018</span>--}}
{{--                                                <p class="ast_blog_post">Lorem ipsum dolor sit amet, consectetur--}}
{{--                                                    adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce--}}
{{--                                                    sem enim, rhoncus volutpat condimentum ac, placerat semper ligula.--}}
{{--                                                    Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit--}}
{{--                                                    diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla,--}}
{{--                                                    ut facilisis enim. </p>--}}
{{--                                                <a href="" class="ast_comment_reply">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="ast_blog_comment">--}}
{{--                                    <div class="ast_comment_image">--}}
{{--                                        <img src="images/content/bloger_3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ast_comment_text">--}}
{{--                                        <h5 class="ast_bloger_name">Sarah Silvester</h5>--}}
{{--                                        <span class="ast_blog_date">May 14, 2018</span>--}}
{{--                                        <p class="ast_blog_post">Lorem ipsum dolor sit amet, consectetur adipiscing--}}
{{--                                            elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus--}}
{{--                                            volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra--}}
{{--                                            justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis--}}
{{--                                            ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>--}}
{{--                                        <a href="" class="ast_comment_reply">Reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="ast_blog_comment">--}}
{{--                                    <div class="ast_comment_image">--}}
{{--                                        <img src="images/content/bloger_4.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ast_comment_text">--}}
{{--                                        <h5 class="ast_bloger_name">Cody Duff</h5>--}}
{{--                                        <span class="ast_blog_date">May 15, 2018</span>--}}
{{--                                        <p class="ast_blog_post">Lorem ipsum dolor sit amet, consectetur adipiscing--}}
{{--                                            elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus--}}
{{--                                            volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra--}}
{{--                                            justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis--}}
{{--                                            ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>--}}
{{--                                        <a href="" class="ast_comment_reply">Reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                    <div class="ast_blog_message_wrapper" style="display: none">
                        <h4 class="ast_blog_heading">Leave a reply</h4>
                        <div class="ast_blog_messages">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="email" placeholder="Email*">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" id="ed_submit" class="ast_btn">reply</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-lg-pull-9 col-md-pull-9">
                    <div class="sidebar_wrapper">
{{--                        <aside class="widget widget_search">--}}
{{--                            <input type="text" placeholder="Search...">--}}
{{--                            <button type="button"><i class="fa fa-search"></i></button>--}}
{{--                        </aside>--}}

                        <aside class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @foreach($categoriaLista as $categoprialista)
                                    <li><a href="{{ route('conteudo.listar', ['categoria' => $categoprialista->url_amiga]) }}">{{$categoprialista->titulo}}</a></li>
                                @endforeach
                            </ul>
                        </aside>

{{--                        <aside class="widget widget_archive">--}}
{{--                            <h4 class="widget-title">Archives</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">January 2018 (8)</a></li>--}}
{{--                                <li><a href="#">February 2018 (6)</a></li>--}}
{{--                                <li><a href="#">December 2016 (5)</a></li>--}}
{{--                                <li><a href="#">October 2016 (3)</a></li>--}}
{{--                                <li><a href="#">May 2016 (8)</a></li>--}}
{{--                                <li><a href="#">August 2015 (7)</a></li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}

                        <aside class="widget widget_recent_entries">
                            <h4 class="widget-title">Notícias recentes</h4>
                            <ul>
                                <li>nenhuma notícia no momento</li>

                            </ul>
                        </aside>

{{--                        <aside class="widget widget_tag_cloud">--}}
{{--                            <h4 class="widget-title">Search by Tags</h4>--}}
{{--                            <a href="#" class="ed_btn">Zodiac</a>--}}
{{--                            <a href="#" class="ed_btn">Planets</a>--}}
{{--                            <a href="#" class="ed_btn">stars</a>--}}
{{--                            <a href="#" class="ed_btn">astrology</a>--}}
{{--                            <a href="#" class="ed_btn">Earth</a>--}}
{{--                            <a href="#" class="ed_btn">moon</a>--}}
{{--                            <a href="#" class="ed_btn">future</a>--}}
{{--                            <a href="#" class="ed_btn">magical</a>--}}
{{--                            <a href="#" class="ed_btn">sun</a>--}}
{{--                        </aside>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section end-->

@stop

