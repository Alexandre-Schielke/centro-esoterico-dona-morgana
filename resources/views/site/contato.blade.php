@extends('site.template')
@section('conteudo')

    <!--Breadcrumb start-->
    <div class="ast_pagetitle" style="padding: 100px 0px 100px 0px!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Fale conosco</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="/">home</a></li>
                        <li>//</li>
                        <li><a href="#">Fale Conosco</a></li>
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
                    <h3>Formulário de contato</h3>
                    <p>Entre em contato e aguarde que um dos nossos colaboradores dará o um retorno.</p>
                    @if ($message = Session::get('SucessoContato'))
                        <ul style="list-style: none!important; margin: 0; padding: 8px; background-color: #28a745; color: #FFF; margin-bottom: 10px">
                                <li><strong>Sucesso!</strong> {{ $message }}</li>
                        </ul>
                    @endif

                    @if ($errors->any())
                        <ul style="list-style: none!important; margin: 0; padding: 8px; background-color: #bb2124; color: #FFF; margin-bottom: 10px">
                            @foreach ($errors->all() as $error)
                                <li><i class="fas fa-exclamation-circle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('formulario.contato') }} "  method="post" id="buscar"  accept-charset="UTF-8">
                        <!-- route('formulario.contato') -->
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="nomeContato" value="{{old('nomeContato')}}" class="form-control" id="nomeContato" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            </div>

                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control phone_with_ddd" name="telContato" value="{{old('telContato')}}" id="telContato" placeholder="Telefone: (99) 09988-5522" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            </div>

                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" name="emailContato" value="{{old('emailContato')}}" id="emailContato" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                            </div>

                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" name="remailContato" value="{{old('remailContato')}}" id="remailContato" placeholder="Confirmar email" data-rule="email" data-msg="Please enter a valid email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="assuntoContato" value="{{old('assuntoContato')}}" id="assuntoContato" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        </div>

                        <div class="form-group">
                            <textarea class="form-control input-contato" name="mensagemContato" value="{{old('mensagemContato')}}" rows="5" data-rule="required" data-msg="Escreva uma mensagem" placeholder="Mensagem"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" title="Enviar mensagem" style="display: block; width: 200px; float: left;  border-radius: 7px; margin: 0 auto;  margin-top: 30px; color:#333; border: 1px solid #999; background:  #FCAD32; border: 0; padding: 8px 30px; color: #fff; transition: 0.3s;">Enviar contato <i class="far fa-paper-plane"></i></button>
                        </div>
                    </form>
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


