<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $primarykey = 'id';
    protected $fillable = [
        'titulo',
        'descricao',
        'restrito',
        'ativo'
    ];
}
