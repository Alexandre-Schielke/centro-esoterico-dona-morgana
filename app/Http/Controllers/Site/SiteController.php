<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\UtilitariosController;
use App\Http\Requests\Dashboard\FormNovoUsuario;
use App\Model\Arquivo;
use App\Model\TipoArquivo;
use App\Model\Usuario;
use App\Model\AssinaturaSorcio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Banners;
use App\Model\Conteudo;
use App\Model\ConteudoCategoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SiteController extends Controller
{

//    public function testeUrl(UtilitariosController $util)
//    {
//        $teste = "aqui  teste";
//        $conteudos = Conteudo::get();
//        foreach ($conteudos as $conteudo){
//            $conteudoP = Conteudo::find($conteudo->id);
//            $conteudoP->url_amiga = $util->url($conteudo->titulo);
//            $conteudoP->save();
//        }
//        dd($util->url($teste));
//    }

    public function index(UtilitariosController $util)
    {
        $diferencial = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '7')->get();
        $banners = Banners::Where('ativo', '1')->where('banner_categoria_id', '1')->orderBy('id', 'desc')->get();
        $conteudos = Conteudo::Where('ativo', '1')->get();
        $quemSomos = Conteudo::Where('ativo', '1')->where('id', '1')->first();
        $objetivo = Conteudo::Where('id', '378')->first();
        $servicos = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '2')->get();
        $noticias = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '3')->orderBy('id', 'desc')->paginate(30);
        $catServicos = ConteudoCategoria::Where('ativo', '1')->where('id', '2')->first();
        return view('site.index')->with(compact('util', 'banners', 'conteudos', 'quemSomos', 'servicos', 'diferencial', 'objetivo', 'catServicos'));
    }


    public function conteudo($categoria = null, $conteudo)
    {
        $servicos = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '2')->get();
        $catQuemSomos = ConteudoCategoria::where('id', '1')->first();
        $catNoticias = ConteudoCategoria::where('id', '3')->first();
        $catServicos = ConteudoCategoria::where('id', '2')->first();
        $diretoria = Conteudo::Where('ativo', '1')
            ->where('id', '2')
            ->first();

        $missao = Conteudo::Where('ativo', '1')
            ->where('id', '4')
            ->first();

        $sind = Conteudo::Where('ativo', '1')
            ->where('id', '1')
            ->first();

        $array = array('6', '7', '4 ');

        $categoriaLista = ConteudoCategoria::Where('ativo', '=', '1')
            ->whereNotIn('id', $array)
            ->orderBy('id', 'asc')->get();

        $conteudo = Conteudo::Where('url_amiga', $conteudo)
            ->where('ativo', '1')
            ->first();

        if ($conteudo == null) {
            return view('site.404');
        } else {
            return view('site.conteudo')->with(compact('diretoria', 'missao', 'sind', 'conteudo', 'categoriaLista', 'catQuemSomos', 'catNoticias', 'catServicos', 'servicos'));
        }
    }

    public function listaConteudo($categoria, UtilitariosController $util)
    {
        $servicos = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '2')->get();
        $catQuemSomos = ConteudoCategoria::where('id', '1')->first();
        $catNoticias = ConteudoCategoria::where('id', '3')->first();
        $catServicos = ConteudoCategoria::where('id', '2')->first();
        $diretoria = Conteudo::Where('ativo', '1')->where('id', '2')->first();
        $missao = Conteudo::Where('ativo', '1')->where('id', '4')->first();
        $sind = Conteudo::Where('ativo', '1')->where('id', '1')->first();

        //php artisan vendor:publish --tag=laravel-pagination - gerar páginação caminho: /resources/views/vendor/pagination]
        $categoriaLista = ConteudoCategoria::Where('ativo', '=', '1')
            ->where('id', '<>', '8')
            ->where('id', '<>', '2')
            ->where('ativo', '=', '1')
            ->orderBy('id', 'asc')->get();

        $categoriaConteudo = ConteudoCategoria::Where('url_amiga', $categoria)->first();
        $conteudoLista = Conteudo::Where('conteudo_categoria_id', '=', $categoriaConteudo->id)
            ->where('ativo', '=', '1')
            ->orderBy('conteudo.id', 'desc')
            ->paginate(10);
        $conteudo = ConteudoCategoria::Where('id', $categoriaConteudo->id)->first();

        if ($categoriaLista == null) {
            return view('site.404');
        } else {
            return view('site.categoria')->with(compact('util', 'diretoria', 'missao', 'sind', 'conteudoLista', 'categoriaLista', 'categoria', 'catQuemSomos', 'catNoticias', 'catServicos', 'categoriaConteudo', 'conteudo', 'servicos'));
        }
    }

    public function contato() //formulario de contato
    {
        $servicos = Conteudo::Where('ativo', '1')->where('conteudo_categoria_id', '=', '2')->get();
        $catQuemSomos = ConteudoCategoria::where('id', '1')->first();
        $catNoticias = ConteudoCategoria::where('id', '3')->first();
        $catServicos = ConteudoCategoria::where('id', '2')->first();
        $diretoria = Conteudo::Where('ativo', '1')
            ->where('id', '2')
            ->first();

        $missao = Conteudo::Where('ativo', '1')
            ->where('id', '4')
            ->first();

        $sind = Conteudo::Where('ativo', '1')
            ->where('id', '1')
            ->first();

        $array = array('6', '7', '4 ');

        $categoriaLista = ConteudoCategoria::Where('ativo', '=', '1')
            ->whereNotIn('id', $array)
            ->orderBy('id', 'asc')->get();

        return view('site.contato')->with(compact('catQuemSomos', 'catNoticias', 'catServicos', 'diretoria', 'missao', 'sind', 'categoriaLista', 'servicos'));
    }

    public function arquivoDestoy($caminho, $id)
    {
        $caminho = str_replace("+", "/", "$caminho");
        unlink(public_path($caminho));
        Arquivo::find($id)->delete();
        $user = Auth::user();
        $sucesso = 'Documento excluido com sucesso.';
        $arquivos = Arquivo::Where('arquivo_categoria_id', '10')->where('cadastro_id', $user->id)->get();
        return view('site.sorcio.documentos')->with(compact('sucesso', 'arquivos'));
    }


}
