<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/senha', ['uses' => 'Painel\ConteudoController@senha', 'as' => 'senha']);
Route::get('/', [App\Http\Controllers\Site\SiteController::class, 'index'])->name('index');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('login');
Route::get('/cadastro/user', [App\Http\Controllers\AuthController::class, 'cadastroUser'])->name('cadastro.user');
Route::post('/cadastro/user/do', [App\Http\Controllers\AuthController::class, 'cadastroUserDo'])->name('cadastro.user.do');
Route::get('/painel/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('painel.login');
Route::post('/painel/login/do',  [App\Http\Controllers\AuthController::class, 'login'])->name('painel.login.do');
Route::post('/painel/logout',  [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/contato', ['uses' => 'Site\SiteController@contato', 'as' => 'contato']);
Route::get('/cadastro-socio', ['uses' => 'Site\SiteController@cadastroScocio', 'as' => 'cadastro.socio']);
Route::get('/{categoria}/', ['uses' => 'Site\SiteController@listaConteudo', 'as' => 'conteudo.listar']);
Route::get('/{categoria}/{conteudo}',  ['uses' => 'Site\SiteController@conteudo', 'as'=> 'conteudo.view']);


Route::group(['prefix'=>'formulario'], function(){
    Route::post('/envio-contato', ['uses' => 'Site\FormularioController@envioContato', 'as' => 'formulario.contato']);
});


Route::group(['prefix'=>'painel'], function(){

    Route::group(['prefix'=>'usuario'], function(){
        Route::get('/lista', ['uses' => 'Painel\UsuarioController@index', 'as' => 'painel.usuario.listar']);
        Route::get('/editar/{id}', ['uses' => 'Painel\UsuarioController@edit', 'as' => 'painel.editar.usuario']);
        Route::post('/editado', ['uses' => 'Painel\UsuarioController@update', 'as' => 'painel.editado.usuario']);
        Route::get('/novo', ['uses' => 'Painel\UsuarioController@create', 'as' => 'painel.novo.usuario']);
        Route::post('/store', ['uses' => 'Painel\UsuarioController@store', 'as' => 'painel.store.usuario']);
        Route::get('/delete/{id?}', ['uses' => 'Painel\UsuarioController@destroy', 'as' => 'painel.delete.usuario']);
        Route::get('/delete/arquivo/{caminho}/{id}', ['uses' => 'Painel\UsuarioController@arquivoDestoy', 'as' => 'painel.delete.arquivo.usuario']);

    });

    Route::group(['prefix'=>'conteudo'], function(){
        Route::get('/lista', ['uses' => 'Painel\ConteudoController@index', 'as' => 'painel.conteudo']);
        Route::get('/editar/{id}', ['uses' => 'Painel\ConteudoController@edit', 'as' => 'painel.editar.conteudo']);
        Route::post('/editado', ['uses' => 'Painel\ConteudoController@update', 'as' => 'painel.editado.conteudo']);
        Route::get('/novo', ['uses' => 'Painel\ConteudoController@create', 'as' => 'painel.novo.conteudo']);
        Route::post('/store', ['uses' => 'Painel\ConteudoController@store', 'as' => 'painel.store.conteudo']);
        Route::get('/arquivo/delete/{caminho}/{delDiretorio}', ['uses' => 'Painel\ConteudoController@destroy', 'as' => 'painel.conteudo.arquivo.delete']);
        Route::get('/delete/{id?}/', ['uses' => 'Painel\ConteudoController@destroy', 'as' => 'painel.delete.conteudo']);
    });

    Route::group(['prefix'=>'banner'], function(){
        Route::get('/lista', ['uses' => 'Painel\BannerController@index', 'as' => 'painel.banner']);
        Route::get('/editar/{id}', ['uses' => 'Painel\BannerController@edit', 'as' => 'painel.editar.banner']);
        Route::post('/editado', ['uses' => 'Painel\BannerController@update', 'as' => 'painel.editado.banner']);
        Route::get('/arquivo/delete/{id?}/{caminho?}', ['uses' => 'Painel\BannerController@destroy', 'as' => 'painel.banner.arquivo.delete']);
        Route::get('/novo', ['uses' => 'Painel\BannerController@create', 'as' => 'painel.novo.banner']);
        Route::post('/store', ['uses' => 'Painel\BannerController@store', 'as' => 'painel.store.banner']);
        Route::get('/delete/{id?}', ['uses' => 'Painel\BannerController@destroy', 'as' => 'painel.delete.banner']);
    });

    Route::group(['prefix'=>'transparencia'], function(){
        Route::group(['prefix'=>'financeiro'], function(){
            Route::get('/lista', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@index', 'as' => 'painel.transparencia.financeiro']);
            Route::get('/editar/{id}', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@edit', 'as' => 'painel.editar.transparencia.financeiro']);
            Route::post('/editado', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@update', 'as' => 'painel.editado.transparencia.financeiro']);
            Route::get('/arquivo/delete/{id?}/{caminho?}', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@destroy', 'as' => 'painel.delete.arquivo.transparencia.financeiro']);
            Route::get('/novo', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@create', 'as' => 'painel.novo.transparencia.financeiro']);
            Route::post('/store', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@store', 'as' => 'painel.store.transparencia.financeiro']);
            Route::get('/delete/{id?}', ['uses' => 'Painel\Transparencia\TransparenciaFinanceiroController@destroy', 'as' => 'painel.delete.transparencia.financeiro']);
        });

        Route::group(['prefix'=>'administrativo'], function(){
            Route::get('/lista', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@index', 'as' => 'painel.transparencia.administrativo']);
            Route::get('/editar/{id}', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@edit', 'as' => 'painel.editar.transparencia.administrativo']);
            Route::post('/editado', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@update', 'as' => 'painel.editado.transparencia.administrativo']);
            //Route::get('/arquivo/delete/{id?}/{caminho?}', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@destroy', 'as' => 'painel.arquivo.delete']);
            Route::get('/novo', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@create', 'as' => 'painel.novo.transparencia.administrativo']);
            Route::post('/store', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@store', 'as' => 'painel.store.transparencia.administrativo']);
            Route::get('/delete/{id?}', ['uses' => 'Painel\Transparencia\TransparenciaAdministrativoController@destroy', 'as' => 'painel.delete.transparencia.administrativo']);
        });
    });

    Route::group(['prefix'=>'logo'], function(){
        Route::get('/form', ['uses' => 'Painel\LogoController@edit', 'as' => 'painel.logo.edit']);
        Route::post('/editado', ['uses' => 'Painel\LogoController@update', 'as' => 'painel.logo.update']);
        Route::get('/delete/{id?}', ['uses' => 'Painel\LogoController@destroy', 'as' => 'painel.logo.delete']);
    });
});

//Route::get('/', function () {
//    return view('welcome');
//});


