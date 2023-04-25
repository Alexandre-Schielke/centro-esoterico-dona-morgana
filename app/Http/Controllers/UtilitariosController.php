<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Conteudo;
use App\Model\ConteudoCategoria;
use Illuminate\Support\Str;
use App\utilitarios\Utilitarios;
use DB;

class UtilitariosController extends Controller
{

    public function removerAcentos($valor)
    {
        return strtolower( preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $valor ) ) );
    }


    public function validaEmail($email)
    {

        if (preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email)) {
            return 'E-mail válido!';
        } else {
            return 'E-mail inválido!';
        }

    }

    public function dataBr($data = null)
    {
        if($data == null){
            return $data;
        }else{
            $result = explode('-',$data);
            return $result[2].'/'.$result[1].'/'.$result[0];
        }

    }

    public function dataUs($data = null)
    {
        if($data == null){
            return $data;
        }else{
            $result = explode('/',$data);
            return $result[2].'-'.$result[1].'-'.$result[0];
        }

    }
    public function removeSpaceDuplication($dados){
        return preg_replace('/\s+/', ' ', $dados);
    }

    //remove o primeiro caracter de uma string
    public function  removeFirst($data){
        return substr($data, 1);
    }

    //remove o ultimo caracter de uma string
    public function  removeLast($data){
        return substr($data, 0, -1);
    }

    public  function  getLastString($data){
        return substr($data, -1);
    }

    public function url($valor){
        $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú','‘',',', '“','”', ';',':','%','/','_','|', '*','$', '@','{','}','&','(',')','!','#','?', '’','ª','°', '’','.');

        $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U','', '', '', '','', '','','-','-', '-', '','s', 'arroba','','','e','','','','','', '','','','','');

        $valor =  trim(UtilitariosController::removeSpaceDuplication($valor));
        $valor = preg_replace("[^a-zA-Z0-9_]", "",$valor);
        $valor = str_replace(",","",$valor);
        return str_replace(' ', '-', strtolower(str_replace($comAcentos, $semAcentos, $valor)) );

    }

    public function noAcento($valor){

        return preg_replace( '/[`^~\']/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $valor ) ) ;

    }

    public function numero($valor)
    {
        return preg_replace("/[^0-9]/", "", $valor);
    }

    public function shortSring($string, $valorMinimo, $valorMaximo)
    {
        if(strlen($string) <=  $valorMaximo){

            return  substr($string, $valorMinimo, $valorMaximo);

        }else{
            return  substr($string, $valorMinimo, $valorMaximo).' (...)';
        }
    }


    public function dataSemana($data, $timeStamp = false){
        if($timeStamp == false){
            $nova = explode("-", $data);
        }else{
            $nova = explode(" ", $data);
            $nova = explode("-", $nova[0]);
        }
        $vardia = $nova[2];
        $varmes = $nova[1];
        $varano = $nova[0];
        $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
        $diasemana_numero = date ("w", mktime(0, 0, 0, $varmes, $vardia, $varano));
        return $diasemana[$diasemana_numero];
    }
    public function dataExtenso($data){
        $nova = explode(" ", $data);
        $nova = explode("-", $nova[0]);
        $vardia = $nova[2];
        $varmes = $nova[1];
        $varano = $nova[0];
        $convertedia = date ("w", mktime(0, 0, 0, $varmes, $vardia, $varano));
        $diasemana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
        $mes = array('01' => "Janeiro", '02' => "Fevereiro", '03' => "Março", '04' => "Abril", '05' => "Maio", '06' => "Junho", '07' => "Julho", '08' => "Agosto", '09' => "Setembro", '10' => "Outubro", '11' => "Novembro", '12' => "Dezembro");
        return $vardia  . " - " . $mes[$varmes] . " - " . $varano ."";
    }


    public function mascara($tipo = "", $string, $size = 11){
        $string = preg_replace("[^0-9]", "", $string);

        switch ($tipo)
        {
            case 'fone':
                if($size === 10){
                    $string = '(' . substr( $string, 0, 2) . ') ' . substr( $string, 2, 4)
                        . '-' . substr( $string, 6);
                }else
                    if($size === 11){
                        $string = '(' . substr( $string, 0, 2) . ') ' . substr( $string, 2, 5)
                            . '-' . substr( $string, 7);
                    }
                break;
            case 'cep':
                $string = substr($string, 0, 5) . '-' . substr($string, 5, 3);
                break;
            case 'cpf':
                $string = substr($string, 0, 3) . '.' . substr($string, 3, 3) .
                    '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
                break;
            case 'cnpj':
                $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) .
                    '.' . substr($string, 5, 3) . '/' .
                    substr($string, 8, 4) . '-' . substr($string, 12, 2);
                break;
            case 'rg':
                $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) .
                    '.' . substr($string, 5, 3);
                break;
            default:
                $string = 'É ncessário definir um tipo(fone, cep, cpg, cnpj, rg)';
                break;
        }
        return $string;
    }

    public function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@#$%¨&*()_+="; // $si contem os símbolos
        $senha = '';

        if ($maiusculas){
            // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($ma);
        }

        if ($minusculas){
            // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($mi);
        }

        if ($numeros){
            // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($nu);
        }

        if ($simbolos){
            // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($si);
        }

        // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
        return substr(str_shuffle($senha),0,$tamanho);
    }


    public function calcularParcelas($nParcelas, $dataPrimeiraParcela = null){

        if($dataPrimeiraParcela != null){
            $dataPrimeiraParcela = explode( "/",$dataPrimeiraParcela);
            $dia = $dataPrimeiraParcela[0];
            $mes = $dataPrimeiraParcela[1];
            $ano = $dataPrimeiraParcela[2];
        } else {
            $dia = date("d");
            $mes = date("m");
            $ano = date("Y");
        }
        $teste = '';
        for($x = 0; $x < $nParcelas; $x++){
            $teste .= '|'.UtilitariosController::dataUs(date("d/m/Y",strtotime("+".$x." month",mktime(0, 0, 0,$mes,$dia,$ano))));
        }
        return explode('|',$teste);
    }



    public function removerFormatacaoNumero( $strNumero )
    {

        $strNumero = trim( str_replace( "R$", null, $strNumero ) );

        $vetVirgula = explode( ",", $strNumero );
        if ( count( $vetVirgula ) == 1 )
        {
            $acentos = array(".");
            $resultado = str_replace( $acentos, "", $strNumero );
            return $resultado;
        }
        else if ( count( $vetVirgula ) != 2 )
        {
            return $strNumero;
        }

        $strNumero = $vetVirgula[0];
        $strDecimal = mb_substr( $vetVirgula[1], 0, 2 );

        $acentos = array(".");
        $resultado = str_replace( $acentos, "", $strNumero );
        $resultado = $resultado . "." . $strDecimal;

        return $resultado;

    }

    public function valorPorExtenso( $valor = 0, $bolExibirMoeda = true, $bolPalavraFeminina = false )
    {
//        COMO USAR:
//        //Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete e cinquenta e cinco"
//        echo clsTexto::valorPorExtenso("R$ 1.487.257,55", false, false);
//
//        //Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete reais e cinquenta e cinco centavos"
//        echo clsTexto::valorPorExtenso("R$ 1.487.257,55", true, false);
//
//        //Vai exibir na tela "duas mil e setecentas e oitenta e sete"
//        echo clsTexto::valorPorExtenso("2787", false, true);
        $valor = self::removerFormatacaoNumero( $valor );

        $singular = null;
        $plural = null;

        if ( $bolExibirMoeda )
        {
            $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
            $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões","quatrilhões");
        }
        else
        {
            $singular = array("", "", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
            $plural = array("", "", "mil", "milhões", "bilhões", "trilhões","quatrilhões");
        }

        $c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
        $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezessete", "dezoito", "dezenove");
        $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");


        if ( $bolPalavraFeminina )
        {

            if ($valor == 1)
            {
                $u = array("", "uma", "duas", "três", "quatro", "cinco", "seis","sete", "oito", "nove");
            }
            else
            {
                $u = array("", "um", "duas", "três", "quatro", "cinco", "seis","sete", "oito", "nove");
            }


            $c = array("", "cem", "duzentas", "trezentas", "quatrocentas","quinhentas", "seiscentas", "setecentas", "oitocentas", "novecentas");


        }


        $z = 0;

        $valor = number_format( $valor, 2, ".", "." );
        $inteiro = explode( ".", $valor );

        for ( $i = 0; $i < count( $inteiro ); $i++ )
        {
            for ( $ii = mb_strlen( $inteiro[$i] ); $ii < 3; $ii++ )
            {
                $inteiro[$i] = "0" . $inteiro[$i];
            }
        }

        // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
        $rt = null;
        $fim = count( $inteiro ) - ($inteiro[count( $inteiro ) - 1] > 0 ? 1 : 2);
        for ( $i = 0; $i < count( $inteiro ); $i++ )
        {
            $valor = $inteiro[$i];
            $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
            $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
            $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

            $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd && $ru) ? " e " : "") . $ru;
            $t = count( $inteiro ) - 1 - $i;
            $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
            if ( $valor == "000")
                $z++;
            elseif ( $z > 0 )
                $z--;

            if ( ($t == 1) && ($z > 0) && ($inteiro[0] > 0) )
                $r .= ( ($z > 1) ? " de " : "") . $plural[$t];

            if ( $r )
                $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
        }

        $rt = mb_substr( $rt, 1 );

        return($rt ? trim( $rt ) : "zero");

    }

