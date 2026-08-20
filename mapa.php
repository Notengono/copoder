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
                            nombre: "Podología Paraná"
                        },
                        {
                            lat: -31.729439,
                            lon: -60.520709,
                            nombre: "Campos Eduardo Humberto"
                        },
                        {
                            lat: -31.72791619607696,
                            lon: -60.536446273326874,
                            nombre: "Ladron De Guevara Silvia M."
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
                        }
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