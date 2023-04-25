@extends('site.template')
@section('conteudo')
    <nav class="float-left nav-interno">
        <div class="container pt-3 pb-3">
            <i class="fas fa-tag"></i> Você esta em <a href="./">Home</a> /
            <a href="#">Área do associado</a>
        </div>
    </nav>

    <main role="main" class="pt-5 pb-5 float-left" style="width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-2 col-md-2">
                    <h1 class="bg-dark pt-2 pb-2 text-center text-white">Menu</h1>
                    <ul>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.painel') }}"><i class="fas fa-user-edit"></i> Editar Dados</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.documentos') }}"><i class="fas fa-file-alt"></i> Documentos</a></li>
                        <li style="border-bottom: 1px solid #777; padding: 5px 0;"><a href="{{ route('sorcio.documentos.assinatura') }}"><i class="fas fa-portrait"></i> Assinatura</a></li>
                    </ul>
                </div>
                <div class="col-sm-12   col-md-10 col-xl-10">
                    <div class="table-responsive" style="padding:1%">
                        <h1 class="h4 font-weight-bolder">Dados do associado</h1>
                        <form action="{{ route('sorcio.update.painel') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8"  autocomplete="off">

                            <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" style="position: ">
                                            <strong>Sucesso!</strong> {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nome</label>
                                    <input id="name" name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
                                </div>


                                <div class="form-group">
                                    <label for="nascimento" class="col-form-label">Data de Nascimento</label>
                                    <input id="nascimento" name="nascimento" type="text" class="form-control" placeholder="email secundário" value="{{ $util-> dataBr(Auth::user()->nascimento) }}">
                                </div>

                                <div class="form-group">
                                    <label for="cpf" class="col-form-label">CPF</label>
                                    <input id="cpf" name="cpf" type="text" class="form-control cpf" placeholder="000.000.000-00" value="{{ Auth::user()->cpf }}">
                                </div>

                                <div class="form-group">
                                    <label for="telefone" class="col-form-label">Telefone</label>
                                    <input id="telefone" name="telefone" type="text" class="form-control phone" placeholder="(ddd) 90000-0000" value="{{ Auth::user()->telefone }}">
                                </div>

                                <div class="form-group">
                                    <label for="telefoneSecundario" class="col-form-label">Telefone secundário</label>
                                    <input id="telefoneSecundario" name="telefoneSecundario" type="text" class="form-control phone" placeholder="(ddd) 90000-0000" value="{{ Auth::user()->telefone_secundario }}">
                                </div>


                                <div class="form-group">
                                    <label for="sexo" class="col-form-label">Sexo </label>
                                    <select class="custom-select" id="sexo" name="sexo">
                                        <option value="m" {{ Auth::user()->sexo == 'm' ? 'selected' : '' }}>Masculino</option>
                                        <option value="f" {{ Auth::user()->sexo == 'f' ? 'selected' : '' }}>Feminino</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="estadoCivil" class="col-form-label">Estado Cívil</label>
                                    <select class="form-control" name="estadoCivil" id="estadoCivil">
                                        <option value="Solteiro"    {{ Auth::user()->estado_civil == 'Solteiro'     ? 'selected' : '' }}>Solteiro</option>
                                        <option value="Casado"      {{ Auth::user()->estado_civil == 'Casado'       ? 'selected' : '' }}>Casado</option>
                                        <option value="Separado"    {{ Auth::user()->estado_civil == 'Separado'     ? 'selected' : '' }}>Separado</option>
                                        <option value="Divorciado"  {{ Auth::user()->estado_civil == 'Divorciado'   ? 'selected' : '' }}>Divorciado</option>
                                        <option value="Viúvo"       {{ Auth::user()->estado_civil == 'Viúvo'        ? 'selected' : '' }}>Viúvo</option>
                                        <option value="Amasiado"    {{ Auth::user()->estado_civil == 'Amasiado'     ? 'selected' : '' }}>Amasiado</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nacionalida" class="col-form-label">Nacionalidade</label>
                                    <select  class="form-control" name="nacionalidade">
                                        <option  selected disabled>Selecione uma Nacionalidade</option>
                                        <option value="África do Sul"   {{ Auth::user()->nacionalidade == 'África do Sul'    ? 'selected' : '' }}>África do Sul</option>
                                        <option value="Albânia"         {{ Auth::user()->nacionalidade == 'Albânia'          ? 'selected' : '' }}>Albânia</option>
                                        <option value="Alemanha"        {{ Auth::user()->nacionalidade == 'Alemanha'         ? 'selected' : '' }}>Alemanha</option>
                                        <option value="Andorra"         {{ Auth::user()->nacionalidade == 'Andorra'          ? 'selected' : '' }}>Andorra</option>
                                        <option value="Angola"          {{ Auth::user()->nacionalidade == 'Angola'           ? 'selected' : '' }}>Angola</option>
                                        <option value="Anguilla"        {{ Auth::user()->nacionalidade == 'Anguilla'         ? 'selected' : '' }}>Anguilla</option>
                                        <option value="Antigua"         {{ Auth::user()->nacionalidade == 'Antigua'          ? 'selected' : '' }}>Antigua</option>
                                        <option value="Arábia Saudita"  {{ Auth::user()->nacionalidade == 'Arábia Saudita'   ? 'selected' : '' }}>Arábia Saudita</option>
                                        <option value="Argentina"       {{ Auth::user()->nacionalidade == 'Argentina'        ? 'selected' : '' }}>Argentina</option>
                                        <option value="Armênia"         {{ Auth::user()->nacionalidade == 'Armênia'          ? 'selected' : '' }}>Armênia</option>
                                        <option value="Aruba"           {{ Auth::user()->nacionalidade == 'Aruba'            ? 'selected' : '' }}>Aruba</option>
                                        <option value="Austrália"       {{ Auth::user()->nacionalidade == 'Austrália'        ? 'selected' : '' }}>Austrália</option>
                                        <option value="Áustria"         {{ Auth::user()->nacionalidade == 'Áustria'          ? 'selected' : '' }}>Áustria</option>
                                        <option value="Azerbaijão"      {{ Auth::user()->nacionalidade == 'Azerbaijão'       ? 'selected' : '' }}>Azerbaijão</option>
                                        <option value="Bahamas"         {{ Auth::user()->nacionalidade == 'Bahamas'          ? 'selected' : '' }}>Bahamas</option>
                                        <option value="Bahrein"         {{ Auth::user()->nacionalidade == 'Bahrein'          ? 'selected' : '' }}>Bahrein</option>
                                        <option value="Bangladesh"      {{ Auth::user()->nacionalidade == 'Bangladesh'       ? 'selected' : '' }}>Bangladesh</option>
                                        <option value="Barbados"        {{ Auth::user()->nacionalidade == 'Barbados'         ? 'selected' : '' }}>Barbados</option>
                                        <option value="Bélgica"         {{ Auth::user()->nacionalidade == 'Bélgica'          ? 'selected' : '' }}>Bélgica</option>
                                        <option value="Benin"           {{ Auth::user()->nacionalidade == 'Benin'            ? 'selected' : '' }}>Benin</option>
                                        <option value="Bermudas"        {{ Auth::user()->nacionalidade == 'Bermudas'         ? 'selected' : '' }}>Bermudas</option>
                                        <option value="Botsuana"        {{ Auth::user()->nacionalidade == 'Botsuana'         ? 'selected' : '' }}>Botsuana</option>
                                        <option value="Brasil"          {{ Auth::user()->nacionalidade == 'Brasil'           ? 'selected' : '' }}>Brasil</option>
                                        <option value="Brunei"          {{ Auth::user()->nacionalidade == 'Brunei'           ? 'selected' : '' }}>Brunei</option>
                                        <option value="Bulgária"        {{ Auth::user()->nacionalidade == 'Bulgária'         ? 'selected' : '' }}>Bulgária</option>
                                        <option value="Burkina Fasso"   {{ Auth::user()->nacionalidade == 'Burkina Fasso'    ? 'selected' : '' }}>Burkina Fasso</option>
                                        <option value="botão"           {{ Auth::user()->nacionalidade == 'botão'            ? 'selected' : '' }}>botão</option>
                                        <option value="Cabo Verde"      {{ Auth::user()->nacionalidade == 'Cabo Verde'       ? 'selected' : '' }}>Cabo Verde</option>
                                        <option value="Camarões"        {{ Auth::user()->nacionalidade == 'Camarões'         ? 'selected' : '' }}>Camarões</option>
                                        <option value="Camboja"         {{ Auth::user()->nacionalidade == 'Camboja'          ? 'selected' : '' }}>Camboja</option>
                                        <option value="Canadá"          {{ Auth::user()->nacionalidade == 'Canadá'           ? 'selected' : '' }}>Canadá</option>
                                        <option value="Cazaquistão"     {{ Auth::user()->nacionalidade == 'Cazaquistão'      ? 'selected' : '' }}>Cazaquistão</option>
                                        <option value="Chade"           {{ Auth::user()->nacionalidade == 'Chade'            ? 'selected' : '' }}>Chade</option>
                                        <option value="Chile"           {{ Auth::user()->nacionalidade == 'Chile'            ? 'selected' : '' }}>Chile</option>
                                        <option value="China"           {{ Auth::user()->nacionalidade == 'China'            ? 'selected' : '' }}>China</option>
                                        <option value="Cidade do Vaticano" {{ Auth::user()->nacionalidade == 'Cidade do Vaticano' ? 'selected' : '' }}>Cidade do Vaticano</option>
                                        <option value="Colômbia"        {{ Auth::user()->nacionalidade == 'Colômbia'         ? 'selected' : '' }}>Colômbia</option>
                                        <option value="Congo"           {{ Auth::user()->nacionalidade == 'Congo'            ? 'selected' : '' }}>Congo</option>
                                        <option value="Coréia do Sul"   {{ Auth::user()->nacionalidade == 'Coréia do Sul'    ? 'selected' : '' }}>Coréia do Sul</option>
                                        <option value="Costa do Marfim" {{ Auth::user()->nacionalidade == 'Costa do Marfim'  ? 'selected' : '' }}>Costa do Marfim</option>
                                        <option value="Costa Rica"      {{ Auth::user()->nacionalidade == 'Costa Rica'       ? 'selected' : '' }}>Costa Rica</option>
                                        <option value="Croácia"         {{ Auth::user()->nacionalidade == 'Croácia'          ? 'selected' : '' }}>Croácia</option>
                                        <option value="Dinamarca"       {{ Auth::user()->nacionalidade == 'Dinamarca'        ? 'selected' : '' }}>Dinamarca</option>
                                        <option value="Djibuti"         {{ Auth::user()->nacionalidade == 'Djibuti'          ? 'selected' : '' }}>Djibuti</option>
                                        <option value="Dominica"        {{ Auth::user()->nacionalidade == 'Dominica'         ? 'selected' : '' }}>Dominica</option>
                                        <option value="EUA"             {{ Auth::user()->nacionalidade == 'EUA'              ? 'selected' : '' }}>EUA</option>
                                        <option value="Egito"           {{ Auth::user()->nacionalidade == 'Egito'            ? 'selected' : '' }}>Egito</option>
                                        <option value="El Salvador"     {{ Auth::user()->nacionalidade == 'El Salvador'      ? 'selected' : '' }}>El Salvador</option>
                                        <option value="Emirados Árabes" {{ Auth::user()->nacionalidade == 'Emirados Árabes'  ? 'selected' : '' }}>Emirados Árabes</option>
                                        <option value="Equador"         {{ Auth::user()->nacionalidade == 'Equador'          ? 'selected' : '' }}>Equador</option>
                                        <option value="Eritréia"        {{ Auth::user()->nacionalidade == 'Eritréia'         ? 'selected' : '' }}>Eritréia</option>
                                        <option value="Escócia"         {{ Auth::user()->nacionalidade == 'Escócia'          ? 'selected' : '' }}>Escócia</option>
                                        <option value="Eslováquia"      {{ Auth::user()->nacionalidade == 'Eslováquia'       ? 'selected' : '' }}>Eslováquia</option>
                                        <option value="Eslovênia"       {{ Auth::user()->nacionalidade == 'Eslovênia'        ? 'selected' : '' }}>Eslovênia</option>
                                        <option value="Espanha"         {{ Auth::user()->nacionalidade == 'Espanha'          ? 'selected' : '' }}>Espanha</option>
                                        <option value="Estônia"         {{ Auth::user()->nacionalidade == 'Estônia'          ? 'selected' : '' }}>Estônia</option>
                                        <option value="Etiópia"         {{ Auth::user()->nacionalidade == 'Etiópia'          ? 'selected' : '' }}>Etiópia</option>
                                        <option value="Fiji"            {{ Auth::user()->nacionalidade == 'Fiji'             ? 'selected' : '' }}>Fiji</option>
                                        <option value="Filipinas"       {{ Auth::user()->nacionalidade == 'Filipinas'        ? 'selected' : '' }}>Filipinas</option>
                                        <option value="Finlândia"       {{ Auth::user()->nacionalidade == 'Finlândia'        ? 'selected' : '' }}>Finlândia</option>
                                        <option value="França"          {{ Auth::user()->nacionalidade == 'França'           ? 'selected' : '' }}>França</option>
                                        <option value="Gabão"           {{ Auth::user()->nacionalidade == 'Gabão'            ? 'selected' : '' }}>Gabão</option>
                                        <option value="Gâmbia"          {{ Auth::user()->nacionalidade == 'Gâmbia'           ? 'selected' : '' }}>Gâmbia</option>
                                        <option value="Gana"            {{ Auth::user()->nacionalidade == 'Gana'             ? 'selected' : '' }}>Gana</option>
                                        <option value="Geórgia"         {{ Auth::user()->nacionalidade == 'Geórgia'          ? 'selected' : '' }}>Geórgia</option>
                                        <option value="Gibraltar"       {{ Auth::user()->nacionalidade == 'Gibraltar'        ? 'selected' : '' }}>Gibraltar</option>
                                        <option value="Granada"         {{ Auth::user()->nacionalidade == 'Granada'          ? 'selected' : '' }}>Granada</option>
                                        <option value="Grécia"          {{ Auth::user()->nacionalidade == 'Grécia'           ? 'selected' : '' }}>Grécia</option>
                                        <option value="Guadalupe"       {{ Auth::user()->nacionalidade == 'Guadalupe'        ? 'selected' : '' }}>Guadalupe</option>
                                        <option value="Guam"            {{ Auth::user()->nacionalidade == 'Guam'             ? 'selected' : '' }}>Guam</option>
                                        <option value="Guatemala"       {{ Auth::user()->nacionalidade == 'Guatemala'        ? 'selected' : '' }}>Guatemala</option>
                                        <option value="Guiana"          {{ Auth::user()->nacionalidade == 'Guiana'           ? 'selected' : '' }}>Guiana</option>
                                        <option value="Guiana Francesa" {{ Auth::user()->nacionalidade == 'Guiana Francesa'  ? 'selected' : '' }}>Guiana Francesa</option>
                                        <option value="Guiné-bissau"    {{ Auth::user()->nacionalidade == 'Guiné-bissau'     ? 'selected' : '' }}>Guiné-bissau</option>
                                        <option value="Haiti"           {{ Auth::user()->nacionalidade == 'Haiti'            ? 'selected' : '' }}>Haiti</option>
                                        <option value="Holanda"         {{ Auth::user()->nacionalidade == 'Holanda'          ? 'selected' : '' }}>Holanda</option>
                                        <option value="Honduras"        {{ Auth::user()->nacionalidade == 'Honduras'         ? 'selected' : '' }}>Honduras</option>
                                        <option value="Hong Kong"       {{ Auth::user()->nacionalidade == 'Hong Kong'        ? 'selected' : '' }}>Hong Kong</option>
                                        <option value="Hungria"         {{ Auth::user()->nacionalidade == 'Hungria'          ? 'selected' : '' }}>Hungria</option>
                                        <option value="Iêmen"           {{ Auth::user()->nacionalidade == 'Iêmen'            ? 'selected' : '' }}>Iêmen</option>
                                        <option value="Ilhas Cayman"    {{ Auth::user()->nacionalidade == 'Ilhas Cayman'     ? 'selected' : '' }}>Ilhas Cayman</option>
                                        <option value="Ilhas Cook"      {{ Auth::user()->nacionalidade == 'Ilhas Cook'       ? 'selected' : '' }}>Ilhas Cook</option>
                                        <option value="Ilhas Curaçao"   {{ Auth::user()->nacionalidade == 'Ilhas Curaçao'    ? 'selected' : '' }}>Ilhas Curaçao</option>
                                        <option value="Ilhas Marshall"  {{ Auth::user()->nacionalidade == 'Ilhas Marshall'   ? 'selected' : '' }}>Ilhas Marshall</option>
                                        <option value="Ilhas Turks & Caicos"    {{ Auth::user()->nacionalidade == 'Ilhas Turks & Caicos'     ? 'selected' : '' }}>Ilhas Turks & Caicos</option>
                                        <option value="Ilhas Virgens (brit.)"   {{ Auth::user()->nacionalidade == 'Ilhas Virgens (brit.)'    ? 'selected' : '' }}>Ilhas Virgens (brit.)</option>
                                        <option value="Ilhas Virgens(amer.)"    {{ Auth::user()->nacionalidade == 'Ilhas Virgens(amer.)'     ? 'selected' : '' }}>Ilhas Virgens(amer.)</option>
                                        <option value="Ilhas Wallis e Futuna"   {{ Auth::user()->nacionalidade == 'Ilhas Wallis e Futuna'    ? 'selected' : '' }}>Ilhas Wallis e Futuna</option>
                                        <option value="Índia"           {{ Auth::user()->nacionalidade == 'Índia'            ? 'selected' : '' }}>Índia</option>
                                        <option value="Indonésia"       {{ Auth::user()->nacionalidade == 'Indonésia'        ? 'selected' : '' }}>Indonésia</option>
                                        <option value="Inglaterra"      {{ Auth::user()->nacionalidade == 'Inglaterra'       ? 'selected' : '' }}>Inglaterra</option>
                                        <option value="Irlanda"         {{ Auth::user()->nacionalidade == 'Inglaterra'       ? 'selected' : '' }}>Irlanda</option>
                                        <option value="Islândia"        {{ Auth::user()->nacionalidade == 'Irlanda'          ? 'selected' : '' }}>Islândia</option>
                                        <option value="Israel"          {{ Auth::user()->nacionalidade == 'Israel'           ? 'selected' : '' }}>Israel</option>
                                        <option value="Itália"          {{ Auth::user()->nacionalidade == 'Itália'           ? 'selected' : '' }}>Itália</option>
                                        <option value="Jamaica"         {{ Auth::user()->nacionalidade == 'Jamaica'          ? 'selected' : '' }}>Jamaica</option>
                                        <option value="Japão"           {{ Auth::user()->nacionalidade == 'Japão'            ? 'selected' : '' }}>Japão</option>
                                        <option value="Jordânia"        {{ Auth::user()->nacionalidade == 'Jordânia'         ? 'selected' : '' }}>Jordânia</option>
                                        <option value="Kuwait"          {{ Auth::user()->nacionalidade == 'Kuwait'           ? 'selected' : '' }}>Kuwait</option>
                                        <option value="Latvia"          {{ Auth::user()->nacionalidade == 'Latvia'           ? 'selected' : '' }}>Latvia</option>
                                        <option value="Líbano"          {{ Auth::user()->nacionalidade == 'Líbano'           ? 'selected' : '' }}>Líbano</option>
                                        <option value="Liechtenstein"   {{ Auth::user()->nacionalidade == 'Liechtenstein'    ? 'selected' : '' }}>Liechtenstein</option>
                                        <option value="Lituânia"        {{ Auth::user()->nacionalidade == 'Lituânia'         ? 'selected' : '' }}>Lituânia</option>
                                        <option value="Luxemburgo"      {{ Auth::user()->nacionalidade == 'Luxemburgo'       ? 'selected' : '' }}>Luxemburgo</option>
                                        <option value="Macau"           {{ Auth::user()->nacionalidade == 'Macau'            ? 'selected' : '' }}>Macau</option>
                                        <option value="Macedônia"       {{ Auth::user()->nacionalidade == 'Macedônia'        ? 'selected' : '' }}>Macedônia</option>
                                        <option value="Madagascar"      {{ Auth::user()->nacionalidade == 'Madagascar'       ? 'selected' : '' }}>Madagascar</option>
                                        <option value="Malásia"         {{ Auth::user()->nacionalidade == 'Malásia'          ? 'selected' : '' }}>Malásia</option>
                                        <option value="Malaui"          {{ Auth::user()->nacionalidade == 'Malaui'           ? 'selected' : '' }}>Malaui</option>
                                        <option value="Mali"            {{ Auth::user()->nacionalidade == 'Mali'             ? 'selected' : '' }}>Mali</option>
                                        <option value="Malta"           {{ Auth::user()->nacionalidade == 'Malta'            ? 'selected' : '' }}>Malta</option>
                                        <option value="Marrocos"        {{ Auth::user()->nacionalidade == 'Marrocos'         ? 'selected' : '' }}>Marrocos</option>
                                        <option value="Martinica"       {{ Auth::user()->nacionalidade == 'Martinica'        ? 'selected' : '' }}>Martinica</option>
                                        <option value="Mauritânia"      {{ Auth::user()->nacionalidade == 'Mauritânia'       ? 'selected' : '' }}>Mauritânia</option>
                                        <option value="Mauritius"       {{ Auth::user()->nacionalidade == 'Mauritius'        ? 'selected' : '' }}>Mauritius</option>
                                        <option value="México"          {{ Auth::user()->nacionalidade == 'México'           ? 'selected' : '' }}>México</option>
                                        <option value="Moldova"         {{ Auth::user()->nacionalidade == 'Moldova'          ? 'selected' : '' }}>Moldova</option>
                                        <option value="Mônaco"          {{ Auth::user()->nacionalidade == 'Mônaco'           ? 'selected' : '' }}>Mônaco</option>
                                        <option value="Montserrat"      {{ Auth::user()->nacionalidade == 'Montserrat'       ? 'selected' : '' }}>Montserrat</option>
                                        <option value="Nepal"           {{ Auth::user()->nacionalidade == 'Nepal'            ? 'selected' : '' }}>Nepal</option>
                                        <option value="Nicarágua"       {{ Auth::user()->nacionalidade == 'Nicarágua'        ? 'selected' : '' }}>Nicarágua</option>
                                        <option value="Niger"           {{ Auth::user()->nacionalidade == 'Niger'            ? 'selected' : '' }}>Niger</option>
                                        <option value="Nigéria"         {{ Auth::user()->nacionalidade == 'Nigéria'          ? 'selected' : '' }}>Nigéria</option>
                                        <option value="Noruega"         {{ Auth::user()->nacionalidade == 'Noruega'          ? 'selected' : '' }}>Noruega</option>
                                        <option value="Nova Caledônia"  {{ Auth::user()->nacionalidade == 'Nova Caledônia'   ? 'selected' : '' }}>Nova Caledônia</option>
                                        <option value="Nova Zelândia"   {{ Auth::user()->nacionalidade == 'Nova Zelândia'    ? 'selected' : '' }}>Nova Zelândia</option>
                                        <option value="Omã"             {{ Auth::user()->nacionalidade == 'Omã'              ? 'selected' : '' }}>Omã</option>
                                        <option value="Palau"           {{ Auth::user()->nacionalidade == 'Palau'            ? 'selected' : '' }}>Palau</option>
                                        <option value="Panamá"          {{ Auth::user()->nacionalidade == 'Panamá'           ? 'selected' : '' }}>Panamá</option>
                                        <option value="Papua-nova Guiné" {{ Auth::user()->nacionalidade == 'Papua-nova Guiné' ? 'selected' : '' }}>Papua-nova Guiné</option>
                                        <option value="Paquistão"       {{ Auth::user()->nacionalidade == 'Paquistão'        ? 'selected' : '' }}>Paquistão</option>
                                        <option value="Peru"            {{ Auth::user()->nacionalidade == 'Peru'             ? 'selected' : '' }}>Peru</option>
                                        <option value="Polinésia Francesa" {{ 'nacionalidade' == 'Polinésia Francesa' ? 'selected' : '' }}>Polinésia Francesa</option>
                                        <option value="Polônia"         {{ Auth::user()->nacionalidade == 'Polônia'          ? 'selected' : '' }}>Polônia</option>
                                        <option value="Porto Rico"      {{ Auth::user()->nacionalidade == 'Porto Rico'       ? 'selected' : '' }}>Porto Rico</option>
                                        <option value="Portugal"        {{ Auth::user()->nacionalidade == 'Portugal'         ? 'selected' : '' }}>Portugal</option>
                                        <option value="Qatar"           {{ Auth::user()->nacionalidade == 'Qatar'            ? 'selected' : '' }}>Qatar</option>
                                        <option value="Quênia"          {{ Auth::user()->nacionalidade == 'Quênia'           ? 'selected' : '' }}>Quênia</option>
                                        <option value="Rep. Dominicana" {{ Auth::user()->nacionalidade == 'Rep. Dominicana'  ? 'selected' : '' }}>Rep. Dominicana</option>
                                        <option value="Rep. Tcheca"     {{ Auth::user()->nacionalidade == 'Rep. Tcheca'      ? 'selected' : '' }}>Rep. Tcheca</option>
                                        <option value="Reunion"         {{ Auth::user()->nacionalidade == 'Reunion'          ? 'selected' : '' }}>Reunion</option>
                                        <option value="Romênia"         {{ Auth::user()->nacionalidade == 'Romênia'          ? 'selected' : '' }}>Romênia</option>
                                        <option value="Ruanda"          {{ Auth::user()->nacionalidade == 'Ruanda'           ? 'selected' : '' }}>Ruanda</option>
                                        <option value="Rússia"          {{ Auth::user()->nacionalidade == 'Rússia'           ? 'selected' : '' }}>Rússia</option>
                                        <option value="Saipan"          {{ Auth::user()->nacionalidade == 'Saipan'           ? 'selected' : '' }}>Saipan</option>
                                        <option value="Samoa Americana" {{ Auth::user()->nacionalidade == 'Samoa Americana'  ? 'selected' : '' }}>Samoa Americana</option>
                                        <option value="Senegal"         {{ Auth::user()->nacionalidade == 'Senegal'          ? 'selected' : '' }}>Senegal</option>
                                        <option value="Serra Leone"     {{ Auth::user()->nacionalidade == 'Serra Leone'      ? 'selected' : '' }}>Serra Leone</option>
                                        <option value="Seychelles"      {{ Auth::user()->nacionalidade == 'Seychelle'        ? 'selected' : '' }}>Seychelles</option>
                                        <option value="Singapura"       {{ Auth::user()->nacionalidade == 'Singapura'        ? 'selected' : '' }}>Singapura</option>
                                        <option value="Síria"           {{ Auth::user()->nacionalidade == 'Síria'            ? 'selected' : '' }}>Síria</option>
                                        <option value="Sri Lanka"       {{ Auth::user()->nacionalidade == 'Sri Lanka'        ? 'selected' : '' }}>Sri Lanka</option>
                                        <option value="St. Kitts & Nevis" {{ Auth::user()->nacionalidade == 'St. Kitts & Nevis' ? 'selected' : '' }}>St. Kitts & Nevis</option>
                                        <option value="St. Lúcia"       {{ Auth::user()->nacionalidade == 'St. Lúcia'        ? 'selected' : '' }}>St. Lúcia</option>
                                        <option value="St. Vincent"     {{ Auth::user()->nacionalidade == 'St. Vincent'      ? 'selected' : '' }}>St. Vincent</option>
                                        <option value="Sudão"           {{ Auth::user()->nacionalidade == 'Sudão'            ? 'selected' : '' }}>Sudão</option>
                                        <option value="Suécia"          {{ Auth::user()->nacionalidade == 'Suécia'           ? 'selected' : '' }}>Suécia</option>
                                        <option value="Suiça"           {{ Auth::user()->nacionalidade == 'Suiça'            ? 'selected' : '' }}>Suiça</option>
                                        <option value="Suriname"        {{ Auth::user()->nacionalidade == 'Suriname'         ? 'selected' : '' }}>Suriname</option>
                                        <option value="Tailândia"       {{ Auth::user()->nacionalidade == 'Tailândia'        ? 'selected' : '' }}>Tailândia</option>
                                        <option value="Taiwan"          {{ Auth::user()->nacionalidade == 'Taiwan'           ? 'selected' : '' }}>Taiwan</option>
                                        <option value="Tanzânia"        {{ Auth::user()->nacionalidade == 'Tanzânia'         ? 'selected' : '' }}>Tanzânia</option>
                                        <option value="Togo"            {{ Auth::user()->nacionalidade == 'Togo'             ? 'selected' : '' }}>Togo</option>
                                        <option value="Trinidad & Tobago" {{ Auth::user()->nacionalidade == 'Trinidad & Tobago' ? 'selected' : '' }}>Trinidad & Tobago</option>
                                        <option value="Tunísia"         {{ Auth::user()->nacionalidade == 'Tunísia'          ? 'selected' : '' }}>Tunísia</option>
                                        <option value="Turquia"         {{ Auth::user()->nacionalidade == 'Turquia"'         ? 'selected' : '' }}>Turquia</option>
                                        <option value="Ucrânia"         {{ Auth::user()->nacionalidade == 'Ucrânia'          ? 'selected' : '' }}>Ucrânia</option>
                                        <option value="Uganda"          {{ Auth::user()->nacionalidade == 'Uganda'           ? 'selected' : '' }}>Uganda</option>
                                        <option value="Uruguai"         {{ Auth::user()->nacionalidade == 'Uruguai'          ? 'selected' : '' }}>Uruguai</option>
                                        <option value="Venezuela"       {{ Auth::user()->nacionalidade == 'Venezuela'        ? 'selected' : '' }}>Venezuela</option>
                                        <option value="Vietnã"          {{ Auth::user()->nacionalidade == 'Vietnã'           ? 'selected' : '' }}>Vietnã</option>
                                        <option value="Zaire"           {{ Auth::user()->nacionalidade == 'Zaire'            ? 'selected' : '' }}>Zaire</option>
                                        <option value="Zâmbia"          {{ Auth::user()->nacionalidade == 'Zâmbia'           ? 'selected' : '' }}>Zâmbia</option>
                                        <option value="Zimbábue"        {{ Auth::user()->nacionalidade == 'Zimbábue'         ? 'selected' : '' }}>Zimbábue</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rg" class="col-form-label">RG</label>
                                    <input id="rg" name="rg" type="text" class="form-control cep" placeholder="00000-000" value="{{ Auth::user()->rg }}">
                                </div>

                                <div class="form-group">
                                    <label for="orgaoExpeditor" class="col-form-label">Orgão Expeditor</label>
                                    <select class="form-control" name="orgaoExpeditor" id="orgaoExpeditor">
                                        <option value="SSP"     {{ Auth::user()->orgao_expeditor == 'SSP'     ? 'selected' : ''   }}>SSP - Secretaria de Segurança Pública</option>
                                        <option value="COREN"   {{ Auth::user()->orgao_expeditor == 'COREN'   ? 'selected' : ''   }}>COREN - Conselho Regional de Enfermagem</option>
                                        <option value="CRA"     {{ Auth::user()->orgao_expeditor == 'CRA'     ? 'selected' : ''   }}>CRA - Conselho Regional de Administração</option>
                                        <option value="CRAS"    {{ Auth::user()->orgao_expeditor == 'CRAS'    ? 'selected' : ''   }}>CRAS - Conselho Regional de Assistentes Sociais</option>
                                        <option value="CRB"     {{ Auth::user()->orgao_expeditor == 'CRB'     ? 'selected' : ''   }}>CRB - Conselho Regional de Biblioteconomia</option>
                                        <option value="CRC"     {{ Auth::user()->orgao_expeditor == 'CRC'     ? 'selected' : ''   }}>CRC - Conselho Regional de Contabilidade</option>
                                        <option value="CRE"     {{ Auth::user()->orgao_expeditor == 'CRC'     ? 'selected' : ''   }}>CRE - Conselho Regional de Estatística</option>
                                        <option value="CREA"    {{ Auth::user()->orgao_expeditor == 'CREA'    ? 'selected' : ''   }}>CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
                                        <option value="CRECI"   {{ Auth::user()->orgao_expeditor == 'CRECI'   ? 'selected' : ''   }}>CRECI - Conselho Regional de Corretores de Imóveis</option>
                                        <option value="CREFIT"  {{ Auth::user()->orgao_expeditor == 'CREFIT'  ? 'selected' : ''   }}>CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                        <option value="CRF"     {{ Auth::user()->orgao_expeditor == 'CRF'     ? 'selected' : ''   }}>CRF - Conselho Regional de Farmácia</option>
                                        <option value="CRM"     {{ Auth::user()->orgao_expeditor == 'CRM'     ? 'selected' : ''   }}>CRM - Conselho Regional de Medicina</option>
                                        <option value="CRN"     {{ Auth::user()->orgao_expeditor == 'CRN'     ? 'selected' : ''   }}>CRN - Conselho Regional de Nutrição</option>
                                        <option value="CRO"     {{ Auth::user()->orgao_expeditor == 'CRO'     ? 'selected' : ''   }}>CRO - Conselho Regional de Odontologia</option>
                                        <option value="CRP"     {{ Auth::user()->orgao_expeditor == 'CRP'     ? 'selected' : ''   }}>CRP - Conselho Regional de Psicologia</option>
                                        <option value="CRPRE"   {{ Auth::user()->orgao_expeditor == 'CRPRE'   ? 'selected' : ''   }}>CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
                                        <option value="CRQ"     {{ Auth::user()->orgao_expeditor == 'CRQ'     ? 'selected' : ''   }}>CRQ - Conselho Regional de Química</option>
                                        <option value="CRRC"    {{ Auth::user()->orgao_expeditor == 'CRRC'    ? 'selected' : ''   }}>CRRC - Conselho Regional de Representantes Comerciais</option>
                                        <option value="CRMV"    {{ Auth::user()->orgao_expeditor == 'CRMV'    ? 'selected' : ''   }}>CRMV - Conselho Regional de Medicina Veterinária</option>
                                        <option value="DPF"     {{ Auth::user()->orgao_expeditor == 'DPF'     ? 'selected' : ''   }}>DPF - Polícia Federal</option>
                                        <option value="EST"     {{ Auth::user()->orgao_expeditor == 'EST'     ? 'selected' : ''   }}>EST - Documentos Estrangeiros</option>
                                        <option value="I CLA"   {{ Auth::user()->orgao_expeditor == 'I CLA'   ? 'selected' : ''   }}>I CLA - Carteira de Identidade Classista</option>
                                        <option value="MAE"     {{ Auth::user()->orgao_expeditor == 'MAE'     ? 'selected' : ''   }}>MAE - Ministério da Aeronáutica</option>
                                        <option value="MEX"     {{ Auth::user()->orgao_expeditor == 'MEX'     ? 'selected' : ''   }}>MEX - Ministério do Exército</option>
                                        <option value="MMA"     {{ Auth::user()->orgao_expeditor == 'MMA'     ? 'selected' : ''   }}>MMA - Ministério da Marinha</option>
                                        <option value="OAB"     {{ Auth::user()->orgao_expeditor == 'OAB'     ? 'selected' : ''   }}>OAB - Ordem dos Advogados do Brasil</option>
                                        <option value="OMB"     {{ Auth::user()->orgao_expeditor == 'OMB'     ? 'selected' : ''   }}>OMB - Ordens dos Músicos do Brasil</option>
                                        <option value="IFP"     {{ Auth::user()->orgao_expeditor == 'IFP'     ? 'selected' : ''   }}>IFP - Instituto de Identificação Félix Pacheco</option>
                                        <option value="OUT"     {{ Auth::user()->orgao_expeditor == 'OUT'     ? 'selected' : ''   }}>OUT - Outros Emissores</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="numero" class="col-form-label">Número:</label>
                                    <input id="numero" name="numero" type="text" class="form-control" placeholder="Número do endereço" value="{{ Auth::user()->numero }}">
                                </div>

                                <div class="form-group">
                                    <label for="rua" class="col-form-label">Rua (caso o nome da rua tenha número escreva por extenso ex: três de Março)</label>
                                    <input id="rua"  name="rua" type="text" class="form-control" placeholder="" value="{{ Auth::user()->rua }}">
                                </div>

                                <div class="form-group">
                                    <label for="bairro" class="col-form-label">Bairro</label>
                                    <input id="bairro"  name="bairro" type="text" class="form-control" placeholder="" value="{{ Auth::user()->bairro }}">
                                </div>

                                <div class="form-group">
                                    <label for="cidade" class="col-form-label">Cidade</label>
                                    <input id="cidade"  name="cidade" type="text" class="form-control" placeholder="" value="{{ Auth::user()->cidade }}">
                                </div>


                                <div class="form-group">
                                    <label for="cep" class="col-form-label">CEP</label>
                                    <input id="cep" name="cep" type="text" class="form-control cep" placeholder="00000-000" value="{{ Auth::user()->cep }}">
                                </div>

                                <div class="form-group">
                                    <label for="estado" class="col-form-label">Estado</label>
                                    <select class="custom-select" id="estado" name="estado">
                                        <option disabled selected {{ Auth::user()->estado == 'AC' ? 'selected' : '' }}>Selecione um estado</option>
                                        <option value="AC" {{ Auth::user()->estado == 'AC' ? 'selected' : '' }}>Acre</option>
                                        <option value="AL" {{ Auth::user()->estado == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                        <option value="AP" {{ Auth::user()->estado == 'AP' ? 'selected' : '' }}>Amapá</option>
                                        <option value="AM" {{ Auth::user()->estado == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                        <option value="BA" {{ Auth::user()->estado == 'BA' ? 'selected' : '' }}>Bahia</option>
                                        <option value="CE" {{ Auth::user()->estado == 'CE' ? 'selected' : '' }}>Ceará</option>
                                        <option value="DF" {{ Auth::user()->estado == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                        <option value="ES" {{ Auth::user()->estado == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                        <option value="GO" {{ Auth::user()->estado == 'GO' ? 'selected' : '' }}>Goiás</option>
                                        <option value="MA" {{ Auth::user()->estado == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                        <option value="MT" {{ Auth::user()->estado == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                        <option value="MS" {{ Auth::user()->estado == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                        <option value="MG" {{ Auth::user()->estado == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                        <option value="PA" {{ Auth::user()->estado == 'PA' ? 'selected' : '' }}>Pará</option>
                                        <option value="PB" {{ Auth::user()->estado == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                        <option value="PR" {{ Auth::user()->estado == 'PR' ? 'selected' : '' }}>Paraná</option>
                                        <option value="PE" {{ Auth::user()->estado == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                        <option value="PI" {{ Auth::user()->estado == 'PI' ? 'selected' : '' }}>Piauí</option>
                                        <option value="RJ" {{ Auth::user()->estado == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                        <option value="RN" {{ Auth::user()->estado == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                        <option value="RS" {{ Auth::user()->estado == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                        <option value="RO" {{ Auth::user()->estado == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                        <option value="RR" {{ Auth::user()->estado == 'RR' ? 'selected' : '' }}>Roraima</option>
                                        <option value="SC" {{ Auth::user()->estado == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                        <option value="SP" {{ Auth::user()->estado == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                        <option value="SE" {{ Auth::user()->estado == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                        <option value="TO" {{ Auth::user()->estado == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                        <option value="EX" {{ Auth::user()->estado == 'EX' ? 'selected' : '' }}>Estrangeiro</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="btn btn-success"   type="submit" name="editar" value="Envia dados">
                                    </div>
                                </div>

                                <input id="id" name="id" type="hidden" class="form-control" value="{{ Auth::user()->id}}">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </main>
@stop