//    function makeThumbnails($url = '/files/conteudo/246/imagem/capa/capa.jpg')
//    {
//        $url = public_path($url);
//        $thumbnail_width = 134;
//        $thumbnail_height = 189;
//        $thumb_beforeword = "thumb";
//        $arr_image_details = getimagesize($url);
//        $original_width = $arr_image_details[0];
//        $original_height = $arr_image_details[1];
//        if ($original_width > $original_height) {
//            $new_width = $thumbnail_width;
//            $new_height = intval($original_height * $new_width / $original_width);
//        } else {
//            $new_height = $thumbnail_height;
//            $new_width = intval($original_width * $new_height / $original_height);
//        }
//        $dest_x = intval(($thumbnail_width - $new_width) / 2);
//        $dest_y = intval(($thumbnail_height - $new_height) / 2);
//        if ($arr_image_details[2] == IMAGETYPE_GIF) {
//            $imgt = "ImageGIF";
//            $imgcreatefrom = "ImageCreateFromGIF";
//        }
//        if ($arr_image_details[2] == IMAGETYPE_JPEG) {
//            $imgt = "ImageJPEG";
//            $imgcreatefrom = "ImageCreateFromJPEG";
//        }
//        if ($arr_image_details[2] == IMAGETYPE_PNG) {
//            $imgt = "ImagePNG";
//            $imgcreatefrom = "ImageCreateFromPNG";
//        }
//        if ($imgt) {
//            $old_image = $imgcreatefrom($url);
//            $new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
//            imagecopyresized($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
//            $imgt($new_image, "teste" .$thumb_beforeword. "jpeg");
//            dd($imgt);
//        }
//    }

    function makeThumbnails($filepath, $thumbpath, $thumbnail_width, $background) {
//{{$util->makeThumbnails("/files/conteudo/$conteudolistagem->id/imagem/capa/capa.jpg","/files/conteudo/$conteudolistagem->id/imagem/capa/thumb.jpg", 170, ['255','25','255'])}}
        $filepath = public_path($filepath);
        $thumbpath = public_path($thumbpath);

        list($original_width, $original_height, $original_type) = getimagesize($filepath);
        $percent = ($thumbnail_width/$original_width);
        $thumbnail_height =  $original_height * $percent;
        if ($original_width > $original_height) {
            $new_width = $thumbnail_width;
            $new_height = intval($original_height * $new_width / $original_width);
        } else {
            $new_height = $thumbnail_height;
            $new_width = intval($original_width * $new_height / $original_height);
        }



        $dest_x = intval(($thumbnail_width - $new_width) / 2);
        $dest_y = intval(($thumbnail_height - $new_height) / 2);


        if ($original_type === 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        } else if ($original_type === 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        } else if ($original_type === 3) {
            $imgt = "ImagePNG";
            $imgcreatefrom = "ImageCreateFromPNG";
        } else {
            return false;
        }

        $old_image = $imgcreatefrom($filepath);
        $new_image = \imagecreatetruecolor($thumbnail_width, $thumbnail_height); // creates new image, but with a black background

        // figuring out the color for the background
        if(is_array($background) && count($background) === 3) {
            list($red, $green, $blue) = $background;
            $color = imagecolorallocate($new_image, $red, $green, $blue);
            imagefill($new_image, 0, 0, $color);
            // apply transparent background only if is a png image
        } else if($background === 'transparent' && $original_type === 3) {

            imagesavealpha($new_image, TRUE);
            $color = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
            imagefill($new_image, 0, 0, $color);
        }


        imagecopyresampled($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
        $imgt($new_image, $thumbpath);
        return file_exists($thumbpath);
    }

    function deletarPasta($caminhoPasta)
    {
        $iterator = new \RecursiveDirectoryIterator($caminhoPasta, \FilesystemIterator::SKIP_DOTS);
        $rec_iterator = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($rec_iterator as $file) {
            $file->isFile() ? unlink($file->getPathname()) : rmdir($file->getPathname());
        }
        rmdir($caminhoPasta);
    }
}
