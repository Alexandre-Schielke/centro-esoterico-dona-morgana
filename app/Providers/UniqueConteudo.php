<?php

namespace App\Providers;
use App\Model\Conteudo;
use Illuminate\Support\ServiceProvider;

class UniqueConteudo extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('conteudounico',
            function($attribute, $value, $parameters, $validator)
            {
                $conteudoBuscar = Conteudo::where('titulo', $value)->orderBy('id', 'desc')->first();
                if(count($conteudoBuscar) > 0 ){
                    return false;
                }else{

                }
               return true;
            });
    }
}
