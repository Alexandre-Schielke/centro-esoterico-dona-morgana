<?php

namespace App\Http\Controllers\Painel\transparencia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilitariosController;
use App\Model\Arquivo;
use App\Model\ArquivoCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransparenciaAdministrativoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(UtilitariosController $util)
    {
        $arquivos = Arquivo::Where('arquivo_categoria_id', '9')->get();
        $modulo = 'Módulo de transparência - Listagem';
        $menu = 'transparencia';
        $menu2 = 'administrativo';
        $menu3 = 'lista-adm';
        return view('dashboard.transparencia.administrativo.transparencia')->with(compact('arquivos','modulo', 'util', 'menu', 'menu2', 'menu3'));
    }


    public function create()
    {

        $categorias = ArquivoCategoria::Where('categoria_pai_id', '6')->Get();
        $modulo = 'Novo arquivo de transparência - Administrativo';
        $menu = 'transparencia';
        $menu2 = 'administrativo';
        $menu3 = 'novo-adm';
        return view('dashboard.transparencia.administrativo.adicionar')->with(compact('categorias', 'modulo', 'menu', 'menu2', 'menu3'));
    }


    public function store(Request $request, UtilitariosController $util)
    {
        $arquivo = new Arquivo;
        $arquivo->titulo = $request->titulo;
        $arquivo->arquivo_categoria_id = $request->arquivo_categoria_id;
        $arquivo->tipo_arquivo_id = '2';
        $arquivo->cadastro_id = Auth::user()->id;
        $arquivo->data_referente = $util->dataUs($request->data_referente);
        $arquivo->restrito = $request->restrito;
        $arquivo->ativo = $request->ativo;
        $result = $arquivo->save();

        if($result ==  true){
            $arq = Arquivo::OrderBy('id', 'desc')->first();
            //files/documentos/84/1-trimestre-2018.pdf
            if ($request->hasFile('arquivo')) {


                $imagem = $request->file('arquivo');
                $name = "administrativo-balancete-$arquivo->data_referente-cosemspa.pdf";
                $imagem->move(public_path()."/files/documentos/$arq->id/", $name);
                $arq->url = "/files/documentos/$arq->id/$name";
                $arq->save();
            }
        }

        $categorias = ArquivoCategoria::Where('categoria_pai_id', '4')->Get();
        $success = 'Dados salvos com sucesso.';
        $modulo = 'Módulo de transparência - editar';
        $menu = 'transparencia';
        $menu2 = 'administrativo';
        return redirect("dashboard/transparencia/administrativo/editar/$arq->id")->with(compact('success',  'categorias', 'menu', 'menu2'));
    }


    public function show($id)
    {

    }

    public function edit($id, UtilitariosController $util)
    {

        $categorias = ArquivoCategoria::Where('categoria_pai_id', '4')->Get();
        $arquivo = Arquivo::Where('id',$id)->first();
        $modulo = 'Módulo de transparência - editar';
        //controle do menu
        $menu = 'transparencia';
        $menu2 = 'administrativo';
        return view('dashboard.transparencia.administrativo.editar')->with(compact('arquivo', 'categorias', 'modulo', 'util', 'menu', 'menu2'));

    }

    public function update(Request $request,  UtilitariosController $util)
    {
        $arquivo = Arquivo::find($request->id);
        $arquivo->titulo = $request->titulo;
        $arquivo->arquivo_categoria_id = $request->arquivo_categoria_id;
        $arquivo->tipo_arquivo_id = '2';
        $arquivo->cadastro_id = Auth::user()->id;
        $arquivo->data_referente = $util->dataUs($request->data_referente);
        $arquivo->restrito = $request->restrito;
        $arquivo->ativo = $request->ativo;
        $result = $arquivo->save();
        if($result ==  true){
            if ($request->hasFile('arquivo')) {
                $arq = Arquivo::find($request->id);
                if($arquivo->url != null){
                    unlink(public_path($arquivo->url));
                }
                $file = $request->file('arquivo');
                $name = "administrativo-balancete-$arquivo->data_referente-cosemspa.pdf";
                $file->move(public_path()."/files/documentos/$arquivo->id/", $name);
                $arq->url = "/files/documentos/$arq->id/$name";
                $arq->save();
            }
        }
        return back()->with('success','Dados salvos com sucesso.');
    }


    public function destroy($id, $caminho = null, UtilitariosController $util)
    {

        if($caminho != null){
            $caminho = str_replace("+","/", "$caminho");
            $arquivo = Arquivo::find($id);
            if(file_exists(public_path($arquivo->url))){
                unlink(public_path($arquivo->url));
            }
            $arquivo->url = null;
            $arquivo->save();
            return back()->with('success','Dados salvos com sucesso.');
                // return redirect()
                // ->route('users.index')
                // ->with('success', 'Sucesso ao deletar!');
        }

        if($caminho == null){
            $arquivo = Arquivo::find($id);
            if($arquivo->url != null){
                if(file_exists(public_path($arquivo->url))){
                    unlink(public_path($arquivo->url));
                }
            }
            $arquivo->delete();
            $arquivos = Arquivo::Where('arquivo_categoria_id', '9')->get();
            $modulo = 'Módulo de transparência - Listagem';
            //controle do menu
            $menu = 'transparencia';
            $menu2 = 'administrativo';
            $menu3 = 'lista-adm';
            $success = 'Dados salvos com sucesso.';
            return redirect()->route('dashboard.transparencia.administrativo')->with(compact('arquivos','modulo',  'menu', 'menu2', 'menu3', 'util', 'success'));
        }
    }
}
