<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilitariosController;
use App\Model\Secretaria;
use App\Model\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;


class SecretariaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $secretarias =  Secretaria::Get();
        $modulo = 'Módulo de secretaria - Listagem';
        $menu = 'secretaria';

        return view('dashboard.secretaria.secretaria')->with(compact('secretarias', 'modulo',  'menu'));
    }


    public function create()
    {
        $secretarios = Usuario::Where('perfil_id', '7')->get();
        $modulo = 'Módulo de secretaria - Novo registro';
        $menu = 'secretaria';
        return view('dashboard.secretaria.adicionar')->with(compact('secretarios', 'modulo', 'menu'));
    }


    public function store(Request $request, UtilitariosController $util)
    {

        $secretaria = new Secretaria;
        $secretaria->cadastro_id = Auth::user()->id;
        $secretaria->secretario_id = $request->secretario_id;
        $secretaria->cnpj = $util->numero($request->cnpj);
        $secretaria->email = $request->email;
        $secretaria->telefone = $util->numero($request->telefone);
        $secretaria->cep = $util->numero($request->cep);
        $secretaria->estado = $request->estado;
        $secretaria->cidade = $request->cidade;
        $secretaria->bairro = $request->bairro;
        $secretaria->endereco = $request->endereco;
        $secretaria->numero = $request->numero;
        $secretaria->restrito = $request->restrito;
        $secretaria->ativo = $request->ativo;
        $secretaria->save();

        $secretaria =  Secretaria::OrderBy('id', 'desc')->first();
        $secretarios = Usuario::Where('perfil_id', '7')->get();
        $modulo = 'Módulo de secretaria - Edição';
        $success = 'Dados salvos com sucesso.';
        $menu = 'secretaria';
        return redirect("dashboard/secretaria/editar/$secretaria->id")->with(compact('secretaria', 'secretarios', 'modulo', 'menu', 'util', 'success'));

    }

    public function show($id)
    {

    }


    public function edit($id, UtilitariosController $util)
    {

        $secretaria =  Secretaria::find($id);
        $secretarios = Usuario::Where('perfil_id', '7')->get();
        $modulo = 'Módulo de secretaria - Edição';
        $success = 'Dados salvos com sucesso.';
        $menu = 'secretaria';
        return view('dashboard.secretaria.editar')->with(compact('secretaria', 'secretarios', 'modulo', 'menu', 'util', 'success'));

    }


    public function update(Request $request, UtilitariosController $util)
    {

        $secretaria =  Secretaria::find($request->id);
        $secretaria->secretario_id = $request->secretario_id;
        $secretaria->cnpj = $util->numero($request->cnpj);
        $secretaria->email = $request->email;
        $secretaria->telefone = $util->numero($request->telefone);
        $secretaria->cep = $util->numero($request->cep);
        $secretaria->estado = $request->estado;
        $secretaria->cidade = $request->cidade;
        $secretaria->bairro = $request->bairro;
        $secretaria->endereco = $request->endereco;
        $secretaria->numero = $request->numero;
        $secretaria->restrito = $request->restrito;
        $secretaria->ativo = $request->ativo;
        $secretaria->save();

        return back()->with('success','Dados salvos com sucesso.');

    }

    public function destroy($id)
    {
        Secretaria::find($id)->delete();
        $secretarias =  Secretaria::Get();
        $modulo = 'Módulo de secretaria - Listagem';
        $menu = 'secretaria';
        $success = 'Dados salvos com sucesso.';
        return redirect()->route('dashboard.secretaria')->with(compact('secretarias', 'modulo',  'menu', 'success'));
    }
}
