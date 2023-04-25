<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\UtilitariosController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FormUpdateUsuario;
use App\Http\Requests\Dashboard\FormNovoUsuario;
use App\Model\Arquivo;
use App\Model\Usuario;
use App\Model\Perfil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
        $usuarios = Usuario::Where('id', '<>', 1)->get();
        $admins = Usuario::Where('perfil_id', '=', 1)->get();
        $perfis = Perfil::Get();
        $inativos = Usuario::Where('ativo', 0)->get();
        $modulo = 'Módulo de usuário - Listagem';
        $menu = 'usuario';
        return view('painel.usuario.index')->with(compact('usuarios', 'admins', 'perfis', 'inativos', 'modulo',  'menu'));

    }


    public function create(UtilitariosController $util)
    {
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $usuario = Usuario::Get();
        $perfis = Perfil::Where('id', '<>', '1')->get();
        $modulo = 'Módulo de usuário - Novo registro';
        $menu = 'usuário';
        return view('painel.usuario.adicionar')->with(compact('perfis','usuario', 'modulo', 'menu', 'util'));
    }



    public function store(FormNovoUsuario $request, UtilitariosController $util)
    {
        $usuario = new Usuario;
        $usuario->password = Hash::make($request->senha);
        $usuario->name = $request->name;
        $usuario->cadastro_id = Auth::user()->id;
        $usuario->perfil_id = $util->numero($request->perfil_id);
        $usuario->email = $request->email;
        $usuario->email_secundario = $request->email_secundario;
        $usuario->cpf = $util->numero($request->cpf);
        $usuario->telefone = $util->numero($request->telefone);
        $usuario->telefone_secundario = $util->numero($request->telefone_secundario);
        $usuario->nascimento = $util->dataUs($request->nascimento);
        $usuario->sexo = $request->sexo;
        $usuario->nome_pai = $request->nome_pai;
        $usuario->nome_mae = $request->nome_mae;
        $usuario->cargo = $request->cargo;
        $usuario->data_entrada = $util->dataUs($request->data_entrada);
        $usuario->data_saida = $util->dataUs($request->data_saida);
        $usuario->observacao = $request->observacao;
        $usuario->cep = $util->numero($request->cep);
        $usuario->estado = $request->estado;
        $usuario->cidade = $request->cidade;
        $usuario->bairro = $request->bairro;
        $usuario->endereco = $request->endereco;
        $usuario->numero = $request->numero;
        $usuario->restrito = $request->restrito;
        $usuario->sexo = $request->sexo;
        $usuario->ativo = $request->ativo;
        $usuario->save();

        $usuario = Usuario::OrderBy('id', 'desc')->first();
        $perfis = Perfil::Get();
        $modulo = 'Módulo de usuário - Edição';
        $success = 'Dados salvos com sucesso.';
        $menu = 'usuario';
        return redirect("dashboard/usuario/editar/$usuario->id")->with(compact('perfis', 'usuario', 'modulo', 'menu', 'util', 'success'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id, UtilitariosController $util)
    {
        if(Auth::user()->perfil_id == 2){
            return redirect('/');
        }
        $perfis = Perfil::Get();
        $usuario = Usuario::Where('id',$id)->first();
        $arquivos = Arquivo::Where('cadastro_id', $id)->get();
        $modulo = 'Módulo de usuário - Edição';
        $menu = 'usuario';
        return view('painel.usuario.editar')->with(compact('perfis', 'usuario', 'modulo', 'menu', 'util', 'arquivos'));

    }


    public function update(FormUpdateUsuario $request, UtilitariosController $util)
    {

        $usuario = Usuario::find($request->id);
        $usuario->name = $request->name;
        $usuario->perfil_id = $util->numero($request->perfil_id);
        $usuario->email = $request->email;
        $usuario->email_secundario = $request->email_secundario;
        $usuario->cpf = $util->numero($request->cpf);
        $usuario->telefone = $util->numero($request->telefone);
        $usuario->telefone_secundario = $util->numero($request->telefone_secundario);
        $usuario->nascimento = $util->dataUs($request->nascimento);
        $usuario->sexo = $request->sexo;
        $usuario->nome_pai = $request->nome_pai;
        $usuario->nome_mae = $request->nome_mae;
        $usuario->observacao = $request->observacao;
        $usuario->cep = $util->numero($request->cep);
        $usuario->estado = $request->estado;
        $usuario->cidade = $request->cidade;
        $usuario->bairro = $request->bairro;
        $usuario->logradouro = $request->endereco;
        $usuario->numero = $request->numero;
        $usuario->restrito = $request->restrito;
        $usuario->sexo = $request->sexo;
        $usuario->ativo = $request->ativo;
        $usuario->update();

        $success = 'Dados salvos com sucesso.';
        return back()->with(compact('success'));

    }


    public function destroy($id)
    {

        Usuario::find($id)->delete();

        return redirect()->route('painel.usuario.listar');

    }

    public  function  arquivoDestoy($caminho, $id)
    {

        $caminho = str_replace("+","/", "$caminho");
        unlink(public_path($caminho));
        Arquivo::find($id)->delete();
        return back()->with('success','Documento excluido com sucesso.');
    }
}
