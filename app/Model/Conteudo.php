<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $table = 'conteudo';
    protected $primarykey = 'id';
    protected $fillable = [
        'conteudo_categoria_id',
        'cadastro_id',
        'titulo',
        'autor',
        'descricao',
        'observacao',
        'tags',
        'conteudo',
        'visitas',
        'adicionado',
        'ip',
        'like',
        'link_fonte',
        'restrito',
        'ativo'
    ];

    public function shortSring($string, $valorMinimo, $valorMaximo)
    {
      if(strlen($string) <=  $valorMaximo){

        return  substr($string, $valorMinimo, $valorMaximo);

      }else{
        return  substr($string, $valorMinimo, $valorMaximo).' (...)';
      }
    }

    public function tudo(){
        return $this->hasMany(ConteudoCategoria::class);
    }

    public function categoria(){
        return $this->hasOne(ConteudoCategoria::class, 'id', 'conteudo_categoria_id' );
    }

    public function cadastro($id){

        $teste =  Usuario::Where('id', '=', $id)->first();

        return Usuario::Where('id', $id)->first();
    }

    public function dataExtenso($data){
		$nova = explode(" ", $data);
		$nova = explode("-", $nova[0]);
		$vardia = $nova[2];
		$varmes = $nova[1];
		$varano = $nova[0];
		$convertedia = date ("w", mktime(0, 0, 0, $varmes, $vardia, $varano));
		$diasemana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
		$mes = array('01' => "Janeiro", '02' => "Fevereiro", '03' => "Mar&ccedil;o", '04' => "Abril", '05' => "Maio", '06' => "Junho", '07' => "Julho", '08' => "Agosto", '09' => "Setembro", '10' => "Outubro", '11' => "Novembro", '12' => "Dezembro");
		return $vardia  . " - " . $mes[$varmes] . " - " . $varano ."";
	}


}
