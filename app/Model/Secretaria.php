<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'secretaria';
    protected $primarykey = 'id';
    protected $fillable = [
        'secretario_id',
        'cadastro_id',
        'cnpj',
        'email',
        'email_secundario',
        'telefone',
        'telefone_secundario',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'numero',
        'restrito',
        'ativo'
    ];

    public function secretario(){
        return $this->hasOne(Usuario::class, 'id', 'secretario_id' );
    }

}
