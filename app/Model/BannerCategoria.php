<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BannerCategoria extends Model
{
    protected $table = 'banner_categoria';
    protected $primarykey = 'id';
    protected $fillable = [
        'cadastro_id',
        'titulo',
        'descricao',
        'restrito',
        'ativo'
    ];
}
