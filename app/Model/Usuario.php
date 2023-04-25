<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'perfil_id',
        'cadastro_id',
        'nome',
        'email',
        'email_secundario',
        'password',
        'nascimento',
        'cpf',
        'cnpj',
        'telefone',
        'telefone_secundario',
        'sexo',
        'nome_pai',
        'nome_mae',
        'cargo',
        'data_entrada',
        'data_saida',
        'observacao',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'rua',
        'ip',
        'restrito',
        'status',
        'ativo',
        'remember_token'
    ];

    public function perfil(){
        return $this->hasOne(Perfil::class, 'id', 'perfil_id' );
    }
}
