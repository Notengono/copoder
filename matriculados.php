<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Colegio de Podólogos de Entre Ríos">

    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="images/logo-122x184.jpg" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">

    <!-- CSS propio -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include_once 'cabecera.php' ?>
    <section class="quick-access">
        <div class="container">
            <div class="section-title">
                <span>Matriculados</span>
                <h2>Podólogos matriculados</h2>
            </div>
        </div>
    </section>

    <!-- <div class="col-10 offset-1">
            <div class="row g-3">
                <div class="col-sm-12 col-md-6">
                    <div class="quick-card-autoridades">
                        <span class="cargo">Presidente</span>
                        <span class="nombre">López Rita Guadalupe</span>
                        <span class="mat">Mat: 189</span>
                    </div>
                </div>
            </div>
        </div> 
    -->

    <section class="section-table" id="table1-i">
        <div class="container container-table">
            <div class="table-wrapper">
                <div class="container">
                    <div class="row search">
                        <div class="col-md-6 offset-md-6">
                            <div class="dataTables_filter">
                                <label class="searchInfo mbr-fonts-style display-7">Buscar:</label>
                                <input class="form-control input-sm" disabled="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container scroll">
                    <table class="table table-hover table-striped isSearch" cellspacing="0">
                        <thead>
                            <tr class="table-heads">
                                <th class="head-item mbr-fonts-style display-7">M.P.</th>
                                <th class="head-item mbr-fonts-style display-7">Apellido y Nombre</th>
                                <th class="head-item mbr-fonts-style display-7">Dirección</th>
                                <th class="head-item mbr-fonts-style display-7">Localidad</th>
                                <th class="head-item mbr-fonts-style display-7">Teléfono</th>
                                <th class="head-item mbr-fonts-style display-7">O. S.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">7</td>
                                <td class="body-item mbr-fonts-style display-7">Campos Eduardo Humberto</td>
                                <td class="body-item mbr-fonts-style display-7">Colon 452</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">03434318632<br>3436208151</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">30</td>
                                <td class="body-item mbr-fonts-style display-7">Villanueva Emilce Leonor</td>
                                <td class="body-item mbr-fonts-style display-7">Fco. Beiro 263</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario del Tala</td>
                                <td class="body-item mbr-fonts-style display-7">03445404409</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">37</td>
                                <td class="body-item mbr-fonts-style display-7">Ledesma Hector Felipe</td>
                                <td class="body-item mbr-fonts-style display-7">D. Dasso 166</td>
                                <td class="body-item mbr-fonts-style display-7">Diamante</td>
                                <td class="body-item mbr-fonts-style display-7">343-4464785</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">47</td>
                                <td class="body-item mbr-fonts-style display-7">Jufre Ema De Lavarello</td>
                                <td class="body-item mbr-fonts-style display-7">Ereño 876</td>
                                <td class="body-item mbr-fonts-style display-7">Concepcion del Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">03442418988</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">60</td>
                                <td class="body-item mbr-fonts-style display-7">Ledri Cristina Maria</td>
                                <td class="body-item mbr-fonts-style display-7">Pasaje 2 de Abril 327</td>
                                <td class="body-item mbr-fonts-style display-7">Urdinarrain</td>
                                <td class="body-item mbr-fonts-style display-7">344-6404110</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">69</td>
                                <td class="body-item mbr-fonts-style display-7">Porta Rosario</td>
                                <td class="body-item mbr-fonts-style display-7">Av. De Las Americas 1736</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-5198543</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">71</td>
                                <td class="body-item mbr-fonts-style display-7">Ladron De Guevara Silvia M.</td>
                                <td class="body-item mbr-fonts-style display-7">Maipu 373</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4222203</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">73</td>
                                <td class="body-item mbr-fonts-style display-7">Mendoza Marta</td>
                                <td class="body-item mbr-fonts-style display-7">Colombo 446</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu</td>
                                <td class="body-item mbr-fonts-style display-7">3446-363560<br>03446-427263</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">95</td>
                                <td class="body-item mbr-fonts-style display-7">Vera De Plaza Stella Maris</td>
                                <td class="body-item mbr-fonts-style display-7">Cervantes 659</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4067489</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">110</td>
                                <td class="body-item mbr-fonts-style display-7">Lascano Clotilde Maria Catalina</td>
                                <td class="body-item mbr-fonts-style display-7">E. Carbo 916 3 E</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4312597<br>155108753</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">123</td>
                                <td class="body-item mbr-fonts-style display-7">Bonifacino Maria Cristina</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes 160</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4218759<br>154253403</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">128</td>
                                <td class="body-item mbr-fonts-style display-7">Perez Agnes Andrea</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Del Cerro 305(casi Laprida)</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">345-4015346</td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">130</td>
                                <td class="body-item mbr-fonts-style display-7">Faria De Cantero Nora Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">Tejeiro Martinez 576</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4221006<br>343-4629275</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">131</td>
                                <td class="body-item mbr-fonts-style display-7">Bos Luis Alberto</td>
                                <td class="body-item mbr-fonts-style display-7">Alberdi 23</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu</td>
                                <td class="body-item mbr-fonts-style display-7">3446222079</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">132</td>
                                <td class="body-item mbr-fonts-style display-7">Dunn Carlos Fernando</td>
                                <td class="body-item mbr-fonts-style display-7">3 De Caballeria 926</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu</td>
                                <td class="body-item mbr-fonts-style display-7">3446-527076</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">133</td>
                                <td class="body-item mbr-fonts-style display-7">Costa Toro Iris Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Salta 590/594</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4221388<br>156111352</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">134</td>
                                <td class="body-item mbr-fonts-style display-7">Olier Violeta Maria Itati</td>
                                <td class="body-item mbr-fonts-style display-7">25 de Mayo 475</td>
                                <td class="body-item mbr-fonts-style display-7">Hasenkamp</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4158288</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">136</td>
                                <td class="body-item mbr-fonts-style display-7">Bonasegla Pablo Ruber</td>
                                <td class="body-item mbr-fonts-style display-7">Posadas 917</td>
                                <td class="body-item mbr-fonts-style display-7">Concepcion del Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">03442-462332</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">137</td>
                                <td class="body-item mbr-fonts-style display-7">Franco Griselda Stella Maris</td>
                                <td class="body-item mbr-fonts-style display-7">Posadas 141</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">03455-527880</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">140</td>
                                <td class="body-item mbr-fonts-style display-7">Ferro Cristhian Alejandro</td>
                                <td class="body-item mbr-fonts-style display-7">Urquiza 232</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">345-5431240</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">145</td>
                                <td class="body-item mbr-fonts-style display-7">Trupiano Maria Belen</td>
                                <td class="body-item mbr-fonts-style display-7">E. Carriego 268</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">0345-6027134</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">146</td>
                                <td class="body-item mbr-fonts-style display-7">Rolando Nora Noemi</td>
                                <td class="body-item mbr-fonts-style display-7">Fochesatto 2460</td>
                                <td class="body-item mbr-fonts-style display-7">Chajari</td>
                                <td class="body-item mbr-fonts-style display-7">3456-622111</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">148</td>
                                <td class="body-item mbr-fonts-style display-7">Frick Guillermo Adolfo</td>
                                <td class="body-item mbr-fonts-style display-7">Salta 639</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4223964<br>343-5110535</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">151</td>
                                <td class="body-item mbr-fonts-style display-7">Brscacin Alejandro Fabian</td>
                                <td class="body-item mbr-fonts-style display-7">San Martin 387</td>
                                <td class="body-item mbr-fonts-style display-7">Galarza</td>
                                <td class="body-item mbr-fonts-style display-7">11-40573802</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">152</td>
                                <td class="body-item mbr-fonts-style display-7">Herbel Claudia Gabriela</td>
                                <td class="body-item mbr-fonts-style display-7">24 De Abril 1084</td>
                                <td class="body-item mbr-fonts-style display-7">Crespo</td>
                                <td class="body-item mbr-fonts-style display-7">343-6209561</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">153</td>
                                <td class="body-item mbr-fonts-style display-7">Arguello Ivana Vanina</td>
                                <td class="body-item mbr-fonts-style display-7">Blas Pareras 2507</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5077404</td>
                                <td class="body-item mbr-fonts-style display-7">Sí</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">154</td>
                                <td class="body-item mbr-fonts-style display-7">Arguello Gonzalo Ricardo</td>
                                <td class="body-item mbr-fonts-style display-7">Don Bosco 2295</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-4259489</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">155</td>
                                <td class="body-item mbr-fonts-style display-7">Stojhwski Mariza Claudia</td>
                                <td class="body-item mbr-fonts-style display-7">25 de mayo 1033</td>
                                <td class="body-item mbr-fonts-style display-7">Crespo</td>
                                <td class="body-item mbr-fonts-style display-7">343-4461130<br>4951149</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">156</td>
                                <td class="body-item mbr-fonts-style display-7">Frau Maria Cecilia</td>
                                <td class="body-item mbr-fonts-style display-7">Chacabuco 121</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">343-6611630</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">159</td>
                                <td class="body-item mbr-fonts-style display-7">Barbeito Patricia Maria Lucia</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Luis Agote 905 Piso PB</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-3002373</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">160</td>
                                <td class="body-item mbr-fonts-style display-7">Gareis Cladis Virginia</td>
                                <td class="body-item mbr-fonts-style display-7">Valdemarin 911</td>
                                <td class="body-item mbr-fonts-style display-7">Crespo</td>
                                <td class="body-item mbr-fonts-style display-7">343-6225007</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">161</td>
                                <td class="body-item mbr-fonts-style display-7">Grenat Silvina Cecilia</td>
                                <td class="body-item mbr-fonts-style display-7">9 de julio 1126</td>
                                <td class="body-item mbr-fonts-style display-7">San Benito</td>
                                <td class="body-item mbr-fonts-style display-7">343-4284794</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">162</td>
                                <td class="body-item mbr-fonts-style display-7">Zuttion Marta Ester</td>
                                <td class="body-item mbr-fonts-style display-7">Santiago Del Estero 467</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4382480</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">163</td>
                                <td class="body-item mbr-fonts-style display-7">Zulian Adriana teresita</td>
                                <td class="body-item mbr-fonts-style display-7">Casiano Calderon 1720</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6228598</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">164</td>
                                <td class="body-item mbr-fonts-style display-7">Martinez Dora Emilia</td>
                                <td class="body-item mbr-fonts-style display-7">Conrada De Espinosa 35</td>
                                <td class="body-item mbr-fonts-style display-7">Segui</td>
                                <td class="body-item mbr-fonts-style display-7">343-4067317</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">165</td>
                                <td class="body-item mbr-fonts-style display-7">Tataren Daniel Gaston</td>
                                <td class="body-item mbr-fonts-style display-7">Sebastian Vazquez 555. PISO 2 Depto. 48, Barrio 33 Orientales<br>Consultorios ALMA, Carbo 263<br>Pellegrini 418</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4713871</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">166</td>
                                <td class="body-item mbr-fonts-style display-7">Oliva Pamela Natali</td>
                                <td class="body-item mbr-fonts-style display-7">Misiones 572</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4231823<br>343-5003320</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">167</td>
                                <td class="body-item mbr-fonts-style display-7">Alarcon Ana Maria</td>
                                <td class="body-item mbr-fonts-style display-7">Pringles 568</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">3436-434072</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">168</td>
                                <td class="body-item mbr-fonts-style display-7">Avaca Lucrecia Lorena</td>
                                <td class="body-item mbr-fonts-style display-7">Berutti 257</td>
                                <td class="body-item mbr-fonts-style display-7">General Ramirez</td>
                                <td class="body-item mbr-fonts-style display-7">343-4578848</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">170</td>
                                <td class="body-item mbr-fonts-style display-7">Avaca Alejandra Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Intendente Berduc 672</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4685181</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">171</td>
                                <td class="body-item mbr-fonts-style display-7">Bravo Maria Eugenia</td>
                                <td class="body-item mbr-fonts-style display-7">Courreges 282</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4290968</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">172</td>
                                <td class="body-item mbr-fonts-style display-7">Palavecino Nora Malvina</td>
                                <td class="body-item mbr-fonts-style display-7">Estrella Federal 1230</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5129129</td>
                                <td class="body-item mbr-fonts-style display-7">Sí</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">173</td>
                                <td class="body-item mbr-fonts-style display-7">Verreyt Julio Daniel</td>
                                <td class="body-item mbr-fonts-style display-7">Balcarce 540</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">345-5412811</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">174</td>
                                <td class="body-item mbr-fonts-style display-7">Sersewitz Maria Virginia</td>
                                <td class="body-item mbr-fonts-style display-7">Peru 975</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">0345-6254144</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">176</td>
                                <td class="body-item mbr-fonts-style display-7">Ronchi Maria De Los Angeles</td>
                                <td class="body-item mbr-fonts-style display-7">Intendente Rivero 333</td>
                                <td class="body-item mbr-fonts-style display-7">Maria Grande</td>
                                <td class="body-item mbr-fonts-style display-7">343-4294051</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">177</td>
                                <td class="body-item mbr-fonts-style display-7">Tropini Maria Teresa</td>
                                <td class="body-item mbr-fonts-style display-7">Juan B. Justo y Zanni M5C2</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4288131</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">178</td>
                                <td class="body-item mbr-fonts-style display-7">Debevc Veronica Isabel</td>
                                <td class="body-item mbr-fonts-style display-7">Salta 639</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4223964<br>343-5110535</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">179</td>
                                <td class="body-item mbr-fonts-style display-7">Sajnin Diana</td>
                                <td class="body-item mbr-fonts-style display-7">Urquiza 155</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">3444-407815</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">181</td>
                                <td class="body-item mbr-fonts-style display-7">Tanaro Juan Carlos</td>
                                <td class="body-item mbr-fonts-style display-7">Alem 504</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6237456</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">184</td>
                                <td class="body-item mbr-fonts-style display-7">Lorenzon Gabriela Soledad</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Jorge Newbery 3049 Policonsultorio EUDAI</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4478265</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">185</td>
                                <td class="body-item mbr-fonts-style display-7">Viera Rosana</td>
                                <td class="body-item mbr-fonts-style display-7">Gervasio Mendez 490, Centro de jubilados<br>Ruta 12 e Hipólito Irigoyen</td>
                                <td class="body-item mbr-fonts-style display-7">Parana<br>Aldea María Luisa</td>
                                <td class="body-item mbr-fonts-style display-7">343-6231393</td>
                                <td class="body-item mbr-fonts-style display-7">Sí</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">186</td>
                                <td class="body-item mbr-fonts-style display-7">Correa Griselda Mabel</td>
                                <td class="body-item mbr-fonts-style display-7">Moreno 1328, esq. San Luis</td>
                                <td class="body-item mbr-fonts-style display-7">Nogoya</td>
                                <td class="body-item mbr-fonts-style display-7">3435-421178<br>3435-407655</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">187</td>
                                <td class="body-item mbr-fonts-style display-7">Cucinatto Clarisa</td>
                                <td class="body-item mbr-fonts-style display-7">3 De Febrero 176</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">03436-435545</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">188</td>
                                <td class="body-item mbr-fonts-style display-7">Costa Sandra Lorena</td>
                                <td class="body-item mbr-fonts-style display-7">Alem 328</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4570150</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">189</td>
                                <td class="body-item mbr-fonts-style display-7">Lopez Rita Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">E. Damisis 267</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4623008</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">190</td>
                                <td class="body-item mbr-fonts-style display-7">Folmer Patricia Ines</td>
                                <td class="body-item mbr-fonts-style display-7">G. Mistral 317</td>
                                <td class="body-item mbr-fonts-style display-7">Crespo</td>
                                <td class="body-item mbr-fonts-style display-7">343-4281097</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">191</td>
                                <td class="body-item mbr-fonts-style display-7">Blason Brenda</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes 459</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4583500</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">193</td>
                                <td class="body-item mbr-fonts-style display-7">Betancurt Zurita Lidia Ester</td>
                                <td class="body-item mbr-fonts-style display-7">Miguel Unamuno 1141<br>Leonidas Echague Y Medus</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5200705</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">194</td>
                                <td class="body-item mbr-fonts-style display-7">Girardo Maria Laura</td>
                                <td class="body-item mbr-fonts-style display-7">San Martin 468</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">345-4033317</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">196</td>
                                <td class="body-item mbr-fonts-style display-7">Obispo Leticia Silvana</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu 373</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario del Tala</td>
                                <td class="body-item mbr-fonts-style display-7">03445-5419184</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">197</td>
                                <td class="body-item mbr-fonts-style display-7">Bosc Hector Marcelo</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu 476<br>San Martin S/N</td>
                                <td class="body-item mbr-fonts-style display-7">Gobernador Macia</td>
                                <td class="body-item mbr-fonts-style display-7">03445-455884</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>


                            <tr>
                                <td class="body-item mbr-fonts-style display-7">198</td>
                                <td class="body-item mbr-fonts-style display-7">Arce Marta Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">Roberto Satler 2392, Piso 9 S1 <br>Fco. de Bueno 104</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4353708<br>343-6238017</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">199</td>
                                <td class="body-item mbr-fonts-style display-7">Bruna Maria Candela</td>
                                <td class="body-item mbr-fonts-style display-7">San Martin 1280</td>
                                <td class="body-item mbr-fonts-style display-7">La Paz</td>
                                <td class="body-item mbr-fonts-style display-7">3437-457245</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">200</td>
                                <td class="body-item mbr-fonts-style display-7">Facundo Almada Ernesto Martin</td>
                                <td class="body-item mbr-fonts-style display-7">Sebastian Vazquez 458</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6209191</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">201</td>
                                <td class="body-item mbr-fonts-style display-7">Barzola Andrea Silvana</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Alejandro Gessino 206</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4404152</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">202</td>
                                <td class="body-item mbr-fonts-style display-7">Paz Maria Eugenia</td>
                                <td class="body-item mbr-fonts-style display-7">Sarmiento y Rocamora</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario del Tala</td>
                                <td class="body-item mbr-fonts-style display-7">343-5409190</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">203</td>
                                <td class="body-item mbr-fonts-style display-7">Rodriguez Patricia Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">Lopez Y Planez 614</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4525761</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">204</td>
                                <td class="body-item mbr-fonts-style display-7">De Mauricio Natalia Graciela</td>
                                <td class="body-item mbr-fonts-style display-7">Sargento Cabral 262<br>Pellegrini 2075</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">345-4102047</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">205</td>
                                <td class="body-item mbr-fonts-style display-7">Aguilera Marta Noemi</td>
                                <td class="body-item mbr-fonts-style display-7">Castelli 71</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia<br></td>
                                <td class="body-item mbr-fonts-style display-7">0345-6022655</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">206</td>
                                <td class="body-item mbr-fonts-style display-7">Tachella Prado Paula Andrea</td>
                                <td class="body-item mbr-fonts-style display-7">D. Dasso 165</td>
                                <td class="body-item mbr-fonts-style display-7">Diamante</td>
                                <td class="body-item mbr-fonts-style display-7">343-4639069</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">207</td>
                                <td class="body-item mbr-fonts-style display-7">Bonifacino Agostina Corina</td>
                                <td class="body-item mbr-fonts-style display-7">Padre Kentenich 576<br>Feliciano 997</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4222539<br>343-4670715</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">208</td>
                                <td class="body-item mbr-fonts-style display-7">Robledo Marien Anabel</td>
                                <td class="body-item mbr-fonts-style display-7">Vieyra Mendez 738</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-3001272</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">209</td>
                                <td class="body-item mbr-fonts-style display-7">Marizza Ma. Antonella</td>
                                <td class="body-item mbr-fonts-style display-7">Moises Lebenson 3518</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6117210</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">210</td>
                                <td class="body-item mbr-fonts-style display-7">Nuñez Juan Jose</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Don Bosco 842</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4380148</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">211</td>
                                <td class="body-item mbr-fonts-style display-7">Furios Monica Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">Villa San Benito 1561</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4619813</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">213</td>
                                <td class="body-item mbr-fonts-style display-7">Matsuyama Anabel Yohanna</td>
                                <td class="body-item mbr-fonts-style display-7">Las Calandrias 2550<br>Santiago Del Estero 627</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4689576</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">214</td>
                                <td class="body-item mbr-fonts-style display-7">Kloss Maria Juliana</td>
                                <td class="body-item mbr-fonts-style display-7">Doctor Lopez 81 Bis<br>Brown 218</td>
                                <td class="body-item mbr-fonts-style display-7">Diamante</td>
                                <td class="body-item mbr-fonts-style display-7">343-4700775</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">215</td>
                                <td class="body-item mbr-fonts-style display-7">Muñoz Sandra Mariela</td>
                                <td class="body-item mbr-fonts-style display-7">Viamonte 888</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">3436-438272</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">216</td>
                                <td class="body-item mbr-fonts-style display-7">Garcia Maria Cristina</td>
                                <td class="body-item mbr-fonts-style display-7">-</td>
                                <td class="body-item mbr-fonts-style display-7">Barcelona</td>
                                <td class="body-item mbr-fonts-style display-7">+34 661 69 79 05</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">217</td>
                                <td class="body-item mbr-fonts-style display-7">Gonzalez Maria Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">Los Cardenales 146</td>
                                <td class="body-item mbr-fonts-style display-7">Oro Verde</td>
                                <td class="body-item mbr-fonts-style display-7">343-5146500</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">218</td>
                                <td class="body-item mbr-fonts-style display-7">Rodriguez Norma Edith</td>
                                <td class="body-item mbr-fonts-style display-7">La Rioja 362</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5021891</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">219</td>
                                <td class="body-item mbr-fonts-style display-7">Castillo Maria Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Toscanini 342</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4292893</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">220</td>
                                <td class="body-item mbr-fonts-style display-7">Jozani Karen Antonella</td>
                                <td class="body-item mbr-fonts-style display-7">San Juan S/N°</td>
                                <td class="body-item mbr-fonts-style display-7">San Benito</td>
                                <td class="body-item mbr-fonts-style display-7">343-4287620</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">222</td>
                                <td class="body-item mbr-fonts-style display-7">Chaparro Rocio Marisol</td>
                                <td class="body-item mbr-fonts-style display-7">Gabriela Mistral 2683</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4663790</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">224</td>
                                <td class="body-item mbr-fonts-style display-7">Tommasi Arias Nerea</td>
                                <td class="body-item mbr-fonts-style display-7">Pte. Peron 313</td>
                                <td class="body-item mbr-fonts-style display-7">Urdinarrain</td>
                                <td class="body-item mbr-fonts-style display-7">344-6657631</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">225</td>
                                <td class="body-item mbr-fonts-style display-7">Sotelo Zulema Ramona</td>
                                <td class="body-item mbr-fonts-style display-7">Libertad 367</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">0343-5315823<br>343-4314212</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">226</td>
                                <td class="body-item mbr-fonts-style display-7">Figueroa Ma. De Los Milagros</td>
                                <td class="body-item mbr-fonts-style display-7">Pascual Greca 596</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4754248</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">228</td>
                                <td class="body-item mbr-fonts-style display-7">Inosemtzeff Griselda</td>
                                <td class="body-item mbr-fonts-style display-7">Dagostino 2270</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4575549</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">229</td>
                                <td class="body-item mbr-fonts-style display-7">Perez Seeling Evangelina Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">Peru 245</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5141002</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">230</td>
                                <td class="body-item mbr-fonts-style display-7">Pocai Veronica Yanina</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Ramirez 3564<br>Victoria 563<br>Hospital San Martin<br>Catamarca 174<br>Artigas 371</td>
                                <td class="body-item mbr-fonts-style display-7">Parana<br> <br> <br> <br> Colonia Avel.</td>
                                <td class="body-item mbr-fonts-style display-7">343-4198512<br> 343-5231349/4073594<br> 343-4198512<br> 343-4066281/4233580<br> 343-5446701</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">232</td>
                                <td class="body-item mbr-fonts-style display-7">Urcula Erica Emilce</td>
                                <td class="body-item mbr-fonts-style display-7">Barrio Evita 940</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-408551</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">233</td>
                                <td class="body-item mbr-fonts-style display-7">Beron Ines Marisol</td>
                                <td class="body-item mbr-fonts-style display-7">Camino de la Cuchilla Grande 2809</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4693063</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">234</td>
                                <td class="body-item mbr-fonts-style display-7">Velazquez Flavia Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Alem 659</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-515928</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">235</td>
                                <td class="body-item mbr-fonts-style display-7">Rosskam Mirian Teresita</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria 169</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5111891</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">236</td>
                                <td class="body-item mbr-fonts-style display-7">Lozada Silvia Isabel</td>
                                <td class="body-item mbr-fonts-style display-7">Pascual Palma 739</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5019040</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">238</td>
                                <td class="body-item mbr-fonts-style display-7">Rodriguez Jacqueline</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia 533<br>Posadas 141<br>PASO 430</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-623103</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">239</td>
                                <td class="body-item mbr-fonts-style display-7">Corrales Maria Natalia</td>
                                <td class="body-item mbr-fonts-style display-7">Balcarce 926</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-447343</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">240</td>
                                <td class="body-item mbr-fonts-style display-7">Toledo Adriana Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">Ameghino 496</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5193634</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">241</td>
                                <td class="body-item mbr-fonts-style display-7">Modenutti Ileana Belen</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Los Cisnes 1776<br>Av. de las Americas 2360</td>
                                <td class="body-item mbr-fonts-style display-7">Oro Verde</td>
                                <td class="body-item mbr-fonts-style display-7">343-4571500</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">242</td>
                                <td class="body-item mbr-fonts-style display-7">Arlettaz Brenda</td>
                                <td class="body-item mbr-fonts-style display-7">S. Bolivar 664<br>San Jose 159</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">03455-414747</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">243</td>
                                <td class="body-item mbr-fonts-style display-7">Casse Luciana Vanesa</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Gutierrez 1653</td>
                                <td class="body-item mbr-fonts-style display-7">Villa Elisa</td>
                                <td class="body-item mbr-fonts-style display-7">03455-449015</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">244</td>
                                <td class="body-item mbr-fonts-style display-7">Banchero Kevin Lujan</td>
                                <td class="body-item mbr-fonts-style display-7">Calle 20<br>25 de mayo 392</td>
                                <td class="body-item mbr-fonts-style display-7">Caseros, Dto. Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">03442-509584</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">245</td>
                                <td class="body-item mbr-fonts-style display-7">Cerbin Belen Evangelina Marisa</td>
                                <td class="body-item mbr-fonts-style display-7">Urquiza 147 Dpto 2DO C.</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4616807</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">246</td>
                                <td class="body-item mbr-fonts-style display-7">Benitez Marina Silvana</td>
                                <td class="body-item mbr-fonts-style display-7">Deletong 153</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">03455-481964</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">247</td>
                                <td class="body-item mbr-fonts-style display-7">De Giusto Maria Lorena</td>
                                <td class="body-item mbr-fonts-style display-7">Alte Brown 333</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4040285</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">248</td>
                                <td class="body-item mbr-fonts-style display-7">Senger Lorena Andrea</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Zanni 1190</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4573380</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">249</td>
                                <td class="body-item mbr-fonts-style display-7">Blanc Marisol</td>
                                <td class="body-item mbr-fonts-style display-7">Ameghino 412</td>
                                <td class="body-item mbr-fonts-style display-7">Concepcion del Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">03442-548064</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">250</td>
                                <td class="body-item mbr-fonts-style display-7">Piana Tamara Belen</td>
                                <td class="body-item mbr-fonts-style display-7">Santa Fe 1375</td>
                                <td class="body-item mbr-fonts-style display-7">Chajari</td>
                                <td class="body-item mbr-fonts-style display-7">3456-403772</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">251</td>
                                <td class="body-item mbr-fonts-style display-7">Romero Rosa Silvia</td>
                                <td class="body-item mbr-fonts-style display-7">Roque Saenz Peña 417</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">3444-635807</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">252</td>
                                <td class="body-item mbr-fonts-style display-7">Cosso Maria De Los Angeles</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario Del Tala 131</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">03444-545238</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">253</td>
                                <td class="body-item mbr-fonts-style display-7">Moreyra Fabiana Raquel</td>
                                <td class="body-item mbr-fonts-style display-7">Hospital Militar, Avda Ejercito 2157</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4588373</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">254</td>
                                <td class="body-item mbr-fonts-style display-7">Zandomeni Brenda Ileana</td>
                                <td class="body-item mbr-fonts-style display-7">Coronel Arredondo 1447</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5313338</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">255</td>
                                <td class="body-item mbr-fonts-style display-7">Premaries Giuliana Belen</td>
                                <td class="body-item mbr-fonts-style display-7">Gardel 950<br>San Martin 787 Local 2</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-446588</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">256</td>
                                <td class="body-item mbr-fonts-style display-7">Luggren Maria Paola</td>
                                <td class="body-item mbr-fonts-style display-7">Premazzi 5877</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-406693</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">257</td>
                                <td class="body-item mbr-fonts-style display-7">Faez Claudia Carina</td>
                                <td class="body-item mbr-fonts-style display-7">Pasteurst 172</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4807499</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">260</td>
                                <td class="body-item mbr-fonts-style display-7">Princic Corona Camila</td>
                                <td class="body-item mbr-fonts-style display-7">Las Golondrinas 429<br>Mitre 188<br>Salta 325 Piso 7 Dpto 2</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5133000</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">261</td>
                                <td class="body-item mbr-fonts-style display-7">Clemente Melina Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">La Paz 677</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4190550</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">262</td>
                                <td class="body-item mbr-fonts-style display-7">Duarte Jessica Belen</td>
                                <td class="body-item mbr-fonts-style display-7">H.Yrigoyen 1053</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-536996</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">263</td>
                                <td class="body-item mbr-fonts-style display-7">Santana Silvina Noemi</td>
                                <td class="body-item mbr-fonts-style display-7">Enrique Mihura 1571</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5013575</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">264</td>
                                <td class="body-item mbr-fonts-style display-7">Santomil Joel Norman</td>
                                <td class="body-item mbr-fonts-style display-7">Castro 183</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">345-5410890</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">265</td>
                                <td class="body-item mbr-fonts-style display-7">Lopez Sofia Rocio</td>
                                <td class="body-item mbr-fonts-style display-7">Brigadier J. Lopez 2128</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6228424</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">267</td>
                                <td class="body-item mbr-fonts-style display-7">Iglesias Mirta Alicia</td>
                                <td class="body-item mbr-fonts-style display-7">Lopez Jordan Y Guarumba S/Nº</td>
                                <td class="body-item mbr-fonts-style display-7">Sauce de Luna</td>
                                <td class="body-item mbr-fonts-style display-7">3438-458348</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">268</td>
                                <td class="body-item mbr-fonts-style display-7">Nuñez Noelia De Valle</td>
                                <td class="body-item mbr-fonts-style display-7">Fco. Soler 3062</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6211205</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">269</td>
                                <td class="body-item mbr-fonts-style display-7">Colazo Rosana Vanesa</td>
                                <td class="body-item mbr-fonts-style display-7">Ambrosetti 332</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">344-4468415</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">270</td>
                                <td class="body-item mbr-fonts-style display-7">Sosa Hilda Delia</td>
                                <td class="body-item mbr-fonts-style display-7">Guemes y Monte Caseros</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">3436-617601</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">271</td>
                                <td class="body-item mbr-fonts-style display-7">Fernandez Alicia Raquel</td>
                                <td class="body-item mbr-fonts-style display-7">Av. Ramirez 2117</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-5138367</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">272</td>
                                <td class="body-item mbr-fonts-style display-7">Cardoso Maira Georgina</td>
                                <td class="body-item mbr-fonts-style display-7">San Martin 1373</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4663706</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">273</td>
                                <td class="body-item mbr-fonts-style display-7">Dechanzi Ana Carolina</td>
                                <td class="body-item mbr-fonts-style display-7">Hereñu 1445</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4044071</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">275</td>
                                <td class="body-item mbr-fonts-style display-7">Michel Jesica Walquiria</td>
                                <td class="body-item mbr-fonts-style display-7">Supremo Entrerriano 435<br>Hosp. J. J. de Urquiza UNCAL S/Nº</td>
                                <td class="body-item mbr-fonts-style display-7">Concepcion del Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">3442-443900/01/02/03</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">276</td>
                                <td class="body-item mbr-fonts-style display-7">Ortiz Aubone Maria Eugenia</td>
                                <td class="body-item mbr-fonts-style display-7">D. P. Garat 1696</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">345-5081484</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">277</td>
                                <td class="body-item mbr-fonts-style display-7">Nuñez Maria Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">Zurdo Salud, 1 de Mayo 154</td>
                                <td class="body-item mbr-fonts-style display-7">Mojones Norte</td>
                                <td class="body-item mbr-fonts-style display-7">3455-404821<br>3438-427073</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">278</td>
                                <td class="body-item mbr-fonts-style display-7">Olivera Jesica Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">Paysandu 743</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455-410086</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">279</td>
                                <td class="body-item mbr-fonts-style display-7">Fita Luis Emanuel</td>
                                <td class="body-item mbr-fonts-style display-7">Vicoer 80 Viv. Manzana E Casa 28</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4465293</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">280</td>
                                <td class="body-item mbr-fonts-style display-7">Ledesma Sergio Javier</td>
                                <td class="body-item mbr-fonts-style display-7">Moreno 376</td>
                                <td class="body-item mbr-fonts-style display-7">Diamante</td>
                                <td class="body-item mbr-fonts-style display-7">343-5047336<br>343-4983908</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">281</td>
                                <td class="body-item mbr-fonts-style display-7">Carrere Vanina Solange</td>
                                <td class="body-item mbr-fonts-style display-7">Victor Mercante 2056</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4631985</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">282</td>
                                <td class="body-item mbr-fonts-style display-7">Molina Maria Belen</td>
                                <td class="body-item mbr-fonts-style display-7">Fleming 701<br>Hosp. Militar Av. Ejercito 2157<br>Policiales: Rondeau 2210</td>
                                <td class="body-item mbr-fonts-style display-7">Parana<br></td>
                                <td class="body-item mbr-fonts-style display-7">343-4547979</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">283</td>
                                <td class="body-item mbr-fonts-style display-7">Sanchez Maria Luisa</td>
                                <td class="body-item mbr-fonts-style display-7">Dasso y Soldado Argentina 448</td>
                                <td class="body-item mbr-fonts-style display-7">Diamante</td>
                                <td class="body-item mbr-fonts-style display-7">343-5186952</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">284</td>
                                <td class="body-item mbr-fonts-style display-7">Correa Alejandra Emilia</td>
                                <td class="body-item mbr-fonts-style display-7">Luis N. Palma 848<br>San Martin 542</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu</td>
                                <td class="body-item mbr-fonts-style display-7">344-6362788<br>344-6565892</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">285</td>
                                <td class="body-item mbr-fonts-style display-7">Brites Lorena Estefania</td>
                                <td class="body-item mbr-fonts-style display-7">Juan Garrigo 1190</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-6115740<br>343-4263695</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">286</td>
                                <td class="body-item mbr-fonts-style display-7">Caraballo Sana Lidia Ines</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes 535</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434198934</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">287</td>
                                <td class="body-item mbr-fonts-style display-7">Schultheis Tamara Nahir</td>
                                <td class="body-item mbr-fonts-style display-7">Uranga 92</td>
                                <td class="body-item mbr-fonts-style display-7">Aldea San Antonio</td>
                                <td class="body-item mbr-fonts-style display-7">3446-603996</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">288</td>
                                <td class="body-item mbr-fonts-style display-7">Sonderegger Florencia</td>
                                <td class="body-item mbr-fonts-style display-7">Laprida 1021</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4548692</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">289</td>
                                <td class="body-item mbr-fonts-style display-7">Correa Liza Camila</td>
                                <td class="body-item mbr-fonts-style display-7">Rio Negro 1046</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4747555</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">290</td>
                                <td class="body-item mbr-fonts-style display-7">Holotte Karen Nahir</td>
                                <td class="body-item mbr-fonts-style display-7">NOGOYA Y LOPEZ JORDAN</td>
                                <td class="body-item mbr-fonts-style display-7">Segui</td>
                                <td class="body-item mbr-fonts-style display-7">343-5508249</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">291</td>
                                <td class="body-item mbr-fonts-style display-7">Cacciavillani Jaquelina Del Huerto</td>
                                <td class="body-item mbr-fonts-style display-7">Miller 1763</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4716304</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">292</td>
                                <td class="body-item mbr-fonts-style display-7">Meroi Aranzazu Maria Del Rosario</td>
                                <td class="body-item mbr-fonts-style display-7">Ruta 12 Km. 456</td>
                                <td class="body-item mbr-fonts-style display-7">Sauce Montrul</td>
                                <td class="body-item mbr-fonts-style display-7">343-4466100</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">293</td>
                                <td class="body-item mbr-fonts-style display-7">Aguilar Celia Fabiana</td>
                                <td class="body-item mbr-fonts-style display-7">Celia Torra Y Quinquela Martin S/N°</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">343-4669864</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">294</td>
                                <td class="body-item mbr-fonts-style display-7">Baez Mariana Lorena</td>
                                <td class="body-item mbr-fonts-style display-7">B. Empleados de Comercio MZ8 C18</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435123892</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">295</td>
                                <td class="body-item mbr-fonts-style display-7">Retamar Noeliz Noemi</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes MZ 4 C8 1139 B. CGT</td>
                                <td class="body-item mbr-fonts-style display-7">Santa Elena</td>
                                <td class="body-item mbr-fonts-style display-7">3437446964</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">296</td>
                                <td class="body-item mbr-fonts-style display-7">Astengo Alejandro Victorino</td>
                                <td class="body-item mbr-fonts-style display-7">Barrio 186 Viv. MZNA 12 CASA 7</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455520616</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">297</td>
                                <td class="body-item mbr-fonts-style display-7">Rios Gabriela Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Chubut Y Castello S/N°</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455453618</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">298</td>
                                <td class="body-item mbr-fonts-style display-7">Villa Laura Diana</td>
                                <!-- <td class="body-item mbr-fonts-style display-7">Moreno 272</td> -->
                                <td class="body-item mbr-fonts-style display-7">Colon 593</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455524523</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">299</td>
                                <td class="body-item mbr-fonts-style display-7">Larrea Laureano Jesus Maria</td>
                                <td class="body-item mbr-fonts-style display-7">Herrera y Alsina</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455483742<br>3455423650</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">300</td>
                                <td class="body-item mbr-fonts-style display-7">Almiron Dana Agostina</td>
                                <td class="body-item mbr-fonts-style display-7">Tala 1815</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">3454156785</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">301</td>
                                <td class="body-item mbr-fonts-style display-7">Benedetti Andrea Mariela</td>
                                <td class="body-item mbr-fonts-style display-7">Misiones 660</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435129835</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">302</td>
                                <td class="body-item mbr-fonts-style display-7">Mego Lucrecia Maria Soledad</td>
                                <td class="body-item mbr-fonts-style display-7">Saldaña Retamar 117</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455469678</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">303</td>
                                <td class="body-item mbr-fonts-style display-7">Byczek Ximena Flavia</td>
                                <td class="body-item mbr-fonts-style display-7">Goyeneche 1171<br>Estrada 445</td>
                                <td class="body-item mbr-fonts-style display-7">Basavilbaso</td>
                                <td class="body-item mbr-fonts-style display-7">3445431571</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">304</td>
                                <td class="body-item mbr-fonts-style display-7">Servin Yanina Analia</td>
                                <td class="body-item mbr-fonts-style display-7">Los Talas 1433</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434161620</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">305</td>
                                <td class="body-item mbr-fonts-style display-7">Van Cauwenberghe Lara Denise</td>
                                <td class="body-item mbr-fonts-style display-7">Almeida 327</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455464522</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">306</td>
                                <td class="body-item mbr-fonts-style display-7">Fleyta Marianela Rocio</td>
                                <td class="body-item mbr-fonts-style display-7">Salvador Cali 225</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434191342</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">307</td>
                                <td class="body-item mbr-fonts-style display-7">Ruiz Berta Natalia</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Julio Federich 593</td>
                                <td class="body-item mbr-fonts-style display-7">La Paz</td>
                                <td class="body-item mbr-fonts-style display-7">3434660195</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">308</td>
                                <td class="body-item mbr-fonts-style display-7">Lencina Marta Florencia</td>
                                <td class="body-item mbr-fonts-style display-7">Jujuy 1115</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">3444537909</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">309</td>
                                <td class="body-item mbr-fonts-style display-7">Vesco Pamela</td>
                                <td class="body-item mbr-fonts-style display-7">Barrio Pastelero C.20 parte nueva</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435303420</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">310</td>
                                <td class="body-item mbr-fonts-style display-7">Ledesma Aranda Richar Osmar</td>
                                <td class="body-item mbr-fonts-style display-7">Artigas 1862</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguaychu</td>
                                <td class="body-item mbr-fonts-style display-7">3446593684</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">311</td>
                                <td class="body-item mbr-fonts-style display-7">Romero Gabriela Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Sampay 3047<br>Pablo Lorentz y Dr. Roberto Uncal</td>
                                <td class="body-item mbr-fonts-style display-7">Concepcion del Uruguay</td>
                                <td class="body-item mbr-fonts-style display-7">3442678042<br>3442548650</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">312</td>
                                <td class="body-item mbr-fonts-style display-7">Podesta Aline Edith</td>
                                <td class="body-item mbr-fonts-style display-7">Italia 258</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434157894</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">313</td>
                                <td class="body-item mbr-fonts-style display-7">Spahn Roskopf Sabrina</td>
                                <td class="body-item mbr-fonts-style display-7">Urquiza S/N°</td>
                                <td class="body-item mbr-fonts-style display-7">Colonia Ensayo</td>
                                <td class="body-item mbr-fonts-style display-7">3434624064</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">314</td>
                                <td class="body-item mbr-fonts-style display-7">Caceres Cristina Mabel</td>
                                <td class="body-item mbr-fonts-style display-7">Velzi S/Nº<br>Alberdi 1287<br>Urquiza 1250</td>
                                <td class="body-item mbr-fonts-style display-7">Colon</td>
                                <td class="body-item mbr-fonts-style display-7">3447577195</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">315</td>
                                <td class="body-item mbr-fonts-style display-7">Santill Malvina Soledad</td>
                                <td class="body-item mbr-fonts-style display-7">Belgrano 127</td>
                                <td class="body-item mbr-fonts-style display-7">Colonia Avellaneda</td>
                                <td class="body-item mbr-fonts-style display-7">3435340823<br>3434313829</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">316</td>
                                <td class="body-item mbr-fonts-style display-7">Velazquez Elsa Josefina</td>
                                <td class="body-item mbr-fonts-style display-7">Congreso 169<br>Maipu 178</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">3415873804</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">317</td>
                                <td class="body-item mbr-fonts-style display-7">Gorosito Ivana Agostina</td>
                                <td class="body-item mbr-fonts-style display-7">Italia 137<br>Dr. Minguillon 1895</td>
                                <td class="body-item mbr-fonts-style display-7">Crespo</td>
                                <td class="body-item mbr-fonts-style display-7">3434600178</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">318</td>
                                <td class="body-item mbr-fonts-style display-7">Cardozo Barbara Yamila</td>
                                <td class="body-item mbr-fonts-style display-7">Pablo Crauzas 629</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3425218586</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">319</td>
                                <td class="body-item mbr-fonts-style display-7">Ramirez Maria Laura</td>
                                <td class="body-item mbr-fonts-style display-7">Jose Politti 2412</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3436229831</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">320</td>
                                <td class="body-item mbr-fonts-style display-7">Valenzuela Valeria Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">Esquiu 852</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455465107</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">321</td>
                                <td class="body-item mbr-fonts-style display-7">Befart Gimena Magali</td>
                                <td class="body-item mbr-fonts-style display-7">Sarmiento 555</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455032149</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">322</td>
                                <td class="body-item mbr-fonts-style display-7">Kranevitter Silvana Valeria</td>
                                <td class="body-item mbr-fonts-style display-7">Padre E. Becher 884</td>
                                <td class="body-item mbr-fonts-style display-7">Santa Anita</td>
                                <td class="body-item mbr-fonts-style display-7">3445404112</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">323</td>
                                <td class="body-item mbr-fonts-style display-7">Perez Maria Fernanda</td>
                                <td class="body-item mbr-fonts-style display-7">Intendente Copellio 167</td>
                                <td class="body-item mbr-fonts-style display-7">Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">3436101456</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">324</td>
                                <td class="body-item mbr-fonts-style display-7">Morichetti Maria Virginia</td>
                                <!-- <td class="body-item mbr-fonts-style display-7">25 de mayo 450 6A</td> -->
                                <td class="body-item mbr-fonts-style display-7">Av. Francisco Ramírez 3132</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434042818</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">325</td>
                                <td class="body-item mbr-fonts-style display-7">Alvarez Yohanna Maria Romina</td>
                                <td class="body-item mbr-fonts-style display-7">25 de mayo 654 (CONSULTORIO)</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">3454146412</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">326</td>
                                <td class="body-item mbr-fonts-style display-7">Ladner Lucia Maria Rosa</td>
                                <td class="body-item mbr-fonts-style display-7">Rivadavia 1038</td>
                                <td class="body-item mbr-fonts-style display-7">Hernandez</td>
                                <td class="body-item mbr-fonts-style display-7">3435517692</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">327</td>
                                <td class="body-item mbr-fonts-style display-7">Arguello Maria Dolores</td>
                                <td class="body-item mbr-fonts-style display-7">Guido Marizza 1778</td>
                                <td class="body-item mbr-fonts-style display-7">San Benito(CONSULTORIO)</td>
                                <td class="body-item mbr-fonts-style display-7">3434250432</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">328</td>
                                <td class="body-item mbr-fonts-style display-7">Minaglia Lila</td>
                                <td class="body-item mbr-fonts-style display-7">9 de julio 585</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario del Tala</td>
                                <td class="body-item mbr-fonts-style display-7">3445511997</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">329</td>
                                <td class="body-item mbr-fonts-style display-7">Micheloud Maria Belen</td>
                                <!-- <td class="body-item mbr-fonts-style display-7">Espinillo Norte, Ruta 18 Km26.</td> -->
                                <td class="body-item mbr-fonts-style display-7">Av. San Martin 918</td>
                                <td class="body-item mbr-fonts-style display-7">Viale</td>
                                <!-- <td class="body-item mbr-fonts-style display-7">Parana</td> -->
                                <td class="body-item mbr-fonts-style display-7">3434803574</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">330</td>
                                <td class="body-item mbr-fonts-style display-7">Costen Liliana Teresa</td>
                                <td class="body-item mbr-fonts-style display-7">Urquiza 232</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455456101</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">331</td>
                                <td class="body-item mbr-fonts-style display-7">Rausch Agostina</td>
                                <td class="body-item mbr-fonts-style display-7">Pío XII</td>
                                <td class="body-item mbr-fonts-style display-7">Chajari</td>
                                <td class="body-item mbr-fonts-style display-7">3456459033</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">332</td>
                                <td class="body-item mbr-fonts-style display-7">Curzio Andrea Victoria</td>
                                <td class="body-item mbr-fonts-style display-7">Alvear 76</td>
                                <td class="body-item mbr-fonts-style display-7">Colon</td>
                                <td class="body-item mbr-fonts-style display-7">3447417681</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">333</td>
                                <td class="body-item mbr-fonts-style display-7">Tabia Mariana Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes 569</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434674349</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">334</td>
                                <td class="body-item mbr-fonts-style display-7">Stellato Butuz Abi María</td>
                                <td class="body-item mbr-fonts-style display-7">Poeta Eduardo Seri 3254</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435175385</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">335</td>
                                <td class="body-item mbr-fonts-style display-7">Alva Ángeles Candela</td>
                                <td class="body-item mbr-fonts-style display-7">Independencia 141</td>
                                <td class="body-item mbr-fonts-style display-7">Aldea Brasilera</td>
                                <td class="body-item mbr-fonts-style display-7">3434401761</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">336</td>
                                <td class="body-item mbr-fonts-style display-7">Dietz Melanie Carla</td>
                                <td class="body-item mbr-fonts-style display-7">Gob. Manuel Crespo s/n (Francia y Cesáreo Quiroz)</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434538990</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">337</td>
                                <td class="body-item mbr-fonts-style display-7">Sosa Carla Stefania</td>
                                <td class="body-item mbr-fonts-style display-7">Santiago del estero 60<br>San José 4226</td>
                                <td class="body-item mbr-fonts-style display-7">Parana<br>Colonia Avellaneda</td>
                                <td class="body-item mbr-fonts-style display-7">3434734776</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">338</td>
                                <td class="body-item mbr-fonts-style display-7">Heinitz Nicolas Agustin</td>
                                <td class="body-item mbr-fonts-style display-7">cuyas y Sampre 1748</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434804419</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">339</td>
                                <td class="body-item mbr-fonts-style display-7">Laner Bianca</td>
                                <td class="body-item mbr-fonts-style display-7">Alvarez Condarco 2705</td>
                                <td class="body-item mbr-fonts-style display-7">Chajari</td>
                                <td class="body-item mbr-fonts-style display-7">3456405239</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">340</td>
                                <td class="body-item mbr-fonts-style display-7">Marignac Emilce</td>
                                <td class="body-item mbr-fonts-style display-7">Alberto Gerchunoff 944</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434642255</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">341</td>
                                <td class="body-item mbr-fonts-style display-7">Sigura Keinet Maria de los Milagros</td>
                                <td class="body-item mbr-fonts-style display-7">Santa Fe 770</td>
                                <td class="body-item mbr-fonts-style display-7">San Benito</td>
                                <td class="body-item mbr-fonts-style display-7">3436201405</td>
                                <td class="body-item mbr-fonts-style display-7">Sí</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">342</td>
                                <td class="body-item mbr-fonts-style display-7">Trevisan Ludmila Agustina</td>
                                <td class="body-item mbr-fonts-style display-7">Estrada 2265</td>
                                <td class="body-item mbr-fonts-style display-7">Chajari</td>
                                <td class="body-item mbr-fonts-style display-7">3456522561</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">343</td>
                                <td class="body-item mbr-fonts-style display-7">Velazco Romina Liliana</td>
                                <td class="body-item mbr-fonts-style display-7">Santiago del Estero 227</td>
                                <td class="body-item mbr-fonts-style display-7">Gualeguay</td>
                                <td class="body-item mbr-fonts-style display-7">3444539496</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">344</td>
                                <td class="body-item mbr-fonts-style display-7">Medrano Judith Analiza Guadalupe</td>
                                <td class="body-item mbr-fonts-style display-7">Los Talas 1098</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434471141</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">345</td>
                                <td class="body-item mbr-fonts-style display-7">Garaycoechea Mariana</td>
                                <td class="body-item mbr-fonts-style display-7">Dr. Chebrillon 546</td>
                                <td class="body-item mbr-fonts-style display-7">Concordia</td>
                                <td class="body-item mbr-fonts-style display-7">3454147014</td>
                                <td class="body-item mbr-fonts-style display-7">Si</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">346</td>
                                <td class="body-item mbr-fonts-style display-7">Medina Lucila Antonella</td>
                                <td class="body-item mbr-fonts-style display-7">Pedro Goyena 944</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455535080</td>
                                <td class="body-item mbr-fonts-style display-7">Sí</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">347</td>
                                <td class="body-item mbr-fonts-style display-7">Cisnero Lucrecia Maria Agustina</td>
                                <td class="body-item mbr-fonts-style display-7">Rocamora 391</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455624666</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">348</td>
                                <td class="body-item mbr-fonts-style display-7">Cardinali Nanci Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Zona Rural s/n, districto Altamirano Norte Durazno</td>
                                <td class="body-item mbr-fonts-style display-7">Districto Tala</td>
                                <td class="body-item mbr-fonts-style display-7">3455401293</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">349</td>
                                <td class="body-item mbr-fonts-style display-7">Benitez Nerea Alejandra</td>
                                <td class="body-item mbr-fonts-style display-7">El paracao 533</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435107383</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">350</td>
                                <td class="body-item mbr-fonts-style display-7">Sosa Maria Jose</td>
                                <td class="body-item mbr-fonts-style display-7">Barrio 199 viviendas Emp. de Com. M.9 C.11</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434703316</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">351</td>
                                <td class="body-item mbr-fonts-style display-7">Narvaez Claudina</td>
                                <td class="body-item mbr-fonts-style display-7">9 de julio 568</td>
                                <td class="body-item mbr-fonts-style display-7">Rosario del Tala</td>
                                <td class="body-item mbr-fonts-style display-7">3445434616</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">352</td>
                                <td class="body-item mbr-fonts-style display-7">Barzola Carla Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Barrio Pna. 12 C.26 M.2</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">34345096000</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">353</td>
                                <td class="body-item mbr-fonts-style display-7">Gelvez Camila Desiree</td>
                                <td class="body-item mbr-fonts-style display-7">Hermelo 349</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455523536</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">354</td>
                                <td class="body-item mbr-fonts-style display-7">Iglesias Marianela Noemi</td>
                                <td class="body-item mbr-fonts-style display-7">SEBASTIAN VAZQUEZ 341</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3435051517</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">355</td>
                                <td class="body-item mbr-fonts-style display-7">Carraud Florencia Camila Estefania</td>
                                <td class="body-item mbr-fonts-style display-7">Chiesa 930</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3456029672</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">356</td>
                                <td class="body-item mbr-fonts-style display-7">Romero Sol Maria de Lujan</td>
                                <td class="body-item mbr-fonts-style display-7">BULEVAR CHURRUARIN 486</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455407841</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">357</td>
                                <td class="body-item mbr-fonts-style display-7">Gariboglio Nayla Lucia</td>
                                <td class="body-item mbr-fonts-style display-7">COLONIA AVIGDOR CALLE S/Nº</td>
                                <td class="body-item mbr-fonts-style display-7">La Paz</td>
                                <td class="body-item mbr-fonts-style display-7">3438401848</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">358</td>
                                <td class="body-item mbr-fonts-style display-7">Fin Mariel Alicia</td>
                                <td class="body-item mbr-fonts-style display-7">Paisandu 43</td>
                                <td class="body-item mbr-fonts-style display-7">3455443409</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">359</td>
                                <td class="body-item mbr-fonts-style display-7">David Maria Elena</td>
                                <td class="body-item mbr-fonts-style display-7">Juan de Campillo 515</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434578859</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">360</td>
                                <td class="body-item mbr-fonts-style display-7">Scelzi Griselda Elisabeth</td>
                                <td class="body-item mbr-fonts-style display-7">Doctora Ratto 796</td>
                                <td class="body-item mbr-fonts-style display-7">C. del Ururguay</td>
                                <td class="body-item mbr-fonts-style display-7">3442504201</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">361</td>
                                <td class="body-item mbr-fonts-style display-7">Giles Graciana Gabriela</td>
                                <td class="body-item mbr-fonts-style display-7">Estrada s/n</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455480497</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">362</td>
                                <td class="body-item mbr-fonts-style display-7">Longhi Rosa Beatriz</td>
                                <td class="body-item mbr-fonts-style display-7">Corrientes 831</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455526722</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">363</td>
                                <td class="body-item mbr-fonts-style display-7">Gonzalez Ana Paula</td>
                                <td class="body-item mbr-fonts-style display-7">Cepeda 755</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">34555484436</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">364</td>
                                <td class="body-item mbr-fonts-style display-7">Luggren Norma Griselda</td>
                                <td class="body-item mbr-fonts-style display-7">Alberti 1566</td>
                                <td class="body-item mbr-fonts-style display-7">Villaguay</td>
                                <td class="body-item mbr-fonts-style display-7">3455445641</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7">365</td>
                                <td class="body-item mbr-fonts-style display-7">Fernández Maria Fernanda</td>
                                <td class="body-item mbr-fonts-style display-7">Tibileti 2757</td>
                                <td class="body-item mbr-fonts-style display-7">Parana</td>
                                <td class="body-item mbr-fonts-style display-7">3434409276</td>
                                <td class="body-item mbr-fonts-style display-7">No</td>
                            </tr>


                            <!-- <tr>
                                <td class="body-item mbr-fonts-style display-7"></td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                                <td class="body-item mbr-fonts-style display-7"></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="container table-info-container">
                <div class="row info">
                    <div class="col-md-6">
                        <div class="dataTables_info mbr-fonts-style display-7">
                            <span class="infoBefore">Mostrando</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoAfter">prof.</span>
                            <span class="infoFilteredBefore">de un total de</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoFilteredAfter">prof.</span>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/datatables/jquery.data-tables.min.js"></script>
<script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>