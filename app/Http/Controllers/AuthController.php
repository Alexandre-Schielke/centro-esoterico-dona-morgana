<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true){
//            return view('painel.usuario.index');
            return redirect()->route('painel.usuario.listar');
        }else{
            return redirect()->route('painel.login');
        }

    }

    public function showLogin()
    {
        return view('painel.formLogin');
    }

    public function login(Request $request)
    {
        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];

//        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        if(Auth::check()){
            return redirect()->route('painel.usuario.listar');
        }else{
            return redirect()->route('painel.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('painel.login');
    }

    public function cadastroUser(Request $request)
    {

        return view('painel.formCadastro');

    }

    public function cadastroUserDo(Request $request)
    {
        $usuario = new Usuario;
        $usuario->password = Hash::make($request->password);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        if($usuario){
            return redirect()->route('painel.login');
        }else{
            return redirect()->back();
        }
    }
}
