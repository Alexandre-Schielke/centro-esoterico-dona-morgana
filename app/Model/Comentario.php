<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentario';
    protected $primarykey = 'id';
    protected $fillable = [
        'conteudo_id',
        'cadastro_id',
        'nome',
        'email',
        'comentario',
        'restrito',
        'ativo',
        'created_at'
    ];


    public function data($data){
        $data = explode(' ', $data);
        $data = explode ('-', $data[0]);
        return $data[2].'/'.$data[1].'/'.$data[0];
    }

}
