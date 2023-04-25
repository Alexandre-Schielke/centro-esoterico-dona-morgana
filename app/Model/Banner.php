<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primarykey = 'id';
    protected $fillable = [
        'banner_categoria_id',
        'cadastro_id',
        'titulo',
        'conteudo_ref',
        'descricao',
        'observacao',
        'link_externo',
        'restrito',
        'ativo'
    ];

    public function produtos(){
        return $this->hasMany(BannerCategoria::class);
    }

    public function categoria(){
        return $this->hasOne(BannerCategoria::class, 'id', 'banner_categoria_id' );
    }
}

