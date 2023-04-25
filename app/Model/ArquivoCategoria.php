<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArquivoCategoria extends Model
{
    protected $table = 'arquivo_categoria';
    protected $primarykey = 'id';
    protected $fillable = [
        'categoria_pai_id',
        'cadastro_id',
        'titulo',
        'descricao',
        'restrito',
        'ativo'
    ];

}
