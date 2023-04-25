<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilitariosController;
use App\Model\Banners;
use App\Model\BannerCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use File;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $banners = Banners::Get();
        $ativos = Banners::Where('ativo', 1)->get();
        $inativos = Banners::Where('ativo', 0)->get();
        $categorias = BannerCategoria::Get();
        $modulo = 'Módulo Banners - Listagem';
        $menu = 'banner';
        return view('painel.banner.banner')->with(compact('banners', 'ativos', 'inativos', 'categorias', 'modulo', 'menu'));
    }


    public function create()
    {
        $categorias = BannerCategoria::Get();
        $modulo = 'Módulo banner- novo banner';
        $menu = 'banner';
        return view('painel.banner.adicionar')->with(compact('categorias', 'modulo', 'menu'));
    }


    public function store(Request $request, UtilitariosController $util)
    {
        $banner = new Banners;
        $banner->titulo = $request->titulo;
        $banner->cadastro_id = Auth::user()->id;
        $banner->banner_categoria_id = $request->banner_categoria_id;
        $banner->descricao = $request->descricao;
        $banner->conteudo_ref = $request->conteudo_ref;
        $banner->link_externo = $request->link_externo;
        $banner->restrito = $request->restrito;
        $banner->ativo = $request->ativo;
        $result = $banner->save();

        if($result ==  true){

            $banner = Banners::OrderBy('id', 'desc')->first();

            if ($request->hasFile('capa')) {
                $imagem = $request->file('capa');
                $name='capa.jpg';
                $imagem->move(public_path()."/files/banner/$banner->id/", $name);
                $util->makeThumbnails("/files/banner/$banner->id/capa.jpg","/files/banner/$banner->id/thumb.jpg", 500, ['255','25','255']);
                $util->makeThumbnails("/files/banner/$banner->id/capa.jpg","/files/banner/$banner->id/thumb-banner.jpg", 1500, ['255','25','255']);
            }

        }

        $categorias = BannerCategoria::Get();
        $modulo = 'Módulo banner- Edição';
        $success = 'Dados salvos com sucesso.';
        $menu = 'banner';
        return redirect("painel/banner/editar/$banner->id")->with(compact('success', 'banner', 'categorias', 'menu'));
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categorias = BannerCategoria::Get();
        $banner = Banners::Where('id',$id)->first();
        $modulo = 'Módulo banner- Edição';
        $menu = 'banner';
        return view('painel.banner.editar')->with(compact('banner', 'categorias', 'modulo', 'menu'));
    }


    public function update(Request $request, UtilitariosController $util)
    {
        $banner = Banners::find($request->id);
        $banner->titulo = $request->titulo;
        $banner->banner_categoria_id = $request->banner_categoria_id;
        $banner->descricao = $request->descricao;
        $banner->conteudo_ref = $request->conteudo_ref;
        $banner->link_externo = $request->link_externo;
        $banner->restrito = $request->restrito;
        $banner->ativo = $request->ativo;
        $banner->save();

        if ($request->hasFile('capa')) {
            $imagem = $request->file('capa');
            $name='capa.jpg';
            $imagem->move(public_path()."/files/banner/$request->id/", $name);
            $util->makeThumbnails("/files/banner/$banner->id/capa.jpg","/files/banner/$banner->id/thumb.jpg", 500, ['255','25','255']);
            $util->makeThumbnails("/files/banner/$banner->id/capa.jpg","/files/banner/$banner->id/thumb-banner.jpg", 1500, ['255','25','255']);
        }


        return back()->with('success','Dados salvos com sucesso.');
    }

    public function destroy($id, $caminho = null, UtilitariosController $util)
    {

        if($caminho != null){
            $dir = public_path("/files/banner/$id/");
            $util->deletarPasta($dir);
            return back()->with('success','Dados salvos com sucesso.');
        }

        if($caminho == null){
            Banners::find($id)->delete();
            $dir = public_path("/files/banner/$id/");
            $util->deletarPasta($dir);
            $banners = Banners::Get();
            $ativos = Banners::Where('ativo', 1)->get();
            $inativos = Banners::Where('ativo', 0)->get();
            $categorias = BannerCategoria::Get();
            $modulo = 'Módulo Banners - Listagem';
            $menu = 'banner';
            $success = 'Dados salvos com sucesso.';
            return redirect()->route('painel.banner')->with(compact('banners', 'ativos', 'inativos', 'categorias', 'modulo', 'menu', 'success'));
        }
    }
}
