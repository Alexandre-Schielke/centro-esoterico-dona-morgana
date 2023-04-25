<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\UtilitariosController;
use App\Http\Controllers\Controller;
class LogoController extends Controller
{

    public function edit()
    {
        $modulo = 'Módulo Logo - Formulário';
        $menu = 'logo';
        return view("dashboard.logo.editar")->with(compact('modulo','menu'));
    }

    public function update(Request $request, UtilitariosController $util)
    {

        if($request->hasFile('logo-topo')){
            $util->deletarPasta(public_path("/imagens/logo/logo-topo/"));
            $imagem = $request->file('logo-topo');
            $name = explode('.', $imagem->getClientOriginalName());
            $extensao = $name[1];
            $name="logo-topo.$extensao";
            $imagem->move(public_path()."/imagens/logo/logo-topo/", $name);

            if($extensao == 'png'){
                $util->makeThumbnails("/imagens/logo/logo-topo/logo-topo.$extensao","/imagens/logo/logo-topo/logo-topo-thumb.$extensao", 300, 'transparent');

            }else{
                $util->makeThumbnails("/imagens/logo/logo-topo/logo-topo.$extensao","/imagens/logo/logo-topo/logo-topo-thumb.$extensao", 300, ['255','25','255']);

            }

        }


        if($request->hasFile('logo-rodape')) {
            $util->deletarPasta(public_path("/imagens/logo/logo-rodape/"));
            $imagem = $request->file('logo-rodape');
            $name = explode('.', $imagem->getClientOriginalName());
            $extensao = $name[1];
            $name="logo-rodape.$extensao";
            $imagem->move(public_path()."/imagens/logo/logo-rodape/", $name);

            if($extensao == 'png'){
                $util->makeThumbnails("/imagens/logo/logo-rodape/logo-rodape.$extensao","/imagens/logo/logo-rodape/logo-rodape-thumb.$extensao", 300, 'transparent');

            }else{
                $util->makeThumbnails("/imagens/logo/logo-rodape/logo-rodape.$extensao","/imagens/logo/logo-rodape/logo-rodape-thumb.$extensao", 300, ['255','25','255']);

            }

        }

        $modulo = 'Módulo Logo - Formulário';
        $menu = 'logo';
        $success = 'Dados salvos com sucesso.';
        return  view("dashboard.logo.editar")->with(compact('success', 'modulo', 'menu'));


    }


    public function destroy($id)
    {
        //
    }
}
