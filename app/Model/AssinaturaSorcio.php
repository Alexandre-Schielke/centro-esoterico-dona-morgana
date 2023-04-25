<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AssinaturaSorcio extends Model
{
    protected $table = 'assinatura_sorcio';
    protected $primarykey = 'id';
    protected $fillable = [
        'cadastro_id',
        'razao_social',
        'nome_fantasia',
        'email',
        'cnpj',
        'numero',
        'rua',
        'bairro',
        'estado',
        'cep',
        'cidade',
        'pais',
        'telefone',
        'inscricao_estadual',
        'rg_junta_comercial',
        'inscricao_anp',
        'atividade_bandeira',
        'base_estabelecimento',
        'mensagem',
        'ativo'
    ];

}
