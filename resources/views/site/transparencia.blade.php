@extends('site.template')


@section('conteudo')

<section id="conteudo-corpo">
	<div class="container">
		<div style="float: left; width: 28%; margin-top: 4%;">
		    <div class="accordion">
                <h2>Arquivo</h2>
                <div class="accordion-item">
                    <!-- <a class="marcador">categoria</a> -->
                    <a class="marcador">categoria</a>
                    <div class="content>" style="padding: 0">
                        
                        <a href="#" class="link-categoria ">Todos</a><br/>
                        <a href="#" class="link-categoria ">2018</a><br/>
                        <a href="#" class="link-categoria ">2019</a><br/>					
                    </div>
                </div>	
			</div>
		</div>
		<div class="conteudo" style="float: right; margin-top: 3%;">

			<Style>
				.container-transparencia{
					width: 100%;
					float: left;
				}
				.box-transparencia{
					Width: 100%;
					float: left;
					border-left: 4px solid #7083E0;
					border-bottom:1px solid #ccc;
					box-sizing: border-box;
					padding: 2%;
					transition: 0.4s;
				}
				.box-transparencia:hover{
					border-left:4px solid #e54e53;
					transition: 0.4s;
				}
				.box-transparencia p{
					padding: 0.2%;
					background-color: #7083E0;
					border-radius: 8px;
					color: #FFF;
					max-width: 200px; 
					text-align: center;
					margin: 4px 0;
				}
				.box-transparencia a{
					cursor: pointer;
					color: #e54e53;
				}
			</Style>
			<div class="container-transparencia">
						
                @foreach( $transparencia as $arquivo )
                    <div class="box-transparencia">
                        <h4>{{ $arquivo->titulo }}</h4>
                        <p></p>
                        <span><a href="{{ $arquivo->url }}" download>BAIXAR <i class="fas fa-download"></i></a> <span style="display: inline-block; margin: 0 5px;">|</span> <span><a href="{{ $arquivo->url }}">VISUALIZAR <i class="fas fa-eye"></i></a> <br/>Data de publicação: <strong>{{ $util->dataBr($arquivo->data_referente) }}</strong></span>
                    </div>
                @endforeach

			</div>
		</div>	
	</div>
</section>
<br/><br/>

@stop