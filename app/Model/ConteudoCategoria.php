<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConteudoCategoria extends Model
{
    protected $table = 'conteudo_categoria';
    protected $primarykey = 'id';
    protected $fillable = [
        'titulo',
        'descricao',
        'restrito',
        'ativo'
    ];
}
