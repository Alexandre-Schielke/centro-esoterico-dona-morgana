<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TipoArquivo extends Model
{
    protected $table = 'tipo_arquivo';
    protected $primarykey = 'id';
    protected $fillable = [
        'titulo',
        'ativo'
    ];

}
