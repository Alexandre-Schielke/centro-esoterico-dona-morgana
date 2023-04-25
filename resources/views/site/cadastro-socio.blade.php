@extends('site.template')


@section('conteudo')
    <nav class="float-left nav-interno">
        <div class="container pt-3 pb-3">
            <i class="fas fa-tag"></i> Você esta em <a href="./">Home</a> /
            <a href="#">cadastro sócio</a>
        </div>
    </nav>
    <main role="main" class="pt-5 float-left"  style="width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-8 col-sm-12 ">
                <h3>Formulário de cadastro de sócios</h3>
                <p>Use o formulário abaixo com a informações necessárias para se tornar sócio.</p>
                <hr>
                @if ($message = Session::get('SucessoContato'))
                <div class="alert alert-success alert-dismissible fade show" style="position: ">
                    <strong>Sucesso!</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                @endif
                <form action="{{ route('formulario.sorcio') }} "  method="post" id="buscar"  accept-charset="UTF-8">
                    <!-- route('formulario.contato') -->
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-lg-12"><h1>Dados da empresa</h1></div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="razaoSocial" id="razaoSocial" value="{{ old('razaoSocial') }}" placeholder="Razão Social"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasia" value="{{ old('nomeFantasia') }}" placeholder="Nome Fantasia"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control cnpj" name="cnpj" id="cnpj" value="{{ old('cnpj') }}" placeholder="00.000.000/0000-00"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="numero" id="numero" value="{{ old('numero') }}" placeholder="Número"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="rua" id="rua" value="{{ old('rua') }}" placeholder="Rua"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="cidade" id="cidade" value="{{ old('cidade') }}" placeholder="Cidade"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <select class="custom-select" id="estado" name="estado">
                                <option  selected disabled>Selecione um estado</option>
                                <option value="AC"{{ old('estado') == 'AC' ? 'selected' : '' }}>Acre</option>
                                <option value="AL"{{ old('estado') == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                <option value="AP"{{ old('estado') == 'AP' ? 'selected' : '' }}>Amapá</option>
                                <option value="AM"{{ old('estado') == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                <option value="BA"{{ old('estado') == 'BA' ? 'selected' : '' }}>Bahia</option>
                                <option value="CE"{{ old('estado') == 'CE' ? 'selected' : '' }}>Ceará</option>
                                <option value="DF"{{ old('estado') == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                <option value="ES"{{ old('estado') == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                <option value="GO"{{ old('estado') == 'GO' ? 'selected' : '' }}>Goiás</option>
                                <option value="MA"{{ old('estado') == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                <option value="MT"{{ old('estado') == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                <option value="MS"{{ old('estado') == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                <option value="MG"{{ old('estado') == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                <option value="PA"{{ old('estado') == 'PA' ? 'selected' : '' }}>Pará</option>
                                <option value="PB"{{ old('estado') == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                <option value="PR"{{ old('estado') == 'PR' ? 'selected' : '' }}>Paraná</option>
                                <option value="PE"{{ old('estado') == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                <option value="PI"{{ old('estado') == 'PI' ? 'selected' : '' }}>Piauí</option>
                                <option value="RJ"{{ old('estado') == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                <option value="RN"{{ old('estado') == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                <option value="RS"{{ old('estado') == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                <option value="RO"{{ old('estado') == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                <option value="RR"{{ old('estado') == 'RR' ? 'selected' : '' }}>Roraima</option>
                                <option value="SC"{{ old('estado') == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                <option value="SP"{{ old('estado') == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                <option value="SE"{{ old('estado') == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                <option value="TO"{{ old('estado') == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                <option value="EX"{{ old('estado') == 'EX' ? 'selected' : '' }}>Estrangeiro</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <select  class="form-control" name="pais">
                                <option  selected disabled>Selecione uma país</option>
                                <option value="África do Sul"   {{ old('pais') == 'África do Sul'    ? 'selected' : '' }}>África do Sul</option>
                                <option value="Albânia"         {{ old('pais') == 'Albânia'          ? 'selected' : '' }}>Albânia</option>
                                <option value="Alemanha"        {{ old('pais') == 'Alemanha'         ? 'selected' : '' }}>Alemanha</option>
                                <option value="Andorra"         {{ old('pais') == 'Andorra'          ? 'selected' : '' }}>Andorra</option>
                                <option value="Angola"          {{ old('pais') == 'Angola'           ? 'selected' : '' }}>Angola</option>
                                <option value="Anguilla"        {{ old('pais') == 'Anguilla'         ? 'selected' : '' }}>Anguilla</option>
                                <option value="Antigua"         {{ old('pais') == 'Antigua'          ? 'selected' : '' }}>Antigua</option>
                                <option value="Arábia Saudita"  {{ old('pais') == 'Arábia Saudita'   ? 'selected' : '' }}>Arábia Saudita</option>
                                <option value="Argentina"       {{ old('pais') == 'Argentina'        ? 'selected' : '' }}>Argentina</option>
                                <option value="Armênia"         {{ old('pais') == 'Armênia'          ? 'selected' : '' }}>Armênia</option>
                                <option value="Aruba"           {{ old('pais') == 'Aruba'            ? 'selected' : '' }}>Aruba</option>
                                <option value="Austrália"       {{ old('pais') == 'Austrália'        ? 'selected' : '' }}>Austrália</option>
                                <option value="Áustria"         {{ old('pais') == 'Áustria'          ? 'selected' : '' }}>Áustria</option>
                                <option value="Azerbaijão"      {{ old('pais') == 'Azerbaijão'       ? 'selected' : '' }}>Azerbaijão</option>
                                <option value="Bahamas"         {{ old('pais') == 'Bahamas'          ? 'selected' : '' }}>Bahamas</option>
                                <option value="Bahrein"         {{ old('pais') == 'Bahrein'          ? 'selected' : '' }}>Bahrein</option>
                                <option value="Bangladesh"      {{ old('pais') == 'Bangladesh'       ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Barbados"        {{ old('pais') == 'Barbados'         ? 'selected' : '' }}>Barbados</option>
                                <option value="Bélgica"         {{ old('pais') == 'Bélgica'          ? 'selected' : '' }}>Bélgica</option>
                                <option value="Benin"           {{ old('pais') == 'Benin'            ? 'selected' : '' }}>Benin</option>
                                <option value="Bermudas"        {{ old('pais') == 'Bermudas'         ? 'selected' : '' }}>Bermudas</option>
                                <option value="Botsuana"        {{ old('pais') == 'Botsuana'         ? 'selected' : '' }}>Botsuana</option>
                                <option value="Brasil"          {{ old('pais') == 'Brasil'           ? 'selected' : '' }}>Brasil</option>
                                <option value="Brunei"          {{ old('pais') == 'Brunei'           ? 'selected' : '' }}>Brunei</option>
                                <option value="Bulgária"        {{ old('pais') == 'Bulgária'         ? 'selected' : '' }}>Bulgária</option>
                                <option value="Burkina Fasso"   {{ old('pais') == 'Burkina Fasso'    ? 'selected' : '' }}>Burkina Fasso</option>
                                <option value="botão"           {{ old('pais') == 'botão'            ? 'selected' : '' }}>botão</option>
                                <option value="Cabo Verde"      {{ old('pais') == 'Cabo Verde'       ? 'selected' : '' }}>Cabo Verde</option>
                                <option value="Camarões"        {{ old('pais') == 'Camarões'         ? 'selected' : '' }}>Camarões</option>
                                <option value="Camboja"         {{ old('pais') == 'Camboja'          ? 'selected' : '' }}>Camboja</option>
                                <option value="Canadá"          {{ old('pais') == 'Canadá'           ? 'selected' : '' }}>Canadá</option>
                                <option value="Cazaquistão"     {{ old('pais') == 'Cazaquistão'      ? 'selected' : '' }}>Cazaquistão</option>
                                <option value="Chade"           {{ old('pais') == 'Chade'            ? 'selected' : '' }}>Chade</option>
                                <option value="Chile"           {{ old('pais') == 'Chile'            ? 'selected' : '' }}>Chile</option>
                                <option value="China"           {{ old('pais') == 'China'            ? 'selected' : '' }}>China</option>
                                <option value="Cidade do Vaticano" {{ old('pais') == 'Cidade do Vaticano' ? 'selected' : '' }}>Cidade do Vaticano</option>
                                <option value="Colômbia"        {{ old('pais') == 'Colômbia'         ? 'selected' : '' }}>Colômbia</option>
                                <option value="Congo"           {{ old('pais') == 'Congo'            ? 'selected' : '' }}>Congo</option>
                                <option value="Coréia do Sul"   {{ old('pais') == 'Coréia do Sul'    ? 'selected' : '' }}>Coréia do Sul</option>
                                <option value="Costa do Marfim" {{ old('pais') == 'Costa do Marfim'  ? 'selected' : '' }}>Costa do Marfim</option>
                                <option value="Costa Rica"      {{ old('pais') == 'Costa Rica'       ? 'selected' : '' }}>Costa Rica</option>
                                <option value="Croácia"         {{ old('pais') == 'Croácia'          ? 'selected' : '' }}>Croácia</option>
                                <option value="Dinamarca"       {{ old('pais') == 'Dinamarca'        ? 'selected' : '' }}>Dinamarca</option>
                                <option value="Djibuti"         {{ old('pais') == 'Djibuti'          ? 'selected' : '' }}>Djibuti</option>
                                <option value="Dominica"        {{ old('pais') == 'Dominica'         ? 'selected' : '' }}>Dominica</option>
                                <option value="EUA"             {{ old('pais') == 'EUA'              ? 'selected' : '' }}>EUA</option>
                                <option value="Egito"           {{ old('pais') == 'Egito'            ? 'selected' : '' }}>Egito</option>
                                <option value="El Salvador"     {{ old('pais') == 'El Salvador'      ? 'selected' : '' }}>El Salvador</option>
                                <option value="Emirados Árabes" {{ old('pais') == 'Emirados Árabes'  ? 'selected' : '' }}>Emirados Árabes</option>
                                <option value="Equador"         {{ old('pais') == 'Equador'          ? 'selected' : '' }}>Equador</option>
                                <option value="Eritréia"        {{ old('pais') == 'Eritréia'         ? 'selected' : '' }}>Eritréia</option>
                                <option value="Escócia"         {{ old('pais') == 'Escócia'          ? 'selected' : '' }}>Escócia</option>
                                <option value="Eslováquia"      {{ old('pais') == 'Eslováquia'       ? 'selected' : '' }}>Eslováquia</option>
                                <option value="Eslovênia"       {{ old('pais') == 'Eslovênia'        ? 'selected' : '' }}>Eslovênia</option>
                                <option value="Espanha"         {{ old('pais') == 'Espanha'          ? 'selected' : '' }}>Espanha</option>
                                <option value="Estônia"         {{ old('pais') == 'Estônia'          ? 'selected' : '' }}>Estônia</option>
                                <option value="Etiópia"         {{ old('pais') == 'Etiópia'          ? 'selected' : '' }}>Etiópia</option>
                                <option value="Fiji"            {{ old('pais') == 'Fiji'             ? 'selected' : '' }}>Fiji</option>
                                <option value="Filipinas"       {{ old('pais') == 'Filipinas'        ? 'selected' : '' }}>Filipinas</option>
                                <option value="Finlândia"       {{ old('pais') == 'Finlândia'        ? 'selected' : '' }}>Finlândia</option>
                                <option value="França"          {{ old('pais') == 'França'           ? 'selected' : '' }}>França</option>
                                <option value="Gabão"           {{ old('pais') == 'Gabão'            ? 'selected' : '' }}>Gabão</option>
                                <option value="Gâmbia"          {{ old('pais') == 'Gâmbia'           ? 'selected' : '' }}>Gâmbia</option>
                                <option value="Gana"            {{ old('pais') == 'Gana'             ? 'selected' : '' }}>Gana</option>
                                <option value="Geórgia"         {{ old('pais') == 'Geórgia'          ? 'selected' : '' }}>Geórgia</option>
                                <option value="Gibraltar"       {{ old('pais') == 'Gibraltar'        ? 'selected' : '' }}>Gibraltar</option>
                                <option value="Granada"         {{ old('pais') == 'Granada'          ? 'selected' : '' }}>Granada</option>
                                <option value="Grécia"          {{ old('pais') == 'Grécia'           ? 'selected' : '' }}>Grécia</option>
                                <option value="Guadalupe"       {{ old('pais') == 'Guadalupe'        ? 'selected' : '' }}>Guadalupe</option>
                                <option value="Guam"            {{ old('pais') == 'Guam'             ? 'selected' : '' }}>Guam</option>
                                <option value="Guatemala"       {{ old('pais') == 'Guatemala'        ? 'selected' : '' }}>Guatemala</option>
                                <option value="Guiana"          {{ old('pais') == 'Guiana'           ? 'selected' : '' }}>Guiana</option>
                                <option value="Guiana Francesa" {{ old('pais') == 'Guiana Francesa'  ? 'selected' : '' }}>Guiana Francesa</option>
                                <option value="Guiné-bissau"    {{ old('pais') == 'Guiné-bissau'     ? 'selected' : '' }}>Guiné-bissau</option>
                                <option value="Haiti"           {{ old('pais') == 'Haiti'            ? 'selected' : '' }}>Haiti</option>
                                <option value="Holanda"         {{ old('pais') == 'Holanda'          ? 'selected' : '' }}>Holanda</option>
                                <option value="Honduras"        {{ old('pais') == 'Honduras'         ? 'selected' : '' }}>Honduras</option>
                                <option value="Hong Kong"       {{ old('pais') == 'Hong Kong'        ? 'selected' : '' }}>Hong Kong</option>
                                <option value="Hungria"         {{ old('pais') == 'Hungria'          ? 'selected' : '' }}>Hungria</option>
                                <option value="Iêmen"           {{ old('pais') == 'Iêmen'            ? 'selected' : '' }}>Iêmen</option>
                                <option value="Ilhas Cayman"    {{ old('pais') == 'Ilhas Cayman'     ? 'selected' : '' }}>Ilhas Cayman</option>
                                <option value="Ilhas Cook"      {{ old('pais') == 'Ilhas Cook'       ? 'selected' : '' }}>Ilhas Cook</option>
                                <option value="Ilhas Curaçao"   {{ old('pais') == 'Ilhas Curaçao'    ? 'selected' : '' }}>Ilhas Curaçao</option>
                                <option value="Ilhas Marshall"  {{ old('pais') == 'Ilhas Marshall'   ? 'selected' : '' }}>Ilhas Marshall</option>
                                <option value="Ilhas Turks & Caicos"    {{ old('pais') == 'Ilhas Turks & Caicos'     ? 'selected' : '' }}>Ilhas Turks & Caicos</option>
                                <option value="Ilhas Virgens (brit.)"   {{ old('pais') == 'Ilhas Virgens (brit.)'    ? 'selected' : '' }}>Ilhas Virgens (brit.)</option>
                                <option value="Ilhas Virgens(amer.)"    {{ old('pais') == 'Ilhas Virgens(amer.)'     ? 'selected' : '' }}>Ilhas Virgens(amer.)</option>
                                <option value="Ilhas Wallis e Futuna"   {{ old('pais') == 'Ilhas Wallis e Futuna'    ? 'selected' : '' }}>Ilhas Wallis e Futuna</option>
                                <option value="Índia"           {{ old('pais') == 'Índia'            ? 'selected' : '' }}>Índia</option>
                                <option value="Indonésia"       {{ old('pais') == 'Indonésia'        ? 'selected' : '' }}>Indonésia</option>
                                <option value="Inglaterra"      {{ old('pais') == 'Inglaterra'       ? 'selected' : '' }}>Inglaterra</option>
                                <option value="Irlanda"         {{ old('pais') == 'Inglaterra'       ? 'selected' : '' }}>Irlanda</option>
                                <option value="Islândia"        {{ old('pais') == 'Irlanda'          ? 'selected' : '' }}>Islândia</option>
                                <option value="Israel"          {{ old('pais') == 'Israel'           ? 'selected' : '' }}>Israel</option>
                                <option value="Itália"          {{ old('pais') == 'Itália'           ? 'selected' : '' }}>Itália</option>
                                <option value="Jamaica"         {{ old('pais') == 'Jamaica'          ? 'selected' : '' }}>Jamaica</option>
                                <option value="Japão"           {{ old('pais') == 'Japão'            ? 'selected' : '' }}>Japão</option>
                                <option value="Jordânia"        {{ old('pais') == 'Jordânia'         ? 'selected' : '' }}>Jordânia</option>
                                <option value="Kuwait"          {{ old('pais') == 'Kuwait'           ? 'selected' : '' }}>Kuwait</option>
                                <option value="Latvia"          {{ old('pais') == 'Latvia'           ? 'selected' : '' }}>Latvia</option>
                                <option value="Líbano"          {{ old('pais') == 'Líbano'           ? 'selected' : '' }}>Líbano</option>
                                <option value="Liechtenstein"   {{ old('pais') == 'Liechtenstein'    ? 'selected' : '' }}>Liechtenstein</option>
                                <option value="Lituânia"        {{ old('pais') == 'Lituânia'         ? 'selected' : '' }}>Lituânia</option>
                                <option value="Luxemburgo"      {{ old('pais') == 'Luxemburgo'       ? 'selected' : '' }}>Luxemburgo</option>
                                <option value="Macau"           {{ old('pais') == 'Macau'            ? 'selected' : '' }}>Macau</option>
                                <option value="Macedônia"       {{ old('pais') == 'Macedônia'        ? 'selected' : '' }}>Macedônia</option>
                                <option value="Madagascar"      {{ old('pais') == 'Madagascar'       ? 'selected' : '' }}>Madagascar</option>
                                <option value="Malásia"         {{ old('pais') == 'Malásia'          ? 'selected' : '' }}>Malásia</option>
                                <option value="Malaui"          {{ old('pais') == 'Malaui'           ? 'selected' : '' }}>Malaui</option>
                                <option value="Mali"            {{ old('pais') == 'Mali'             ? 'selected' : '' }}>Mali</option>
                                <option value="Malta"           {{ old('pais') == 'Malta'            ? 'selected' : '' }}>Malta</option>
                                <option value="Marrocos"        {{ old('pais') == 'Marrocos'         ? 'selected' : '' }}>Marrocos</option>
                                <option value="Martinica"       {{ old('pais') == 'Martinica'        ? 'selected' : '' }}>Martinica</option>
                                <option value="Mauritânia"      {{ old('pais') == 'Mauritânia'       ? 'selected' : '' }}>Mauritânia</option>
                                <option value="Mauritius"       {{ old('pais') == 'Mauritius'        ? 'selected' : '' }}>Mauritius</option>
                                <option value="México"          {{ old('pais') == 'México'           ? 'selected' : '' }}>México</option>
                                <option value="Moldova"         {{ old('pais') == 'Moldova'          ? 'selected' : '' }}>Moldova</option>
                                <option value="Mônaco"          {{ old('pais') == 'Mônaco'           ? 'selected' : '' }}>Mônaco</option>
                                <option value="Montserrat"      {{ old('pais') == 'Montserrat'       ? 'selected' : '' }}>Montserrat</option>
                                <option value="Nepal"           {{ old('pais') == 'Nepal'            ? 'selected' : '' }}>Nepal</option>
                                <option value="Nicarágua"       {{ old('pais') == 'Nicarágua'        ? 'selected' : '' }}>Nicarágua</option>
                                <option value="Niger"           {{ old('pais') == 'Niger'            ? 'selected' : '' }}>Niger</option>
                                <option value="Nigéria"         {{ old('pais') == 'Nigéria'          ? 'selected' : '' }}>Nigéria</option>
                                <option value="Noruega"         {{ old('pais') == 'Noruega'          ? 'selected' : '' }}>Noruega</option>
                                <option value="Nova Caledônia"  {{ old('pais') == 'Nova Caledônia'   ? 'selected' : '' }}>Nova Caledônia</option>
                                <option value="Nova Zelândia"   {{ old('pais') == 'Nova Zelândia'    ? 'selected' : '' }}>Nova Zelândia</option>
                                <option value="Omã"             {{ old('pais') == 'Omã'              ? 'selected' : '' }}>Omã</option>
                                <option value="Palau"           {{ old('pais') == 'Palau'            ? 'selected' : '' }}>Palau</option>
                                <option value="Panamá"          {{ old('pais') == 'Panamá'           ? 'selected' : '' }}>Panamá</option>
                                <option value="Papua-nova Guiné" {{ old('pais') == 'Papua-nova Guiné' ? 'selected' : '' }}>Papua-nova Guiné</option>
                                <option value="Paquistão"        {{ old('pais') == 'Paquistão'        ? 'selected' : '' }}>Paquistão</option>
                                <option value="Peru"             {{ old('pais') == 'Peru'             ? 'selected' : '' }}>Peru</option>
                                <option value="Polinésia Francesa" {{ old('pais') == 'Polinésia Francesa' ? 'selected' : '' }}>Polinésia Francesa</option>
                                <option value="Polônia"         {{ old('pais') == 'Polônia'          ? 'selected' : '' }}>Polônia</option>
                                <option value="Porto Rico"      {{ old('pais') == 'Porto Rico'       ? 'selected' : '' }}>Porto Rico</option>
                                <option value="Portugal"        {{ old('pais') == 'Portugal'         ? 'selected' : '' }}>Portugal</option>
                                <option value="Qatar"           {{ old('pais') == 'Qatar'            ? 'selected' : '' }}>Qatar</option>
                                <option value="Quênia"          {{ old('pais') == 'Quênia'           ? 'selected' : '' }}>Quênia</option>
                                <option value="Rep. Dominicana" {{ old('pais') == 'Rep. Dominicana'  ? 'selected' : '' }}>Rep. Dominicana</option>
                                <option value="Rep. Tcheca"     {{ old('pais') == 'Rep. Tcheca'      ? 'selected' : '' }}>Rep. Tcheca</option>
                                <option value="Reunion"         {{ old('pais') == 'Reunion'          ? 'selected' : '' }}>Reunion</option>
                                <option value="Romênia"         {{ old('pais') == 'Romênia'          ? 'selected' : '' }}>Romênia</option>
                                <option value="Ruanda"          {{ old('pais') == 'Ruanda'           ? 'selected' : '' }}>Ruanda</option>
                                <option value="Rússia"          {{ old('pais') == 'Rússia'           ? 'selected' : '' }}>Rússia</option>
                                <option value="Saipan"          {{ old('pais') == 'Saipan'           ? 'selected' : '' }}>Saipan</option>
                                <option value="Samoa Americana" {{ old('pais') == 'Samoa Americana'  ? 'selected' : '' }}>Samoa Americana</option>
                                <option value="Senegal"         {{ old('pais') == 'Senegal'          ? 'selected' : '' }}>Senegal</option>
                                <option value="Serra Leone"     {{ old('pais') == 'Serra Leone'      ? 'selected' : '' }}>Serra Leone</option>
                                <option value="Seychelles"      {{ old('pais') == 'Seychelle'        ? 'selected' : '' }}>Seychelles</option>
                                <option value="Singapura"       {{ old('pais') == 'Singapura'        ? 'selected' : '' }}>Singapura</option>
                                <option value="Síria"           {{ old('pais') == 'Síria'            ? 'selected' : '' }}>Síria</option>
                                <option value="Sri Lanka"       {{ old('pais') == 'Sri Lanka'        ? 'selected' : '' }}>Sri Lanka</option>
                                <option value="St. Kitts & Nevis" {{ old('pais') == 'St. Kitts & Nevis' ? 'selected' : '' }}>St. Kitts & Nevis</option>
                                <option value="St. Lúcia"       {{ old('pais') == 'St. Lúcia'        ? 'selected' : '' }}>St. Lúcia</option>
                                <option value="St. Vincent"     {{ old('pais') == 'St. Vincent'      ? 'selected' : '' }}>St. Vincent</option>
                                <option value="Sudão"           {{ old('pais') == 'Sudão'            ? 'selected' : '' }}>Sudão</option>
                                <option value="Suécia"          {{ old('pais') == 'Suécia'           ? 'selected' : '' }}>Suécia</option>
                                <option value="Suiça"           {{ old('pais') == 'Suiça'            ? 'selected' : '' }}>Suiça</option>
                                <option value="Suriname"        {{ old('pais') == 'Suriname'         ? 'selected' : '' }}>Suriname</option>
                                <option value="Tailândia"       {{ old('pais') == 'Tailândia'        ? 'selected' : '' }}>Tailândia</option>
                                <option value="Taiwan"          {{ old('pais') == 'Taiwan'           ? 'selected' : '' }}>Taiwan</option>
                                <option value="Tanzânia"        {{ old('pais') == 'Tanzânia'         ? 'selected' : '' }}>Tanzânia</option>
                                <option value="Togo"            {{ old('pais') == 'Togo'             ? 'selected' : '' }}>Togo</option>
                                <option value="Trinidad & Tobago" {{ old('pais') == 'Trinidad & Tobago' ? 'selected' : '' }}>Trinidad & Tobago</option>
                                <option value="Tunísia"         {{ old('pais') == 'Tunísia'          ? 'selected' : '' }}>Tunísia</option>
                                <option value="Turquia"         {{ old('pais') == 'Turquia"'         ? 'selected' : '' }}>Turquia</option>
                                <option value="Ucrânia"         {{ old('pais') == 'Ucrânia'          ? 'selected' : '' }}>Ucrânia</option>
                                <option value="Uganda"          {{ old('pais') == 'Uganda'           ? 'selected' : '' }}>Uganda</option>
                                <option value="Uruguai"         {{ old('pais') == 'Uruguai'          ? 'selected' : '' }}>Uruguai</option>
                                <option value="Venezuela"       {{ old('pais') == 'Venezuela'        ? 'selected' : '' }}>Venezuela</option>
                                <option value="Vietnã"          {{ old('pais') == 'Vietnã'           ? 'selected' : '' }}>Vietnã</option>
                                <option value="Zaire"           {{ old('pais') == 'Zaire'            ? 'selected' : '' }}>Zaire</option>
                                <option value="Zâmbia"          {{ old('pais') == 'Zâmbia'           ? 'selected' : '' }}>Zâmbia</option>
                                <option value="Zimbábue"        {{ old('pais') == 'Zimbábue'         ? 'selected' : '' }}>Zimbábue</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control cep" name="cep" id="cep" value="{{ old('cep') }}" placeholder="CEP"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control phone" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="Telefone"/>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="inscricaoEstadual" id="inscricaoEstadual" value="{{ old('inscricaoEstadual') }}" placeholder="Inscrição Estadual"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="registroJuntaComercial" id="registroJuntaComercial" value="{{ old('registroJuntaComercial') }}" placeholder="Registro Junta Comercial"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="inscricaoAnp" id="inscricaoAnp" value="{{ old('inscricaoAnp') }}" placeholder="Inscrição ANP"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="atividadeSobreBandeira" id="atividadeSobreBandeira" value="{{ old('atividadeSobreBandeira') }}" placeholder="Atividade Sobre Bandeira"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="baseEstabelecimento" id="baseEstabelecimento" value="{{ old('baseEstabelecimento') }}" placeholder="Base de Estabelecimento (onde carrega)"/>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <textarea class="form-control input-contato" name="mensagem" rows="5" data-rule="required"   placeholder="Solicita V.Sas. a sua inscrição nesse sindicato, declarando seu representante legal junto a essa entidade o Sr. (a)">{{ old('mensagem') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group col-lg-12"><h1>Dados do sócio</h1></div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="nomePj" id="nomePj" value="{{ old('nomePj') }}" placeholder="Nome Completo"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <select  class="form-control" name="nacionalidadePj">
                                <option  selected disabled>Selecione uma Nacionalidade</option>
                                <option value="África do Sul"   {{ old('nacionalidadePj') == 'África do Sul'    ? 'selected' : '' }}>África do Sul</option>
                                <option value="Albânia"         {{ old('nacionalidadePj') == 'Albânia'          ? 'selected' : '' }}>Albânia</option>
                                <option value="Alemanha"        {{ old('nacionalidadePj') == 'Alemanha'         ? 'selected' : '' }}>Alemanha</option>
                                <option value="Andorra"         {{ old('nacionalidadePj') == 'Andorra'          ? 'selected' : '' }}>Andorra</option>
                                <option value="Angola"          {{ old('nacionalidadePj') == 'Angola'           ? 'selected' : '' }}>Angola</option>
                                <option value="Anguilla"        {{ old('nacionalidadePj') == 'Anguilla'         ? 'selected' : '' }}>Anguilla</option>
                                <option value="Antigua"         {{ old('nacionalidadePj') == 'Antigua'          ? 'selected' : '' }}>Antigua</option>
                                <option value="Arábia Saudita"  {{ old('nacionalidadePj') == 'Arábia Saudita'   ? 'selected' : '' }}>Arábia Saudita</option>
                                <option value="Argentina"       {{ old('nacionalidadePj') == 'Argentina'        ? 'selected' : '' }}>Argentina</option>
                                <option value="Armênia"         {{ old('nacionalidadePj') == 'Armênia'          ? 'selected' : '' }}>Armênia</option>
                                <option value="Aruba"           {{ old('nacionalidadePj') == 'Aruba'            ? 'selected' : '' }}>Aruba</option>
                                <option value="Austrália"       {{ old('nacionalidadePj') == 'Austrália'        ? 'selected' : '' }}>Austrália</option>
                                <option value="Áustria"         {{ old('nacionalidadePj') == 'Áustria'          ? 'selected' : '' }}>Áustria</option>
                                <option value="Azerbaijão"      {{ old('nacionalidadePj') == 'Azerbaijão'       ? 'selected' : '' }}>Azerbaijão</option>
                                <option value="Bahamas"         {{ old('nacionalidadePj') == 'Bahamas'          ? 'selected' : '' }}>Bahamas</option>
                                <option value="Bahrein"         {{ old('nacionalidadePj') == 'Bahrein'          ? 'selected' : '' }}>Bahrein</option>
                                <option value="Bangladesh"      {{ old('nacionalidadePj') == 'Bangladesh'       ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Barbados"        {{ old('nacionalidadePj') == 'Barbados'         ? 'selected' : '' }}>Barbados</option>
                                <option value="Bélgica"         {{ old('nacionalidadePj') == 'Bélgica'          ? 'selected' : '' }}>Bélgica</option>
                                <option value="Benin"           {{ old('nacionalidadePj') == 'Benin'            ? 'selected' : '' }}>Benin</option>
                                <option value="Bermudas"        {{ old('nacionalidadePj') == 'Bermudas'         ? 'selected' : '' }}>Bermudas</option>
                                <option value="Botsuana"        {{ old('nacionalidadePj') == 'Botsuana'         ? 'selected' : '' }}>Botsuana</option>
                                <option value="Brasil"          {{ old('nacionalidadePj') == 'Brasil'           ? 'selected' : '' }}>Brasil</option>
                                <option value="Brunei"          {{ old('nacionalidadePj') == 'Brunei'           ? 'selected' : '' }}>Brunei</option>
                                <option value="Bulgária"        {{ old('nacionalidadePj') == 'Bulgária'         ? 'selected' : '' }}>Bulgária</option>
                                <option value="Burkina Fasso"   {{ old('nacionalidadePj') == 'Burkina Fasso'    ? 'selected' : '' }}>Burkina Fasso</option>
                                <option value="botão"           {{ old('nacionalidadePj') == 'botão'            ? 'selected' : '' }}>botão</option>
                                <option value="Cabo Verde"      {{ old('nacionalidadePj') == 'Cabo Verde'       ? 'selected' : '' }}>Cabo Verde</option>
                                <option value="Camarões"        {{ old('nacionalidadePj') == 'Camarões'         ? 'selected' : '' }}>Camarões</option>
                                <option value="Camboja"         {{ old('nacionalidadePj') == 'Camboja'          ? 'selected' : '' }}>Camboja</option>
                                <option value="Canadá"          {{ old('nacionalidadePj') == 'Canadá'           ? 'selected' : '' }}>Canadá</option>
                                <option value="Cazaquistão"     {{ old('nacionalidadePj') == 'Cazaquistão'      ? 'selected' : '' }}>Cazaquistão</option>
                                <option value="Chade"           {{ old('nacionalidadePj') == 'Chade'            ? 'selected' : '' }}>Chade</option>
                                <option value="Chile"           {{ old('nacionalidadePj') == 'Chile'            ? 'selected' : '' }}>Chile</option>
                                <option value="China"           {{ old('nacionalidadePj') == 'China'            ? 'selected' : '' }}>China</option>
                                <option value="Cidade do Vaticano" {{ old('nacionalidadePj') == 'Cidade do Vaticano' ? 'selected' : '' }}>Cidade do Vaticano</option>
                                <option value="Colômbia"        {{ old('nacionalidadePj') == 'Colômbia'         ? 'selected' : '' }}>Colômbia</option>
                                <option value="Congo"           {{ old('nacionalidadePj') == 'Congo'            ? 'selected' : '' }}>Congo</option>
                                <option value="Coréia do Sul"   {{ old('nacionalidadePj') == 'Coréia do Sul'    ? 'selected' : '' }}>Coréia do Sul</option>
                                <option value="Costa do Marfim" {{ old('nacionalidadePj') == 'Costa do Marfim'  ? 'selected' : '' }}>Costa do Marfim</option>
                                <option value="Costa Rica"      {{ old('nacionalidadePj') == 'Costa Rica'       ? 'selected' : '' }}>Costa Rica</option>
                                <option value="Croácia"         {{ old('nacionalidadePj') == 'Croácia'          ? 'selected' : '' }}>Croácia</option>
                                <option value="Dinamarca"       {{ old('nacionalidadePj') == 'Dinamarca'        ? 'selected' : '' }}>Dinamarca</option>
                                <option value="Djibuti"         {{ old('nacionalidadePj') == 'Djibuti'          ? 'selected' : '' }}>Djibuti</option>
                                <option value="Dominica"        {{ old('nacionalidadePj') == 'Dominica'         ? 'selected' : '' }}>Dominica</option>
                                <option value="EUA"             {{ old('nacionalidadePj') == 'EUA'              ? 'selected' : '' }}>EUA</option>
                                <option value="Egito"           {{ old('nacionalidadePj') == 'Egito'            ? 'selected' : '' }}>Egito</option>
                                <option value="El Salvador"     {{ old('nacionalidadePj') == 'El Salvador'      ? 'selected' : '' }}>El Salvador</option>
                                <option value="Emirados Árabes" {{ old('nacionalidadePj') == 'Emirados Árabes'  ? 'selected' : '' }}>Emirados Árabes</option>
                                <option value="Equador"         {{ old('nacionalidadePj') == 'Equador'          ? 'selected' : '' }}>Equador</option>
                                <option value="Eritréia"        {{ old('nacionalidadePj') == 'Eritréia'         ? 'selected' : '' }}>Eritréia</option>
                                <option value="Escócia"         {{ old('nacionalidadePj') == 'Escócia'          ? 'selected' : '' }}>Escócia</option>
                                <option value="Eslováquia"      {{ old('nacionalidadePj') == 'Eslováquia'       ? 'selected' : '' }}>Eslováquia</option>
                                <option value="Eslovênia"       {{ old('nacionalidadePj') == 'Eslovênia'        ? 'selected' : '' }}>Eslovênia</option>
                                <option value="Espanha"         {{ old('nacionalidadePj') == 'Espanha'          ? 'selected' : '' }}>Espanha</option>
                                <option value="Estônia"         {{ old('nacionalidadePj') == 'Estônia'          ? 'selected' : '' }}>Estônia</option>
                                <option value="Etiópia"         {{ old('nacionalidadePj') == 'Etiópia'          ? 'selected' : '' }}>Etiópia</option>
                                <option value="Fiji"            {{ old('nacionalidadePj') == 'Fiji'             ? 'selected' : '' }}>Fiji</option>
                                <option value="Filipinas"       {{ old('nacionalidadePj') == 'Filipinas'        ? 'selected' : '' }}>Filipinas</option>
                                <option value="Finlândia"       {{ old('nacionalidadePj') == 'Finlândia'        ? 'selected' : '' }}>Finlândia</option>
                                <option value="França"          {{ old('nacionalidadePj') == 'França'           ? 'selected' : '' }}>França</option>
                                <option value="Gabão"           {{ old('nacionalidadePj') == 'Gabão'            ? 'selected' : '' }}>Gabão</option>
                                <option value="Gâmbia"          {{ old('nacionalidadePj') == 'Gâmbia'           ? 'selected' : '' }}>Gâmbia</option>
                                <option value="Gana"            {{ old('nacionalidadePj') == 'Gana'             ? 'selected' : '' }}>Gana</option>
                                <option value="Geórgia"         {{ old('nacionalidadePj') == 'Geórgia'          ? 'selected' : '' }}>Geórgia</option>
                                <option value="Gibraltar"       {{ old('nacionalidadePj') == 'Gibraltar'        ? 'selected' : '' }}>Gibraltar</option>
                                <option value="Granada"         {{ old('nacionalidadePj') == 'Granada'          ? 'selected' : '' }}>Granada</option>
                                <option value="Grécia"          {{ old('nacionalidadePj') == 'Grécia'           ? 'selected' : '' }}>Grécia</option>
                                <option value="Guadalupe"       {{ old('nacionalidadePj') == 'Guadalupe'        ? 'selected' : '' }}>Guadalupe</option>
                                <option value="Guam"            {{ old('nacionalidadePj') == 'Guam'             ? 'selected' : '' }}>Guam</option>
                                <option value="Guatemala"       {{ old('nacionalidadePj') == 'Guatemala'        ? 'selected' : '' }}>Guatemala</option>
                                <option value="Guiana"          {{ old('nacionalidadePj') == 'Guiana'           ? 'selected' : '' }}>Guiana</option>
                                <option value="Guiana Francesa" {{ old('nacionalidadePj') == 'Guiana Francesa'  ? 'selected' : '' }}>Guiana Francesa</option>
                                <option value="Guiné-bissau"    {{ old('nacionalidadePj') == 'Guiné-bissau'     ? 'selected' : '' }}>Guiné-bissau</option>
                                <option value="Haiti"           {{ old('nacionalidadePj') == 'Haiti'            ? 'selected' : '' }}>Haiti</option>
                                <option value="Holanda"         {{ old('nacionalidadePj') == 'Holanda'          ? 'selected' : '' }}>Holanda</option>
                                <option value="Honduras"        {{ old('nacionalidadePj') == 'Honduras'         ? 'selected' : '' }}>Honduras</option>
                                <option value="Hong Kong"       {{ old('nacionalidadePj') == 'Hong Kong'        ? 'selected' : '' }}>Hong Kong</option>
                                <option value="Hungria"         {{ old('nacionalidadePj') == 'Hungria'          ? 'selected' : '' }}>Hungria</option>
                                <option value="Iêmen"           {{ old('nacionalidadePj') == 'Iêmen'            ? 'selected' : '' }}>Iêmen</option>
                                <option value="Ilhas Cayman"    {{ old('nacionalidadePj') == 'Ilhas Cayman'     ? 'selected' : '' }}>Ilhas Cayman</option>
                                <option value="Ilhas Cook"      {{ old('nacionalidadePj') == 'Ilhas Cook'       ? 'selected' : '' }}>Ilhas Cook</option>
                                <option value="Ilhas Curaçao"   {{ old('nacionalidadePj') == 'Ilhas Curaçao'    ? 'selected' : '' }}>Ilhas Curaçao</option>
                                <option value="Ilhas Marshall"  {{ old('nacionalidadePj') == 'Ilhas Marshall'   ? 'selected' : '' }}>Ilhas Marshall</option>
                                <option value="Ilhas Turks & Caicos"    {{ old('nacionalidadePj') == 'Ilhas Turks & Caicos'     ? 'selected' : '' }}>Ilhas Turks & Caicos</option>
                                <option value="Ilhas Virgens (brit.)"   {{ old('nacionalidadePj') == 'Ilhas Virgens (brit.)'    ? 'selected' : '' }}>Ilhas Virgens (brit.)</option>
                                <option value="Ilhas Virgens(amer.)"    {{ old('nacionalidadePj') == 'Ilhas Virgens(amer.)'     ? 'selected' : '' }}>Ilhas Virgens(amer.)</option>
                                <option value="Ilhas Wallis e Futuna"   {{ old('nacionalidadePj') == 'Ilhas Wallis e Futuna'    ? 'selected' : '' }}>Ilhas Wallis e Futuna</option>
                                <option value="Índia"           {{ old('nacionalidadePj') == 'Índia'            ? 'selected' : '' }}>Índia</option>
                                <option value="Indonésia"       {{ old('nacionalidadePj') == 'Indonésia'        ? 'selected' : '' }}>Indonésia</option>
                                <option value="Inglaterra"      {{ old('nacionalidadePj') == 'Inglaterra'       ? 'selected' : '' }}>Inglaterra</option>
                                <option value="Irlanda"         {{ old('nacionalidadePj') == 'Inglaterra'       ? 'selected' : '' }}>Irlanda</option>
                                <option value="Islândia"        {{ old('nacionalidadePj') == 'Irlanda'          ? 'selected' : '' }}>Islândia</option>
                                <option value="Israel"          {{ old('nacionalidadePj') == 'Israel'           ? 'selected' : '' }}>Israel</option>
                                <option value="Itália"          {{ old('nacionalidadePj') == 'Itália'           ? 'selected' : '' }}>Itália</option>
                                <option value="Jamaica"         {{ old('nacionalidadePj') == 'Jamaica'          ? 'selected' : '' }}>Jamaica</option>
                                <option value="Japão"           {{ old('nacionalidadePj') == 'Japão'            ? 'selected' : '' }}>Japão</option>
                                <option value="Jordânia"        {{ old('nacionalidadePj') == 'Jordânia'         ? 'selected' : '' }}>Jordânia</option>
                                <option value="Kuwait"          {{ old('nacionalidadePj') == 'Kuwait'           ? 'selected' : '' }}>Kuwait</option>
                                <option value="Latvia"          {{ old('nacionalidadePj') == 'Latvia'           ? 'selected' : '' }}>Latvia</option>
                                <option value="Líbano"          {{ old('nacionalidadePj') == 'Líbano'           ? 'selected' : '' }}>Líbano</option>
                                <option value="Liechtenstein"   {{ old('nacionalidadePj') == 'Liechtenstein'    ? 'selected' : '' }}>Liechtenstein</option>
                                <option value="Lituânia"        {{ old('nacionalidadePj') == 'Lituânia'         ? 'selected' : '' }}>Lituânia</option>
                                <option value="Luxemburgo"      {{ old('nacionalidadePj') == 'Luxemburgo'       ? 'selected' : '' }}>Luxemburgo</option>
                                <option value="Macau"           {{ old('nacionalidadePj') == 'Macau'            ? 'selected' : '' }}>Macau</option>
                                <option value="Macedônia"       {{ old('nacionalidadePj') == 'Macedônia'        ? 'selected' : '' }}>Macedônia</option>
                                <option value="Madagascar"      {{ old('nacionalidadePj') == 'Madagascar'       ? 'selected' : '' }}>Madagascar</option>
                                <option value="Malásia"         {{ old('nacionalidadePj') == 'Malásia'          ? 'selected' : '' }}>Malásia</option>
                                <option value="Malaui"          {{ old('nacionalidadePj') == 'Malaui'           ? 'selected' : '' }}>Malaui</option>
                                <option value="Mali"            {{ old('nacionalidadePj') == 'Mali'             ? 'selected' : '' }}>Mali</option>
                                <option value="Malta"           {{ old('nacionalidadePj') == 'Malta'            ? 'selected' : '' }}>Malta</option>
                                <option value="Marrocos"        {{ old('nacionalidadePj') == 'Marrocos'         ? 'selected' : '' }}>Marrocos</option>
                                <option value="Martinica"       {{ old('nacionalidadePj') == 'Martinica'        ? 'selected' : '' }}>Martinica</option>
                                <option value="Mauritânia"      {{ old('nacionalidadePj') == 'Mauritânia'       ? 'selected' : '' }}>Mauritânia</option>
                                <option value="Mauritius"       {{ old('nacionalidadePj') == 'Mauritius'        ? 'selected' : '' }}>Mauritius</option>
                                <option value="México"          {{ old('nacionalidadePj') == 'México'           ? 'selected' : '' }}>México</option>
                                <option value="Moldova"         {{ old('nacionalidadePj') == 'Moldova'          ? 'selected' : '' }}>Moldova</option>
                                <option value="Mônaco"          {{ old('nacionalidadePj') == 'Mônaco'           ? 'selected' : '' }}>Mônaco</option>
                                <option value="Montserrat"      {{ old('nacionalidadePj') == 'Montserrat'       ? 'selected' : '' }}>Montserrat</option>
                                <option value="Nepal"           {{ old('nacionalidadePj') == 'Nepal'            ? 'selected' : '' }}>Nepal</option>
                                <option value="Nicarágua"       {{ old('nacionalidadePj') == 'Nicarágua'        ? 'selected' : '' }}>Nicarágua</option>
                                <option value="Niger"           {{ old('nacionalidadePj') == 'Niger'            ? 'selected' : '' }}>Niger</option>
                                <option value="Nigéria"         {{ old('nacionalidadePj') == 'Nigéria'          ? 'selected' : '' }}>Nigéria</option>
                                <option value="Noruega"         {{ old('nacionalidadePj') == 'Noruega'          ? 'selected' : '' }}>Noruega</option>
                                <option value="Nova Caledônia"  {{ old('nacionalidadePj') == 'Nova Caledônia'   ? 'selected' : '' }}>Nova Caledônia</option>
                                <option value="Nova Zelândia"   {{ old('nacionalidadePj') == 'Nova Zelândia'    ? 'selected' : '' }}>Nova Zelândia</option>
                                <option value="Omã"             {{ old('nacionalidadePj') == 'Omã'              ? 'selected' : '' }}>Omã</option>
                                <option value="Palau"           {{ old('nacionalidadePj') == 'Palau'            ? 'selected' : '' }}>Palau</option>
                                <option value="Panamá"          {{ old('nacionalidadePj') == 'Panamá'           ? 'selected' : '' }}>Panamá</option>
                                <option value="Papua-nova Guiné" {{ old('nacionalidadePj') == 'Papua-nova Guiné' ? 'selected' : '' }}>Papua-nova Guiné</option>
                                <option value="Paquistão"       {{ old('nacionalidadePj') == 'Paquistão'        ? 'selected' : '' }}>Paquistão</option>
                                <option value="Peru"            {{ old('nacionalidadePj') == 'Peru'             ? 'selected' : '' }}>Peru</option>
                                <option value="Polinésia Francesa" {{ old('nacionalidadePj') == 'Polinésia Francesa' ? 'selected' : '' }}>Polinésia Francesa</option>
                                <option value="Polônia"         {{ old('nacionalidadePj') == 'Polônia'          ? 'selected' : '' }}>Polônia</option>
                                <option value="Porto Rico"      {{ old('nacionalidadePj') == 'Porto Rico'       ? 'selected' : '' }}>Porto Rico</option>
                                <option value="Portugal"        {{ old('nacionalidadePj') == 'Portugal'         ? 'selected' : '' }}>Portugal</option>
                                <option value="Qatar"           {{ old('nacionalidadePj') == 'Qatar'            ? 'selected' : '' }}>Qatar</option>
                                <option value="Quênia"          {{ old('nacionalidadePj') == 'Quênia'           ? 'selected' : '' }}>Quênia</option>
                                <option value="Rep. Dominicana" {{ old('nacionalidadePj') == 'Rep. Dominicana'  ? 'selected' : '' }}>Rep. Dominicana</option>
                                <option value="Rep. Tcheca"     {{ old('nacionalidadePj') == 'Rep. Tcheca'      ? 'selected' : '' }}>Rep. Tcheca</option>
                                <option value="Reunion"         {{ old('nacionalidadePj') == 'Reunion'          ? 'selected' : '' }}>Reunion</option>
                                <option value="Romênia"         {{ old('nacionalidadePj') == 'Romênia'          ? 'selected' : '' }}>Romênia</option>
                                <option value="Ruanda"          {{ old('nacionalidadePj') == 'Ruanda'           ? 'selected' : '' }}>Ruanda</option>
                                <option value="Rússia"          {{ old('nacionalidadePj') == 'Rússia'           ? 'selected' : '' }}>Rússia</option>
                                <option value="Saipan"          {{ old('nacionalidadePj') == 'Saipan'           ? 'selected' : '' }}>Saipan</option>
                                <option value="Samoa Americana" {{ old('nacionalidadePj') == 'Samoa Americana'  ? 'selected' : '' }}>Samoa Americana</option>
                                <option value="Senegal"         {{ old('nacionalidadePj') == 'Senegal'          ? 'selected' : '' }}>Senegal</option>
                                <option value="Serra Leone"     {{ old('nacionalidadePj') == 'Serra Leone'      ? 'selected' : '' }}>Serra Leone</option>
                                <option value="Seychelles"      {{ old('nacionalidadePj') == 'Seychelle'        ? 'selected' : '' }}>Seychelles</option>
                                <option value="Singapura"       {{ old('nacionalidadePj') == 'Singapura'        ? 'selected' : '' }}>Singapura</option>
                                <option value="Síria"           {{ old('nacionalidadePj') == 'Síria'            ? 'selected' : '' }}>Síria</option>
                                <option value="Sri Lanka"       {{ old('nacionalidadePj') == 'Sri Lanka'        ? 'selected' : '' }}>Sri Lanka</option>
                                <option value="St. Kitts & Nevis" {{ old('nacionalidadePj') == 'St. Kitts & Nevis' ? 'selected' : '' }}>St. Kitts & Nevis</option>
                                <option value="St. Lúcia"       {{ old('nacionalidadePj') == 'St. Lúcia'        ? 'selected' : '' }}>St. Lúcia</option>
                                <option value="St. Vincent"     {{ old('nacionalidadePj') == 'St. Vincent'      ? 'selected' : '' }}>St. Vincent</option>
                                <option value="Sudão"           {{ old('nacionalidadePj') == 'Sudão'            ? 'selected' : '' }}>Sudão</option>
                                <option value="Suécia"          {{ old('nacionalidadePj') == 'Suécia'           ? 'selected' : '' }}>Suécia</option>
                                <option value="Suiça"           {{ old('nacionalidadePj') == 'Suiça'            ? 'selected' : '' }}>Suiça</option>
                                <option value="Suriname"        {{ old('nacionalidadePj') == 'Suriname'         ? 'selected' : '' }}>Suriname</option>
                                <option value="Tailândia"       {{ old('nacionalidadePj') == 'Tailândia'        ? 'selected' : '' }}>Tailândia</option>
                                <option value="Taiwan"          {{ old('nacionalidadePj') == 'Taiwan'           ? 'selected' : '' }}>Taiwan</option>
                                <option value="Tanzânia"        {{ old('nacionalidadePj') == 'Tanzânia'         ? 'selected' : '' }}>Tanzânia</option>
                                <option value="Togo"            {{ old('nacionalidadePj') == 'Togo'             ? 'selected' : '' }}>Togo</option>
                                <option value="Trinidad & Tobago" {{ old('nacionalidadePj') == 'Trinidad & Tobago' ? 'selected' : '' }}>Trinidad & Tobago</option>
                                <option value="Tunísia"         {{ old('nacionalidadePj') == 'Tunísia'          ? 'selected' : '' }}>Tunísia</option>
                                <option value="Turquia"         {{ old('nacionalidadePj') == 'Turquia"'         ? 'selected' : '' }}>Turquia</option>
                                <option value="Ucrânia"         {{ old('nacionalidadePj') == 'Ucrânia'          ? 'selected' : '' }}>Ucrânia</option>
                                <option value="Uganda"          {{ old('nacionalidadePj') == 'Uganda'           ? 'selected' : '' }}>Uganda</option>
                                <option value="Uruguai"         {{ old('nacionalidadePj') == 'Uruguai'          ? 'selected' : '' }}>Uruguai</option>
                                <option value="Venezuela"       {{ old('nacionalidadePj') == 'Venezuela'        ? 'selected' : '' }}>Venezuela</option>
                                <option value="Vietnã"          {{ old('nacionalidadePj') == 'Vietnã'           ? 'selected' : '' }}>Vietnã</option>
                                <option value="Zaire"           {{ old('nacionalidadePj') == 'Zaire'            ? 'selected' : '' }}>Zaire</option>
                                <option value="Zâmbia"          {{ old('nacionalidadePj') == 'Zâmbia'           ? 'selected' : '' }}>Zâmbia</option>
                                <option value="Zimbábue"        {{ old('nacionalidadePj') == 'Zimbábue'         ? 'selected' : '' }}>Zimbábue</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <select class="form-control" name="estadoCivilPj" id="estadoCivilPj">
                                <option value="Solteiro"    {{ old('estadoCivilPj') == 'Solteiro'     ? 'selected' : '' }}>Solteiro</option>
                                <option value="Casado"      {{ old('estadoCivilPj') == 'Casado'       ? 'selected' : '' }}>Casado</option>
                                <option value="Separado"    {{ old('estadoCivilPj') == 'Separado'     ? 'selected' : '' }}>Separado</option>
                                <option value="Divorciado"  {{ old('estadoCivilPj') == 'Divorciado'   ? 'selected' : '' }}>Divorciado</option>
                                <option value="Viúvo"       {{ old('estadoCivilPj') == 'Viúvo'        ? 'selected' : '' }}>Viúvo</option>
                                <option value="Amasiado"    {{ old('estadoCivilPj') == 'Amasiado'     ? 'selected' : '' }}>Amasiado</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <select class="form-control" id="sexoPj" name="sexoPj">
                                <option  selected disabled>Selecione seu sexo</option>
                                <option value="m" {{ old('sexoPj') == 'm' ? 'selected' : '' }}>Masculino</option>
                                <option value="f" {{ old('sexoPj') == 'f' ? 'selected' : '' }}>Feminino</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="rgPj" id="rgPj" value="{{ old('rgPj') }}" placeholder="RG"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <select class="form-control" name="orgaoExpeditorPj" id="orgaoExpeditorPj">
                                <option  selected disabled>Selecione um Orgão Expeditor</option>
                                <option value="SSP"     {{ old('orgaoExpeditorPj') == 'SSP'     ? 'selected' : ''   }}>SSP - Secretaria de Segurança Pública</option>
                                <option value="COREN"   {{ old('orgaoExpeditorPj') == 'COREN'   ? 'selected' : ''   }}>COREN - Conselho Regional de Enfermagem</option>
                                <option value="CRA"     {{ old('orgaoExpeditorPj') == 'CRA'     ? 'selected' : ''   }}>CRA - Conselho Regional de Administração</option>
                                <option value="CRAS"    {{ old('orgaoExpeditorPj') == 'CRAS'    ? 'selected' : ''   }}>CRAS - Conselho Regional de Assistentes Sociais</option>
                                <option value="CRB"     {{ old('orgaoExpeditorPj') == 'CRB'     ? 'selected' : ''   }}>CRB - Conselho Regional de Biblioteconomia</option>
                                <option value="CRC"     {{ old('orgaoExpeditorPj') == 'CRC'     ? 'selected' : ''   }}>CRC - Conselho Regional de Contabilidade</option>
                                <option value="CRE"     {{ old('orgaoExpeditorPj') == 'CRC'     ? 'selected' : ''   }}>CRE - Conselho Regional de Estatística</option>
                                <option value="CREA"    {{ old('orgaoExpeditorPj') == 'CREA'    ? 'selected' : ''   }}>CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
                                <option value="CRECI"   {{ old('orgaoExpeditorPj') == 'CRECI'   ? 'selected' : ''   }}>CRECI - Conselho Regional de Corretores de Imóveis</option>
                                <option value="CREFIT"  {{ old('orgaoExpeditorPj') == 'CREFIT'  ? 'selected' : ''   }}>CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                <option value="CRF"     {{ old('orgaoExpeditorPj') == 'CRF'     ? 'selected' : ''   }}>CRF - Conselho Regional de Farmácia</option>
                                <option value="CRM"     {{ old('orgaoExpeditorPj') == 'CRM'     ? 'selected' : ''   }}>CRM - Conselho Regional de Medicina</option>
                                <option value="CRN"     {{ old('orgaoExpeditorPj') == 'CRN'     ? 'selected' : ''   }}>CRN - Conselho Regional de Nutrição</option>
                                <option value="CRO"     {{ old('orgaoExpeditorPj') == 'CRO'     ? 'selected' : ''   }}>CRO - Conselho Regional de Odontologia</option>
                                <option value="CRP"     {{ old('orgaoExpeditorPj') == 'CRP'     ? 'selected' : ''   }}>CRP - Conselho Regional de Psicologia</option>
                                <option value="CRPRE"   {{ old('orgaoExpeditorPj') == 'CRPRE'   ? 'selected' : ''   }}>CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
                                <option value="CRQ"     {{ old('orgaoExpeditorPj') == 'CRQ'     ? 'selected' : ''   }}>CRQ - Conselho Regional de Química</option>
                                <option value="CRRC"    {{ old('orgaoExpeditorPj') == 'CRRC'    ? 'selected' : ''   }}>CRRC - Conselho Regional de Representantes Comerciais</option>
                                <option value="CRMV"    {{ old('orgaoExpeditorPj') == 'CRMV'    ? 'selected' : ''   }}>CRMV - Conselho Regional de Medicina Veterinária</option>
                                <option value="DPF"     {{ old('orgaoExpeditorPj') == 'DPF'     ? 'selected' : ''   }}>DPF - Polícia Federal</option>
                                <option value="EST"     {{ old('orgaoExpeditorPj') == 'EST'     ? 'selected' : ''   }}>EST - Documentos Estrangeiros</option>
                                <option value="I CLA"   {{ old('orgaoExpeditorPj') == 'I CLA'   ? 'selected' : ''   }}>I CLA - Carteira de Identidade Classista</option>
                                <option value="MAE"     {{ old('orgaoExpeditorPj') == 'MAE'     ? 'selected' : ''   }}>MAE - Ministério da Aeronáutica</option>
                                <option value="MEX"     {{ old('orgaoExpeditorPj') == 'MEX'     ? 'selected' : ''   }}>MEX - Ministério do Exército</option>
                                <option value="MMA"     {{ old('orgaoExpeditorPj') == 'MMA'     ? 'selected' : ''   }}>MMA - Ministério da Marinha</option>
                                <option value="OAB"     {{ old('orgaoExpeditorPj') == 'OAB'     ? 'selected' : ''   }}>OAB - Ordem dos Advogados do Brasil</option>
                                <option value="OMB"     {{ old('orgaoExpeditorPj') == 'OMB'     ? 'selected' : ''   }}>OMB - Ordens dos Músicos do Brasil</option>
                                <option value="IFP"     {{ old('orgaoExpeditorPj') == 'IFP'     ? 'selected' : ''   }}>IFP - Instituto de Identificação Félix Pacheco</option>
                                <option value="OUT"     {{ old('orgaoExpeditorPj') == 'OUT'     ? 'selected' : ''   }}>OUT - Outros Emissores</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control date" name="dataNascimentoPj" id="dataNascimentoPj"  value="{{ old('dataNascimentoPj') }}" placeholder="Data de Nascimento"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control cpf" name="cpfPj" id="cpfPj"  value="{{ old('cpfPj') }}" placeholder="CPF"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="ruaPj" id="ruaPj"  value="{{ old('ruaPj') }}" placeholder="Rua"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="bairroPj" id="bairroPj"  value="{{ old('bairroPj') }}" placeholder="Bairro"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control cep" name="numeroPj" id="numeroPj" value="{{ old('numeroPj') }}" placeholder="Número"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="cidadePj" id="cidadePj"  value="{{ old('cidadePj') }}" placeholder="Cidade"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control cep" name="cepPj" id="cepPj" value="{{ old('cepPj') }}" placeholder="CEP"/>
                        </div>


                        <div class="form-group col-lg-6">
                            <select class="custom-select" id="estadoPj" name="estadoPj">
                                <option selected disabled>Selecione um estado</option>
                                <option value="AC"{{ old('estadoPj') == 'AC' ? 'selected' : '' }}>Acre</option>
                                <option value="AL"{{ old('estadoPj') == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                <option value="AP"{{ old('estadoPj') == 'AP' ? 'selected' : '' }}>Amapá</option>
                                <option value="AM"{{ old('estadoPj') == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                <option value="BA"{{ old('estadoPj') == 'BA' ? 'selected' : '' }}>Bahia</option>
                                <option value="CE"{{ old('estadoPj') == 'CE' ? 'selected' : '' }}>Ceará</option>
                                <option value="DF"{{ old('estadoPj') == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                <option value="ES"{{ old('estadoPj') == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                <option value="GO"{{ old('estadoPj') == 'GO' ? 'selected' : '' }}>Goiás</option>
                                <option value="MA"{{ old('estadoPj') == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                <option value="MT"{{ old('estadoPj') == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                <option value="MS"{{ old('estadoPj') == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                <option value="MG"{{ old('estadoPj') == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                <option value="PA"{{ old('estadoPj') == 'PA' ? 'selected' : '' }}>Pará</option>
                                <option value="PB"{{ old('estadoPj') == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                <option value="PR"{{ old('estadoPj') == 'PR' ? 'selected' : '' }}>Paraná</option>
                                <option value="PE"{{ old('estadoPj') == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                <option value="PI"{{ old('estadoPj') == 'PI' ? 'selected' : '' }}>Piauí</option>
                                <option value="RJ"{{ old('estadoPj') == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                <option value="RN"{{ old('estadoPj') == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                <option value="RS"{{ old('estadoPj') == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                <option value="RO"{{ old('estadoPj') == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                <option value="RR"{{ old('estadoPj') == 'RR' ? 'selected' : '' }}>Roraima</option>
                                <option value="SC"{{ old('estadoPj') == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                <option value="SP"{{ old('estadoPj') == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                <option value="SE"{{ old('estadoPj') == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                <option value="TO"{{ old('estadoPj') == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                <option value="EX"{{ old('estadoPj') == 'EX' ? 'selected' : '' }}>Estrangeiro</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control phone" name="telefonePj" id="telefonePj" value="{{ old('telefonePj') }}" placeholder="Telefone"/>
                        </div>

                        <div class="form-group col-lg-12">
                            <labe><b>Obs:</b> O email abaixo servirar de acesso a área do sorcio</labe>

                        </div>

                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email"/>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="remail" id="remail" value="{{ old('remail') }}" placeholder="Confirmar email"/>
                        </div>

                        <div class="form-group col-lg-12">
                            <labe><b>Obs:</b> A senha Mínimo de 6 caracteres, pelo menos uma letra, um número e um caractere especial, Exemplo: Se@123</labe>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="password" class="form-control" name="senha" id="senha" value="{{ old('senha') }}" placeholder="Digite sua senha"/>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="password" class="form-control" name="resenha" id="resenha" value="{{ old('resenha') }}" placeholder="Confirmar senha"/>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" title="Enviar mensagem" style="display: block; width: 200px; float: left;  border-radius: 7px; margin: 0 auto;  margin-top: 30px; color:#333; border: 1px solid #999; background:  #FCAD32; border: 0; padding: 8px 30px; color: #fff; transition: 0.3s;">Cadastrar <i class="far fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-12">
                <img src="/imagens/associado.jpg" alt="asssociado-sindicombustiveis-pará" class="img-fluid">
            </div>
        </div>
    </div>
</main>

@stop
