<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilitariosController;
use App\Model\Usuario;
use App\Model\Conteudo;
use App\Model\ConteudoCategoria;
use App\Http\Requests\Dashboard\FormNovoConteudo;
use App\Http\Requests\Dashboard\FormUpdateConteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use File;

class conteudoController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $conteudos = Conteudo::Get();
        $ativos = Conteudo::Where('ativo', 1)->get();
        $inativos = Conteudo::Where('ativo', 0)->get();
        $categorias = ConteudoCategoria::Get();
        $modulo = 'Módulo de conteúdo - Listagem';
        $menu = 'conteudo';
        return view('painel.conteudo.conteudo')->with(compact('conteudos', 'ativos', 'categorias', 'inativos', 'modulo', 'menu'));

    }


    public function create(){
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $categorias = ConteudoCategoria::Where('ativo', '1')->Get();
        $modulo = 'Módulo de conteúdo - Novo registro';
        $menu = 'conteudo';
        return view('painel.conteudo.adicionar')->with(compact('categorias', 'modulo', 'menu'));
    }

    public function store(FormNovoConteudo $request, UtilitariosController $util)
    {

        $conteudo = new Conteudo;
        $conteudo->titulo = $request->titulo;
        $conteudo->url_amiga = str_slug($request->titulo);
        $conteudo->cadastro_id = Auth::user()->id;
        $conteudo->descricao = $request->descricao;
        $conteudo->conteudo_categoria_id = $request->conteudo_categoria_id;
        $conteudo->autor = $request->autor;
        $conteudo->tags = $request->tags;
        $conteudo->link_fonte = $request->link_fonte;
        $conteudo->restrito = $request->restrito;
        $conteudo->ativo = $request->ativo;
        $conteudo->conteudo = $request->conteudo;
        $result = $conteudo->save();

        if($result ==  true){

            $conteudos = Conteudo::OrderBy('id', 'desc')->first();
            if ($request->hasFile('capa')) {
                $imagem = $request->file('capa');
                $name='capa.jpg';
                $imagem->move(public_path()."/files/conteudo/$conteudos->id/imagem/capa/", $name);
                $util->makeThumbnails("/files/conteudo/$conteudos->id/imagem/capa/capa.jpg","/files/conteudo/$conteudos->id/imagem/capa/thumb.jpg", 300, ['255','25','255']);

            }


            if ($request->hasFile('imagem')) {
                foreach($request->file('imagem') as $image)
                {
                    $name = explode('.', $image->getClientOriginalName());
                    $name = str_slug($name[0]).'.'.$name[1];
                    $image->move(public_path()."/files/conteudo/$conteudos->id/imagem/", $name);
                }
            }

            if ($request->hasFile('arquivo')) {
                foreach($request->file('arquivo') as $image)
                {
                    $name = explode('.', $image->getClientOriginalName());
                    $name = str_slug($name[0]).'.'.$name[1];
                    $image->move(public_path()."/files/conteudo/$conteudos->id/arquivo/", $name);
                }
            }

        }

        $categorias = ConteudoCategoria::Get();
        $success = 'Dados salvos com sucesso.';
        $menu = 'conteudo';
        return redirect("painel/conteudo/editar/$conteudos->id")->with(compact('success', 'conteudo', 'categorias', 'menu'));


    }

    public function show($id){}


    public function edit($id)
    {
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $categorias = ConteudoCategoria::Get();
        $conteudo = Conteudo::Where('id',$id)->first();
        $modulo = 'Módulo de conteúdo - Edição';
        $menu = 'conteudo';
        return view('painel.conteudo.editar')->with(compact('conteudo', 'categorias', 'modulo', 'menu'));
    }


    public function update(FormUpdateConteudo $request, UtilitariosController $util)
    {

        $conteudo = Conteudo::find($request->id);
        $conteudo->titulo = $request->titulo;
        $conteudo->url_amiga = str_slug($request->titulo);
        $conteudo->descricao = $request->descricao;
        $conteudo->conteudo_categoria_id = $request->conteudo_categoria_id;
        $conteudo->autor = $request->autor;
        $conteudo->tags = $request->tags;
        $conteudo->link_fonte = $request->link_fonte;
        $conteudo->restrito = $request->restrito;
        $conteudo->ativo = $request->ativo;
        $conteudo->conteudo = $request->conteudo;
        $conteudo->save();



        if ($request->hasFile('capa')) {
            $imagem = $request->file('capa');
            $name='capa.jpg';
            $imagem->move(public_path()."/files/conteudo/$request->id/imagem/capa/", $name);
            $util->makeThumbnails("/files/conteudo/$request->id/imagem/capa/capa.jpg","/files/conteudo/$request->id/imagem/capa/thumb.jpg", 300, ['255','25','255']);

        }


        if ($request->hasFile('imagem')) {
            foreach($request->file('imagem') as $image)
            {
                $name = explode('.', $image->getClientOriginalName());
                $name = str_slug($name[0]).'.'.$name[1];
                $image->move(public_path()."/files/conteudo/$request->id/imagem/", $name);
            }
        }


        if ($request->hasFile('arquivo')) {
            foreach($request->file('arquivo') as $image)
            {
                $name = explode('.', $image->getClientOriginalName());
                $name = str_slug($name[0]).'.'.$name[1];
                $image->move(public_path()."/files/conteudo/$request->id/arquivo/", $name);
            }
        }


        return back()->with('success','Dados salvos com sucesso.');

        //return back()->with('success','Dados salvos com sucesso.')->with(compact('conteudo', 'categorias'));

        // request()->validate([
        //      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('images'), $imageName);
       // return back()->with('success','You have successfully upload image.')->with('image',$imageName);
    }


    public function destroy($id, $caminho = null, UtilitariosController $util)
    {
        // Recupera o usuário pelo seu id
        // if ( !$user = User::find($id) )
        // return redirect()->back();

        if($caminho != null){
            $caminho = str_replace("+","/", "$caminho");
            unlink(public_path($caminho));
            return back()->with('success','Dados salvos com sucesso.');
                // return redirect()
                // ->route('users.index')
                // ->with('success', 'Sucesso ao deletar!');
        }

        if($caminho == null){
            $dir = public_path("/files/conteudo/$id/");
            $it = new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new \RecursiveIteratorIterator($it,
                \RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()){
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
            rmdir($dir);
            Conteudo::find($id)->delete();
            $conteudos = Conteudo::Get();
            $ativos = Conteudo::Where('ativo', 1)->get();
            $inativos = Conteudo::Where('ativo', 0)->get();
            $categorias = ConteudoCategoria::Get();
            $success = 'Dados salvos com sucesso.';

            return redirect()->route('painel.conteudo')->with(compact('success', 'conteudos', 'ativos', 'categorias', 'inativos'));
        }
    }

    public function senha(Request $request)
    {
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $usuario = Usuario::find($request->id);
        $usuario->password = Hash::make($request->senha);
        $result =  $usuario->save();
        return back()->with('success','Senha Alterada com sucesso.');

    }

}
