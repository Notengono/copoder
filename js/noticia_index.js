document.addEventListener('DOMContentLoaded', () => {
    cargarNoticia();
});

async function cargarNoticia() {
    try {
        /*
        * En producción: /api/ultimasnoticias
        */
        const response = await fetch(`./api/public/ultimasnoticias`);
        if (!response.ok) {
            throw new Error(
                'No se pudo obtener la noticia'
            );
        }
        const noticia = await response.json();
        mostrarNoticias(noticia);
        // mostrarNoticia(noticia);

    } catch (error) {
        // console.error(error);
        // mostrarError();
    }
}

function mostrarNoticia(noticia) {

    document.getElementById(
        'noticiaTitulo'
    ).textContent = noticia.titulo;

    document.getElementById(
        'noticiaFecha'
    ).innerHTML = `
       <i class="bi bi-calendar3"></i>
       ${formatearFecha(noticia.fecha)}
   `;
    const imagen = document.getElementById('id="noti_img_0"');
    imagen.src = noticia[0].imagen;
    imagen.alt = noticia[0].titulo;
    document.getElementById('noticiaResumen').textContent = noticia.resumen;

    document.getElementById('noticiaContenido').innerHTML = noticia.contenido;
    /*
     * Actualizar título del navegador
     */
    document.title = noticia.titulo + ' | Colegio de Podólogos de Entre Ríos';
    /*
     * Compartir
     */
    configurarCompartir();
}

function formatearFecha(fecha) {
    return new Date(fecha + 'T12:00:00')
        .toLocaleDateString(
            'es-AR',
            {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            }
        );
}

function mostrarNoticias(noticias) {
    console.log(noticias)
    const contenedor = document.getElementById('contenedorNoticias');
    contenedor.innerHTML = '';

    noticias.forEach(noticia => {
        const columna = document.createElement('div');
        columna.innerHTML = `
            <article class="news-card">
                <div class="news-image">
                    <img src="${noticia.imagen}" alt="${noticia.titulo}">
                </div>

                <div class="news-content">
                    <div class="news-date">
                        <i class="bi bi-calendar3"></i>
                        ${formatearFecha(noticia.fecha)}
                    </div>
                    <h4>${noticia.titulo}</h4>
                    <p>${noticia.resumen}</p>
                    <a href="noticia.php?id=${noticia.id}" class="read-more">
                        Leer más <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </article>
        `;
        contenedor.appendChild(columna);
    });
}
