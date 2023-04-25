<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivo';
    protected $primarykey = 'id';
    protected $fillable = [
        'cadastro_id',
        'arquivo_categoria_id',
        'tipo_arquivo_id',
        'titulo',
        'descricao',
        'data_referente',
        'nome_arquivo',
        'tamanho',
        'visitas',
        'url',
        'publicado',
        'ativo'
    ];


    public function categoria(){
        return $this->hasOne(BannerCategoria::class, 'id', 'arquivo_categoria_id' );
    }

    public function tipoArquivo(){
        return $this->hasOne(TipoArquivo::class, 'id', 'tipo_arquivo_id' );
    }
}
