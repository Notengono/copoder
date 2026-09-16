document.addEventListener('DOMContentLoaded', () => {
    cargarNoticia();
});

async function cargarNoticia() {
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    if (!id) {
        mostrarError();
        return;
    }

    try {
        /*
        * En producción:
        * /api/noticias/1
        */
        const response = await fetch(`./api/public/noticias/${id}`);

        if (!response.ok) {
            throw new Error(
                'No se pudo obtener la noticia'
            );
        }
        const noticia = await response.json();
        mostrarNoticia(noticia);

    } catch (error) {
        console.error(error);
        mostrarError();
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
    const imagen = document.getElementById('noticiaImagen');
    imagen.src = noticia.imagen;
    imagen.alt = noticia.titulo;
    document.getElementById('noticiaResumen').textContent = noticia.resumen;
    /*
     * contenidoHTML proviene del backend.
     *
     * Acá puede contener:
     *
     * <p>...</p>
     * <h2>...</h2>
     * <ul>...</ul>
     * <img>
     */
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