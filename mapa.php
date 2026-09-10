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
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- <style>
        #map {
            height: 500px;
        }
    </style> -->
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
    <div class="container">
        <div
            style="min-height: 90dvh;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;"
            id="map"></div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // 1. Inicializar el mapa en coordenadas temporales
        const map = L.map('map').setView([0, 0], 2);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // 2. Verificar si el navegador del celular soporta geolocalización
        if (navigator.geolocation) {
            // Opciones de alta precisión (activa el GPS del celular)
            const opciones = {
                enableHighAccuracy: true, // Forzar uso de GPS de alta precisión
                timeout: 5000, // Tiempo máximo de espera (5 segundos)
                maximumAge: 0 // No usar ubicaciones guardadas en caché
            };

            // 3. Solicitar la ubicación actual al dispositivo
            navigator.geolocation.getCurrentPosition(
                (posicion) => {
                    const lat = posicion.coords.latitude;
                    const lon = posicion.coords.longitude;
                    const precision = posicion.coords.accuracy; // Precisión en metros

                    // 4. Centrar el mapa en tu ubicación real
                    map.setView([lat, lon], 16);

                    // 5. Agregar un marcador y un círculo que muestre el margen de error
                    L.marker([lat, lon]).addTo(map)
                        .bindPopup("¡Estás aquí!").openPopup();

                    L.circle([lat, lon], {
                        radius: precision,
                        color: 'blue',
                        fillOpacity: 0.15
                    }).addTo(map);

                    // console.log(`Ubicación encontrada. Margen de error: ${precision} metros.`);
                    const misPuntos = [{
                            lat: -31.729497,
                            lon: -60.517112,
                            nombre: "Pamela Oliva - Misiones 572"
                        },
                        {
                            lat: -31.729439,
                            lon: -60.520709,
                            nombre: "Campos Eduardo Humberto - Colon 452"
                        },
                        {
                            lat: -32.0645142,
                            lon: -60.6416209,
                            nombre: "Ledesma Hector Felipe - D. Dasso 166"
                        },

                        {
                            lat: -32.5410862,
                            lon: -59.358485,
                            nombre: "Villanueva Emilce Leonor - Fco. Beiro 263"
                        },

                        {
                            lat: -32.4886771,
                            lon: -58.2344098,
                            nombre: "Jufre Ema De Lavarello - Ereño 876"
                        },

                        {
                            lat: -32.6934372,
                            lon: -58.8874935,
                            nombre: "Ledri Cristina Maria - Pasaje 2 de Abril 327"
                        },

                        {
                            lat: -31.72791619607696,
                            lon: -60.536446273326874,
                            nombre: "Ladron De Guevara Silvia M. - Maipu 373"
                        }, {
                            lat: -31.729097936255954,
                            lon: -60.5265247821807,
                            nombre: "Vera De Plaza Stella Maris"
                        }, {
                            lat: -31.75012035396458,
                            lon: -60.51389694213868,
                            nombre: "Bonifacino Maria Cristina"
                        }, {
                            lat: -31.732262096858143,
                            lon: -60.53022891283036,
                            nombre: "Faria Nora Guadalupe"
                        }, {
                            lat: -31.7292715,
                            lon: -60.5388496,
                            nombre: "Colegio de Podólogos de Entre Ríos"
                        }, {
                            lat: -31.7482629,
                            lon: -60.5252907,
                            nombre: "Porta Rosario"
                        }, {
                            lat: -31.7431268,
                            lon: -60.5200328,
                            nombre: "Lascano Clotilde Maria Catalina - E. Carbo 916 3 E"
                        }, {
                            lat: -31.731276,
                            lon: -60.528123,
                            nombre: "Bonifacino Maria Cristina - Corrientes 160"
                        }, {
                            lat: -31.7231849,
                            lon: -60.5356131,
                            nombre: "Faria De Cantero Nora Guadalupe - Tejeiro Martinez 576"
                        }, {
                            lat: -31.7278828,
                            lon: -60.5224988,
                            nombre: "Costa Toro Iris Beatriz - Salta 590/594"
                        }, {
                            lat: -31.7268281,
                            lon: -60.5219514,
                            nombre: "Frick Guillermo Adolfo - Salta 639"
                        }, {
                            lat: -31.7266055,
                            lon: -60.4911067,
                            nombre: "Arguello Ivana Vanina - Blas Pareras 2507"
                        }, {
                            lat: -31.7372979,
                            lon: -60.4862857,
                            nombre: "Arguello Gonzalo Ricardo - Don Bosco 2295"
                        }, {
                            lat: -31.7447598,
                            lon: -60.5224588,
                            nombre: "Barbeito Patricia Maria Lucia - Dr. Luis Agote 905 Piso PB"
                        }, {
                            lat: -31.724392,
                            lon: -60.5347772,
                            nombre: "Zuttion Marta Ester - Santiago Del Estero 467"
                        }, {
                            lat: -31.7402988,
                            lon: -60.5426973,
                            nombre: ""
                        }, {
                            lat: -31.7482629,
                            lon: -60.5252907,
                            nombre: "Porta Rosario - Av. De Las Americas 1736"
                        }, {
                            lat: -33.0062308,
                            lon: -58.5092396,
                            nombre: "Mendoza Marta - Colombo 446"
                        }, {
                            lat: -31.7270626,
                            lon: -60.5385649,
                            nombre: "Vera De Plaza Stella Maris - Cervantes 659"
                        }, {
                            lat: -31.7270626,
                            lon: -60.5385649,
                            nombre: "Vera De Plaza Stella Maris - Cervantes 659"
                        }, {
                            lat: -31.3817679,
                            lon: -58.0207468,
                            nombre: "Perez Agnes Andrea - Dr. Del Cerro 305"
                        }, {
                            lat: -33.0092087,
                            lon: -58.5167842,
                            nombre: "Bos Luis Alberto - Alberdi 23"
                        }, {
                            lat: -33.0138207,
                            lon: -58.5169437,
                            nombre: "Dunn Carlos Fernando - 3 de Caballeria 926"
                        }, {
                            lat: -31.5111429,
                            lon: -59.8366849,
                            nombre: "Olier Violeta Maria Itati - 25 de Mayo 475"
                        }, {
                            lat: -32.4825154,
                            lon: -58.2362048,
                            nombre: "Bonasegla Pablo Ruber - Posadas 917"
                        }, {
                            lat: -31.8591265,
                            lon: -59.0301673,
                            nombre: "Franco Griselda Stella Maris - Posadas 141"
                        }, {
                            lat: -31.8662714,
                            lon: -59.0292413,
                            nombre: "Ferro Cristhian Alejandro - Urquiza 232"
                        }, {
                            lat: -31.4011344,
                            lon: -58.0138574,
                            nombre: "Trupiano Maria Belen - E. Carriego 268"
                        }, {
                            lat: -30.7420601,
                            lon: -57.9827692,
                            nombre: "Rolando Nora Noemi - Fochesatto 2460"
                        }, {
                            lat: -32.7224534,
                            lon: -59.3959309,
                            nombre: "Brscacin Alejandro Fabian - San Martin 387"
                        }, {
                            lat: -32.0254203,
                            lon: -60.3150894,
                            nombre: "Herbel Claudia Gabriela - 24 De Abril 1084"
                        }, {
                            lat: -32.032187,
                            lon: -60.3065377,
                            nombre: "Stojhwski Mariza Claudia - 25 de mayo 1033"
                        }, {
                            lat: -32.6246794,
                            lon: -60.1571395,
                            nombre: "Frau Maria Cecilia - Chacabuco 121"
                        }, {
                            lat: -32.0202371,
                            lon: -60.3120892,
                            nombre: "Gareis Cladis Virginia - Valdemarin 911"
                        }, {
                            lat: -31.7834251,
                            lon: -60.4417742,
                            nombre: "Grenat Silvina Cecilia - 9 de julio 1126"
                        }, {
                            lat: -31.7402988,
                            lon: -60.5426973,
                            nombre: "Zulian Adriana teresita - Casiano Calderon 1720"
                        }, {
                            lat: -31.961203,
                            lon: -60.124962,
                            nombre: "Martinez Dora Emilia - Conrada De Espinosa 35"
                        }, {
                            lat: -31.7348016,
                            lon: -60.5403989,
                            nombre: "Tataren Daniel Gaston - Sebastian Vazquez 555, Piso 2 Depto. 48"
                        }, {
                            lat: -32.6211591,
                            lon: -60.1390879,
                            nombre: "Alarcon Ana Maria - Pringles 568"
                        }, {
                            lat: -32.180123,
                            lon: -60.200147,
                            nombre: "Avaca Lucrecia Lorena - Berutti 257"
                        }, {
                            lat: -31.7548595,
                            lon: -60.5114923,
                            nombre: "Avaca Alejandra Beatriz - Intendente Berduc 672"
                        }, {
                            lat: -31.7328612,
                            lon: -60.5373949,
                            nombre: "Bravo Maria Eugenia - Courreges 282"
                        }, {
                            lat: -31.7635201,
                            lon: -60.483934,
                            nombre: "Palavecino Nora Malvina - Estrella Federal 1230"
                        }, {
                            lat: -31.8650275,
                            lon: -59.026616,
                            nombre: "Verreyt Julio Daniel - Balcarce 540"
                        }, {
                            lat: -31.389416,
                            lon: -58.027175,
                            nombre: "Sersewitz Maria Virginia - Peru 975"
                        }, {
                            lat: -31.6697105,
                            lon: -59.893545,
                            nombre: "Ronchi Maria De Los Angeles - Intendente Rivero 333"
                        }, {
                            lat: -31.7900702,
                            lon: -60.5043285,
                            nombre: "Tropini Maria Teresa - Juan B. Justo y Zanni M5C2"
                        }, {
                            lat: -31.7268281,
                            lon: -60.5219514,
                            nombre: "Debevc Veronica Isabel - Salta 639"
                        }, {
                            lat: -33.1501124,
                            lon: -59.315418,
                            nombre: "Sajnin Diana - Urquiza 155"
                        }, {
                            lat: -31.7375806,
                            lon: -60.5244396,
                            nombre: "Tanaro Juan Carlos - Alem 504"
                        }, {
                            lat: -31.7780526,
                            lon: -60.4833454,
                            nombre: "Lorenzon Gabriela Soledad - Av. Jorge Newbery 3049"
                        }, {
                            lat: -31.7487264,
                            lon: -60.5048249,
                            nombre: "Viera Rosana - Gervasio Mendez 490"
                        }, {
                            lat: -31.882553,
                            lon: -60.407637,
                            nombre: "Viera Rosana - Ruta 12 e Hipólito Irigoyen"
                        }, {
                            lat: -32.4005083,
                            lon: -59.7937996,
                            nombre: "Correa Griselda Mabel - Moreno 1328"
                        }, {
                            lat: -32.6215167,
                            lon: -60.1515455,
                            nombre: "Cucinatto Clarisa - 3 De Febrero 176"
                        }, {
                            lat: -31.7363765,
                            lon: -60.5268424,
                            nombre: "Costa Sandra Lorena - Alem 328"
                        }, {
                            lat: -31.7505934,
                            lon: -60.5236218,
                            nombre: "Lopez Rita Guadalupe - E. Damicis 267"
                        }, {
                            lat: -32.029994,
                            lon: -60.293313,
                            nombre: "Folmer Patricia Ines - G. Mistral 317"
                        }, {
                            lat: -31.7272329,
                            lon: -60.5263113,
                            nombre: "Blason Brenda - Corrientes 459"
                        }, {
                            lat: -31.7586407,
                            lon: -60.5025612,
                            nombre: "Betancurt Zurita Lidia Ester - Miguel Unamuno 1141"
                        }, {
                            lat: -31.3952604,
                            lon: -58.0282256,
                            nombre: "Girardo Maria Laura - San Martin 468"
                        }, {
                            lat: -32.3104188,
                            lon: -59.1383859,
                            nombre: "Obispo Leticia Silvana - Gualeguaychu 373"
                        }, {
                            lat: -32.1749401,
                            lon: -59.3978982,
                            nombre: "Bosc Hector Marcelo - Gualeguaychu 476"
                        }, {
                            lat: -31.7695908,
                            lon: -60.5209232,
                            nombre: "Arce Marta Guadalupe - Roberto Satler 2392"
                        }, {
                            lat: -31.7676186,
                            lon: -60.5219428,
                            nombre: "Arce Marta Guadalupe - Fco. de Bueno 104"
                        }, {
                            lat: -30.7444589,
                            lon: -59.6444764,
                            nombre: "Bruna Maria Candela - San Martin 1280"
                        }, {
                            lat: -31.7352814,
                            lon: -60.5390471,
                            nombre: "Facundo Almada Ernesto Martin - Sebastian Vazquez 458"
                        }, {
                            lat: -31.7712087,
                            lon: -60.5206996,
                            nombre: "Barzola Andrea Silvana - Dr. Alejandro Gessino 206"
                        }, {
                            lat: -32.307001,
                            lon: -59.156374,
                            nombre: "Paz Maria Eugenia - Sarmiento y Rocamora"
                        }, {
                            lat: -31.7403496,
                            lon: -60.5083042,
                            nombre: "Rodriguez Patricia Alejandra - Lopez Y Planez 614"
                        }, {
                            lat: -31.3897053,
                            lon: -58.0228966,
                            nombre: "De Mauricio Natalia Graciela - Sargento Cabral 262"
                        }, {
                            lat: -31.3720312,
                            lon: -58.010786,
                            nombre: "De Mauricio Natalia Graciela - Pellegrini 2075"
                        }, {
                            lat: -31.4025851,
                            lon: -58.0216865,
                            nombre: "Aguilera Marta Noemi - Castelli 71"
                        }, {
                            lat: -32.0646102,
                            lon: -60.6387305,
                            nombre: "Tachella Prado Paula Andrea - D. Dasso 165"
                        }, {
                            lat: -31.763797,
                            lon: -60.5294195,
                            nombre: "Bonifacino Agostina Corina - Padre Kentenich 576"
                        }, {
                            lat: -31.746353,
                            lon: -60.5220025,
                            nombre: "Bonifacino Agostina Corina - Feliciano 997"
                        }, {
                            lat: -31.7456199,
                            lon: -60.5036817,
                            nombre: "Robledo Marien Anabel - Vieyra Mendez 738"
                        }, {
                            lat: -31.7693572,
                            lon: -60.5299441,
                            nombre: "Marizza Ma. Antonella - Moises Lebenson 3518"
                        }, {
                            lat: -31.734989,
                            lon: -60.5039611,
                            nombre: "Nuñez Juan Jose - Av. Don Bosco 842"
                        }, {
                            lat: -31.771294,
                            lon: -60.5024396,
                            nombre: "Furios Monica Guadalupe - Villa San Benito 1561"
                        }, {
                            lat: -31.7336649,
                            lon: -60.551777,
                            nombre: "Matsuyama Anabel Yohanna - Las Calandrias 2550"
                        }, {
                            lat: -31.7218344,
                            lon: -60.5338415,
                            nombre: "Matsuyama Anabel Yohanna - Santiago Del Estero 627"
                        }, {
                            lat: -32.0640077,
                            lon: -60.6332128,
                            nombre: "Kloss Maria Juliana - Doctor Lopez 81 Bis"
                        }, {
                            lat: -32.0645414,
                            lon: -60.6435007,
                            nombre: "Kloss Maria Juliana - Brown 218"
                        }, {
                            lat: -32.6236876,
                            lon: -60.1425947,
                            nombre: "Muñoz Sandra Mariela - Viamonte 888"
                        }, {
                            lat: -31.827678,
                            lon: -60.5187088,
                            nombre: "Gonzalez Maria Victoria - Los Cardenales 146"
                        }, {
                            lat: -31.7307637,
                            lon: -60.5223004,
                            nombre: "Rodriguez Norma Edith - La Rioja 362"
                        }, {
                            lat: -31.7273569,
                            lon: -60.5098896,
                            nombre: "Castillo Maria Beatriz - Toscanini 342"
                        }, {
                            lat: -31.7712292,
                            lon: -60.4138521,
                            nombre: "Jozani Karen Antonella - San Juan S/N°"
                        }, {
                            lat: -31.760719,
                            lon: -60.5259082,
                            nombre: "Chaparro Rocio Marisol - Gabriela Mistral 2683"
                        }, {
                            lat: -32.689785,
                            lon: -58.891790,
                            nombre: "Tommasi Arias Nerea - Pte. Peron 313"
                        }, {
                            lat: -31.7345464,
                            lon: -60.5358903,
                            nombre: "Sotelo Zulema Ramona - Libertad 367"
                        }, {
                            lat: -31.7688681,
                            lon: -60.5306871,
                            nombre: "Figueroa Ma. De Los Milagros - Pascual Greca 596"
                        }, {
                            lat: -31.7687456,
                            lon: -60.522481,
                            nombre: "Inosemtzeff Griselda - Dagostino 2270"
                        }, {
                            lat: -31.7330546,
                            lon: -60.5343202,
                            nombre: "Perez Seeling Evangelina Alejandra - Peru 245"
                        }, {
                            lat: -31.7529423,
                            lon: -60.5204565,
                            nombre: "Pocai Veronica Yanina - Av. Ramirez 3564"
                        }, {
                            lat: -31.7287735,
                            lon: -60.5177834,
                            nombre: "Pocai Veronica Yanina - Victoria 563"
                        }, {
                            lat: -31.740669,
                            lon: -60.523025,
                            nombre: "Pocai Veronica Yanina - Hospital San Martin"
                        }, {
                            lat: -31.7274066,
                            lon: -60.5377567,
                            nombre: "Pocai Veronica Yanina - Catamarca 174"
                        }, {
                            lat: -31.7488998,
                            lon: -60.507506,
                            nombre: "Pocai Veronica Yanina - Artigas 371"
                        }, {
                            lat: -31.865465,
                            lon: -59.034026,
                            nombre: "Urcula Erica Emilce - Barrio Evita 940"
                        }, {
                            lat: -31.7620198,
                            lon: -60.5290961,
                            nombre: "Beron Ines Marisol - Camino de la Cuchilla Grande 2809"
                        }, {
                            lat: -31.868267,
                            lon: -59.0247996,
                            nombre: "Velazquez Flavia Beatriz - Alem 659"
                        }, {
                            lat: -31.726847,
                            lon: -60.524712,
                            nombre: "Rosskam Mirian Teresita - Victoria 169"
                        }, {
                            lat: -31.7431064,
                            lon: -60.5264819,
                            nombre: "Lozada Silvia Isabel - Pascual Palma 739"
                        }, {
                            lat: -31.8749049,
                            lon: -59.0310362,
                            nombre: "Rodriguez Jacqueline - Concordia 533"
                        }, {
                            lat: -31.8591265,
                            lon: -59.0301673,
                            nombre: "Rodriguez Jacqueline - Posadas 141"
                        }, {
                            lat: -31.8660424,
                            lon: -59.0256987,
                            nombre: "Rodriguez Jacqueline - Paso 430"
                        }, {
                            lat: -31.8613632,
                            lon: -59.0266407,
                            nombre: "Corrales Maria Natalia - Balcarce 926"
                        }, {
                            lat: -31.7288273,
                            lon: -60.5505331,
                            nombre: "Toledo Adriana Guadalupe - Ameghino 496"
                        }, {
                            lat: -31.8100684,
                            lon: -60.5119192,
                            nombre: "Modenutti Ileana Belen - Av. Los Cisnes 1776"
                        }, {
                            lat: -31.7554551,
                            lon: -60.5268522,
                            nombre: "Modenutti Ileana Belen - Av. de las Americas 2360"
                        }, {
                            lat: -31.8761273,
                            lon: -59.0275332,
                            nombre: "Arlettaz Brenda - S. Bolivar 664"
                        }, {
                            lat: -31.8661514,
                            lon: -59.0337188,
                            nombre: "Arlettaz Brenda - San Jose 159"
                        }, {
                            lat: -32.1628349,
                            lon: -58.4049339,
                            nombre: "Casse Luciana Vanesa - Dr. Gutierrez 1653"
                        }, {
                            lat: -32.4674134,
                            lon: -58.4810686,
                            nombre: "Banchero Kevin Lujan - Calle 20"
                        }, {
                            lat: -32.4790136,
                            lon: -58.2330679,
                            nombre: "Banchero Kevin Lujan - 25 de mayo 392"
                        }, {
                            lat: -31.7361346,
                            lon: -60.5187689,
                            nombre: "Cerbin Belen Evangelina Marisa - Urquiza 147 Dpto 2DO C"
                        }, {
                            lat: -31.8566108,
                            lon: -59.0334534,
                            nombre: "Benitez Marina Silvana - Deletang 153"
                        }, {
                            lat: -31.7382327,
                            lon: -60.5121827,
                            nombre: "De Giusto Maria Lorena - Alte Brown 333"
                        }, {
                            lat: -31.7599283,
                            lon: -60.4982457,
                            nombre: "Senger Lorena Andrea - Av. Zanni 1190"
                        }, {
                            lat: -32.4794327,
                            lon: -58.2373892,
                            nombre: "Blanc Marisol - Ameghino 412"
                        }, {
                            lat: -30.7638638,
                            lon: -57.9895574,
                            nombre: "Piana Tamara Belen - Santa Fe 1375"
                        }, {
                            lat: -33.1380545,
                            lon: -59.307582,
                            nombre: "Romero Rosa Silvia - Roque Saenz Peña 417"
                        }, {
                            lat: -33.1495036,
                            lon: -59.3194922,
                            nombre: "Cosso Maria De Los Angeles - Rosario Del Tala 131"
                        }, {
                            lat: -31.749322,
                            lon: -60.5370118,
                            nombre: "Moreyra Fabiana Raquel - Avda Ejercito 2157"
                        }, {
                            lat: -31.7428026,
                            lon: -60.5393669,
                            nombre: "Zandomeni Brenda Ileana - Coronel Arredondo 1447"
                        }, {
                            lat: -31.8530355,
                            lon: -59.0214272,
                            nombre: "Premaries Giuliana Belen - Gardel 950"
                        }, {
                            lat: -31.8629247,
                            lon: -59.0272935,
                            nombre: "Premaries Giuliana Belen - San Martin 787 Local 2"
                        }, {
                            lat: -31.8621431,
                            lon: -59.0208567,
                            nombre: "Luggren Maria Paola - Premazzi 877"
                        }, {
                            lat: -31.7495347,
                            lon: -60.521937,
                            nombre: "Faez Claudia Carina - Pasteur 172"
                        }, {
                            lat: -31.8227214,
                            lon: -60.5216358,
                            nombre: "Princic Corona Camila - Las Golondrinas 429"
                        }, {
                            lat: -31.7214533,
                            lon: -60.5285833,
                            nombre: "Princic Corona Camila - Mitre 188"
                        }, {
                            lat: -31.7304708,
                            lon: -60.5243257,
                            nombre: "Princic Corona Camila - Salta 325 Piso 7 Dpto 2"
                        }, {
                            lat: -31.7317506,
                            lon: -60.5165285,
                            nombre: "Clemente Melina Alejandra - La Paz 677"
                        }, {
                            lat: -31.8597499,
                            lon: -59.043579,
                            nombre: "Duarte Jessica Belen - H.Yrigoyen 1053"
                        }, {
                            lat: -31.7671596,
                            lon: -60.4874507,
                            nombre: "Santana Silvina Noemi - Enrique Mihura 1571"
                        }, {
                            lat: -31.8716428,
                            lon: -59.0203543,
                            nombre: "Santomil Joel Norman - Castro 183"
                        }, {
                            lat: -31.7411502,
                            lon: -60.549173,
                            nombre: "Lopez Sofia Rocio - Brigadier J. Lopez 2128"
                        }, {
                            lat: -31.244469,
                            lon: -59.227166,
                            nombre: "Iglesias Mirta Alicia - Lopez Jordan Y Guarumba S/Nº"
                        }, {
                            lat: -31.7193513,
                            lon: -60.5100954,
                            nombre: "Nuñez Noelia De Valle - Fco. Soler 3062"
                        }, {
                            lat: -33.1524557,
                            lon: -59.3176067,
                            nombre: "Colazo Rosana Vanesa - Ambrosetti 332"
                        }, {
                            lat: -32.6130525,
                            lon: -60.1551436,
                            nombre: "Sosa Hilda Delia - Guemes y Monte Caseros"
                        }, {
                            lat: -31.7379421,
                            lon: -60.5168306,
                            nombre: "Fernandez Alicia Raquel - Av. Ramirez 2117"
                        }, {
                            lat: -31.7375414,
                            lon: -60.5328278,
                            nombre: "Cardoso Maira Georgina - San Martin 1373"
                        }, {
                            lat: -31.7525481,
                            lon: -60.4988788,
                            nombre: "Dechanzi Ana Carolina - Hereñu 1445"
                        }, {
                            lat: -32.4781166,
                            lon: -58.2317577,
                            nombre: "Michel Jesica Walquiria - Supremo Entrerriano 435"
                        }, {
                            lat: -32.4812832,
                            lon: -58.2610885,
                            nombre: "Michel Jesica Walquiria - Hosp. J. J. de Urquiza UNCAL S/Nº"
                        }, {
                            lat: -31.3795685,
                            lon: -58.0076753,
                            nombre: "Ortiz Aubone Maria Eugenia - D. P. Garat 1696"
                        }, {
                            lat: -31.445165,
                            lon: -59.185931,
                            nombre: "Nuñez Maria Alejandra - 1 de Mayo 154"
                        }, {
                            lat: -31.8634436,
                            lon: -59.0185468,
                            nombre: "Olivera Jesica Alejandra - Paysandu 743"
                        }, {
                            lat: -31.7212372,
                            lon: -60.485130,
                            nombre: "Fita Luis Emanuel - Vicoer 80 Viv. Manzana E Casa 28"
                        }, {
                            lat: -32.0700378,
                            lon: -60.4851377,
                            nombre: "Ledesma Sergio Javier - Moreno 376"
                        }, {
                            lat: -31.7718236,
                            lon: -60.4976334,
                            nombre: "Carrere Vanina Solange - Victor Mercante 2056"
                        }, {
                            lat: -31.7454363,
                            lon: -60.5216869,
                            nombre: "Molina Maria Belen - Fleming 701"
                        }, {
                            lat: -31.749322,
                            lon: -60.5370118,
                            nombre: "Molina Maria Belen - Hosp. Militar"
                        }, {
                            lat: -31.749322,
                            lon: -60.5370118,
                            nombre: "Molina Maria Belen - Hosp. Militar"
                        }, {
                            lat: -31.7294852,
                            lon: -60.4972267,
                            nombre: "Molina Maria Belen - Rondeau 2210"
                        }, {
                            lat: -32.0685638,
                            lon: -60.6401363,
                            nombre: "Sanchez Maria Luisa - Dasso y Soldado Argentina 448"
                        }, {
                            lat: -33.0080121,
                            lon: -58.5159389,
                            nombre: "Correa Alejandra Emilia - Luis N. Palma 848"
                        }, {
                            lat: -33.0098945,
                            lon: -58.5106737,
                            nombre: "Correa Alejandra Emilia - San Martin 542"
                        }, {
                            lat: -31.7589809,
                            lon: -60.504038,
                            nombre: "Brites Lorena Estefania - Juan Garrigo 1190"
                        }, {
                            lat: -31.7262895,
                            lon: -60.5257477,
                            nombre: "Caraballo Sana Lidia Ines - Corrientes 535"
                        }, {
                            lat: -32.6281342,
                            lon: -58.7028771,
                            nombre: "Schultheis Tamara Nahir - Uranga 92"
                        }, {
                            lat: -31.7245842,
                            lon: -60.5427355,
                            nombre: "Sonderegger Florencia - Laprida 1021"
                        }, {
                            lat: -31.7435063,
                            lon: -60.4961767,
                            nombre: "Correa Liza Camila - Rio Negro 1046"
                        }, {
                            lat: -31.9592114,
                            lon: -60.1319449,
                            nombre: "Holotte Karen Nahir - NOGOYA Y LOPEZ JORDAN"
                        }, {
                            lat: -31.7469644,
                            lon: -60.5355928,
                            nombre: "Cacciavillani Jaquelina Del Huerto - Miller 1763"
                        }, {
                            lat: -31.7455477,
                            lon: -60.3574411,
                            nombre: "Meroi Aranzazu Maria Del Rosario - Ruta 12 Km. 456"
                        }, {
                            lat: -31.7519258,
                            lon: -60.4874043,
                            nombre: "Aguilar Celia Fabiana - Celia Torra Y Quinquela Martin S/N°"
                        }, {
                            lat: -31.790460,
                            lon: -60.507390,
                            nombre: "Baez Mariana Lorena - B. Empleados de Comercio MZ8 C18"
                        }, {
                            lat: -30.9416026,
                            lon: -59.789256,
                            nombre: "Retamar Noeliz Noemi - Corrientes MZ 4 C8 1139 B. CGT"
                        }, {
                            lat: -31.8712944,
                            lon: -59.0297783,
                            nombre: "Astengo Alejandro Victorino - Barrio 186 Viv. MZNA 12 CASA 7"
                        }, {
                            lat: -31.8706391,
                            lon: -59.0432786,
                            nombre: "Rios Gabriela Beatriz - Chubut Y Castello S/N°"
                        }, {
                            lat: -31.8646261,
                            lon: -59.0257027,
                            nombre: "Villa Laura Diana - Colon 593"
                        }, {
                            lat: -31.8550753,
                            lon: -59.0315901,
                            nombre: "Larrea Laureano Jesus Maria - Herrera y Alsina"
                        }, {
                            lat: -31.876331,
                            lon: -59.0336057,
                            nombre: "Mego Lucrecia Maria Soledad- Saldaña Retamar 117"
                        }, {
                            lat: -31.8670563,
                            lon: -59.03939,
                            nombre: "Van Cauwenberghe Lara Denise - Almeida 327"
                        }, {
                            lat: -31.3732177,
                            lon: -58.0322748,
                            nombre: "Almiron Dana Agostina - Tala 1815"
                        }, {
                            lat: -31.7285148,
                            lon: -60.516245,
                            nombre: "Benedetti Andrea Mariela - Misiones 660"
                        }, {
                            lat: -32.370722,
                            lon: -58.870708,
                            nombre: "Byczek Ximena Flavia - Goyeneche 1171"
                        }, {
                            lat: -32.3740346,
                            lon: -58.8821672,
                            nombre: "Byczek Ximena Flavia - Estrada 445"
                        }, {
                            lat: -31.7414185,
                            lon: -60.5503542,
                            nombre: "Servin Yanina Analia - Los Talas 1433"
                        }, {
                            lat: -31.7656192,
                            lon: -60.5196714,
                            nombre: "Fleyta Marianela Rocio - Salvador Cali 225"
                        }, {
                            lat: -30.731293,
                            lon: -59.625981,
                            nombre: "Ruiz Berta Natalia - Dr. Julio Federich 593"
                        }, {
                            lat: -33.1557626,
                            lon: -59.3291711,
                            nombre: "Lencina Marta Florencia - Jujuy 1115"
                        }, {
                            lat: -31.760096068579003,
                            lon: -60.520037055804416,
                            nombre: "Vesco Pamela - Barrio Pastelero C.20"
                        }, {
                            lat: -33.0185937,
                            lon: -58.5313478,
                            nombre: "Ledesma Aranda Richar Osmar - Artigas 1862"
                        }, {
                            lat: -31.7339093,
                            lon: -60.5339613,
                            nombre: "Podesta Aline Edith - Italia 258"
                        }, {
                            lat: -31.8767881,
                            lon: -60.58252,
                            nombre: "Spahn Roskopf Sabrina - Urquiza S/N°"
                        }, {
                            lat: -31.7683532,
                            lon: -60.4152335,
                            nombre: "Santill Malvina Soledad - Belgrano 127"
                        }, {
                            lat: -31.7654194,
                            lon: -60.530389,
                            nombre: "Cardozo Barbara Yamila - Pablo Crauzas 629"
                        }, {
                            lat: -31.7719009,
                            lon: -60.5161639,
                            nombre: "Ramirez Maria Laura - Jose Politti 2412"
                        }, {
                            lat: -31.8621894,
                            lon: -59.0343109,
                            nombre: "Valenzuela Valeria Alejandra - Esquiu 852"
                        }, {
                            lat: -31.8648685,
                            lon: -59.0329298,
                            nombre: "Befart Gimena Magali - Sarmiento 555"
                        }, {
                            lat: -32.1759323,
                            lon: -58.7820716,
                            nombre: "Kranevitter Silvana Valeria - Padre E. Becher 884"
                        }, {
                            lat: -32.6191302,
                            lon: -60.1488843,
                            nombre: "Perez Maria Fernanda - Intendente Copellio 167"
                        }, {
                            lat: -31.7486899,
                            lon: -60.5195237,
                            nombre: "Morichetti Maria Virginia - Av. Francisco Ramírez 3132"
                        }, {
                            lat: -31.3960381,
                            lon: -58.0218801,
                            nombre: "Alvarez Yohanna Maria Romina - 25 de mayo 654"
                        }, {
                            lat: -32.3379148,
                            lon: -60.0203863,
                            nombre: "Ladner Lucia Maria Rosa - Rivadavia 1038"
                        }, {
                            lat: -31.7694945,
                            lon: -60.4331414,
                            nombre: "Arguello Maria Dolores - Guido Marizza 1778"
                        }, {
                            lat: -32.298152,
                            lon: -59.1477229,
                            nombre: "Minaglia Lila - 9 de julio 585"
                        }, {
                            lat: -31.8709701,
                            lon: -60.0082603,
                            nombre: "Micheloud Maria Belen - Av. San Martin 918"
                        }, {
                            lat: -31.8662714,
                            lon: -59.0292413,
                            nombre: "Costen Liliana Teresa - Urquiza 232"
                        }, {
                            lat: -30.7438992,
                            lon: -57.9824468,
                            nombre: "Rausch Agostina - Pío XII"
                        }, {
                            lat: -32.2239407,
                            lon: -58.1446634,
                            nombre: "Curzio Andrea Victoria - Alvear 76"
                        }, {
                            lat: -31.7259495,
                            lon: -60.5256973,
                            nombre: "Tabia Mariana Beatriz - Corrientes 569"
                        }, {
                            lat: -31.7564846,
                            lon: -60.4685274,
                            nombre: "Stellato Butuz Abi María - Poeta Eduardo Seri 3254"
                        }, {
                            lat: -31.8906349,
                            lon: -60.5918529,
                            nombre: "Alva Ángeles Candela - Independencia 141"
                        }, {
                            lat: -31.750939,
                            lon: -60.490078,
                            nombre: "Dietz Melanie Carla - Gob. Manuel Crespo s/n"
                        }, {
                            lat: -31.7454664,
                            lon: -60.5454895,
                            nombre: "Heinitz Nicolas Agustin - Cuyas y Sampre 1748"
                        }, {
                            lat: -30.7436996,
                            lon: -57.9891876,
                            nombre: "Laner Bianca - Alvarez Condarco 2705"
                        }, {
                            lat: -31.7600363,
                            lon: -60.4838871,
                            nombre: "Marignac Emilce - Alberto Gerchunoff 944"
                        }, {
                            lat: -31.7791898,
                            lon: -60.4368828,
                            nombre: "Sigura Keinet Maria de los Milagros - Santa Fe 770"
                        }, {
                            lat: -30.7503652,
                            lon: -57.980573,
                            nombre: "Trevisan Ludmila Agustina - Estrada 2265"
                        }, {
                            lat: -33.1545641,
                            lon: -59.3158816,
                            nombre: "Velazco Romina Liliana - Santiago del Estero 227"
                        }, {
                            lat: -31.7377111,
                            lon: -60.548736,
                            nombre: "Medrano Judith Analiza Guadalupe - Los Talas 1098"
                        }, {
                            lat: -31.3820159,
                            lon: -58.0023955,
                            nombre: "Garaycoechea Mariana - Dr. Chabrillon 546"
                        }, {
                            lat: -31.8672294,
                            lon: -59.042547,
                            nombre: "Medina Lucila Antonella - Pedro Goyena 944"
                        }, {
                            lat: -31.983932,
                            lon: -58.961348,
                            nombre: "Cisnero Lucrecia Maria Agustina - Rocamora 391"
                        }, {
                            lat: -32.069505,
                            lon: -59.179935,
                            nombre: "Cardinali Nanci Beatriz - Zona Rural s/n, districto Altamirano Norte Durazno"
                        }, {
                            lat: -31.7555891,
                            lon: -60.5289351,
                            nombre: "Benitez Nerea Alejandra - El paracao 533"
                        }, {
                            lat: -31.790067,
                            lon: -60.506537,
                            nombre: "Sosa Maria Jose - Barrio Emp. de Com. M.9 C.11"
                        }, {
                            lat: -32.2978959,
                            lon: -59.147093,
                            nombre: "Narvaez Claudina - 9 de julio 568"
                        }, {
                            lat: -31.766302,
                            lon: -60.512248,
                            nombre: "Barzola Carla Beatriz - Barrio Pna. 12 C.26 M.2"
                        }, {
                            lat: -31.8708489,
                            lon: -59.0281781,
                            nombre: "Gelvez Camila Desiree - Hermelo 349"
                        }, {
                            lat: -31.7364658,
                            lon: -60.537651,
                            nombre: "Iglesias Marianela Noemi - SEBASTIAN VAZQUEZ 341"
                        }, {
                            lat: -31.8489734,
                            lon: -59.0215342,
                            nombre: "Carraud Florencia Camila Estefania - Chiesa 930"
                        }, {
                            lat: -31.854135,
                            lon: -59.027232,
                            nombre: "Romero Sol Maria de Lujan - BULEVAR CHURRUARIN 486"
                        }, {
                            lat: -31.1832014,
                            lon: -59.4082982,
                            nombre: "Gariboglio Nayla Lucia - COLONIA AVIGDOR CALLE S/Nº"
                        }, {
                            lat: -31.869609,
                            lon: -59.0186938,
                            nombre: "Fin Mariel Alicia - Paisandu 43"
                        }, {
                            lat: -31.746695,
                            lon: -60.5089208,
                            nombre: "David Maria Elena - Juan del Campillo 515"
                        }, {
                            lat: -32.491923,
                            lon: -58.2322998,
                            nombre: "Scelzi Griselda Elisabeth - Doctora Ratto 796"
                        }, {
                            lat: -31.8693497,
                            lon: -59.0385043,
                            nombre: "Giles Graciana Gabriela - Estrada s/n"
                        }, {
                            lat: -31.8615277,
                            lon: -59.0411659,
                            nombre: "Longhi Rosa Beatriz - Corrientes 831"
                        }, {
                            lat: -31.8624552,
                            lon: -59.0403905,
                            nombre: "Gonzalez Ana Paula - Cepeda 755"
                        }, {
                            lat: -31.8554611,
                            lon: -59.0222252,
                            nombre: "Luggren Norma Griselda - Alberti 1566"
                        }, {
                            lat: -31.7680203,
                            lon: -60.4854425,
                            nombre: "Fernández Maria Fernanda - Tibileti 2757"
                        }, {
                            lat: -31.7291724,
                            lon: -60.5367016,
                            nombre: "Sosa Carla Stefania - Santiago del estero 60"
                        }, {
                            lat: -31.7616558,
                            lon: -60.398619,
                            nombre: "Sosa Carla Stefania - San José 4226"
                        }, {
                            lat: -32.4973402,
                            lon: -58.2828789,
                            nombre: "Romero Gabriela Beatriz - Sampay 3047"
                        }, {
                            lat: -32.479854,
                            lon: -58.262266,
                            nombre: "Romero Gabriela Beatriz - Pablo Lorentz y Dr. Roberto Uncal"
                        }, {
                            lat: -32.1815906,
                            lon: -58.196128,
                            nombre: "Caceres Cristina Mabel - Velzi S/Nº"
                        }, {
                            lat: -32.2335224,
                            lon: -58.1541303,
                            nombre: "Caceres Cristina Mabel - Urquiza 1250"
                        }, {
                            lat: -32.2297531,
                            lon: -58.1589809,
                            nombre: "Caceres Cristina Mabel - Alberdi 1287"
                        }, {
                            lat: -32.6251852,
                            lon: -60.16201,
                            nombre: "Velazquez Elsa Josefina - Congreso 169"
                        }, {
                            lat: -32.6239665,
                            lon: -60.1547124,
                            nombre: "Velazquez Elsa Josefina - Maipu 178"
                        }, {
                            lat: -32.0397851,
                            lon: -60.3026188,
                            nombre: "Gorosito Ivana Agostina - Italia 137"
                        }, {
                            lat: -32.0360801,
                            lon: -60.3043725,
                            nombre: "Gorosito Ivana Agostina - Dr. Minguillon 1895"
                        }
                        // , {
                        //     lat: ,
                        //     nombre: ""
                        // }
                    ];

                    // Filtrar y graficar solo los puntos dentro del rango
                    misPuntos.forEach(punto => {
                        const posicionPunto = L.latLng([punto.lat, punto.lon]);
                        // const distancia = centroRango.distanceTo(posicionPunto); // Devuelve la distancia en metros
                        console.log(punto)
                        // if (distancia <= radioMaximoMetros) {
                        L.marker(posicionPunto)
                            .addTo(map)
                            .bindPopup(punto.nombre);
                        // }
                    });
                },
                (error) => {
                    // Manejo de errores comunes (Permiso denegado, GPS apagado, etc.)
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            alert("Debes permitir el acceso a la ubicación en tu celular.");
                            break;
                        case error.POSITION_UNAVAILABLE:
                            alert("La información de ubicación no está disponible. Activa tu GPS.");
                            break;
                        case error.TIMEOUT:
                            alert("Se agotó el tiempo de espera para obtener tu ubicación.");
                            break;
                    }
                },
                opciones
            );

        } else {
            alert("Tu navegador no soporta geolocalización.");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>