/*
 * comunicados.js
 *
 * Ejemplo de paginación local.
 * Posteriormente los datos pueden venir de Slim Framework.
*/

let comunicados = [];


const comunicadosPorPagina = 6;
let paginaActual = 1;
/*
 * Formatear fecha en castellano
 */
function formatearFecha(fecha) {
    return new Date(fecha + 'T12:00:00')
        .toLocaleDateString('es-AR', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
}

/*
 * Mostrar comunicados de la página actual
 */

function mostrarComunicados() {
    const contenedor = document.getElementById('contenedorComunicados');
    const sinComunicados = document.getElementById('sinComunicados');
    contenedor.innerHTML = '';
    const inicio = (paginaActual - 1) * comunicadosPorPagina;
    const fin = inicio + comunicadosPorPagina;
    console.log(this.comunicados)
    const comunicadosPagina = this.comunicados.slice(inicio, fin);

    if (comunicadosPagina.length === 0) {
        sinComunicados.classList.remove('d-none');
        return;
    }
    sinComunicados.classList.add('d-none');
    comunicadosPagina.forEach(noticia => {
        const columna = document.createElement('div');
        columna.className = 'col-md-6 col-lg-4';


        columna.innerHTML = `
            <article class="news-grid-card h-100">
                <img
                    src="${noticia.imagen}"
                    alt="${noticia.titulo}"
                    class="news-grid-image">

                <div class="news-grid-content">
                    <div class="news-date">
                        <i class="bi bi-calendar3"></i>
                        ${formatearFecha(noticia.fecha)}
                    </div>
                    <h2 class="news-grid-title">
                        ${noticia.titulo}
                    </h2>
                    <p>
                        ${noticia.resumen}
                    </p>
                    <a href="noticia.php?id=${noticia.id}" class="read-more">
                        Leer más
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </article>
        `;
        contenedor.appendChild(columna);
    });

}


/*
 * Crear paginación
 */

function crearPaginacion() {

    const paginacion =
        document.getElementById('paginacionComunicados');

    paginacion.innerHTML = '';


    const totalPaginas =
        Math.ceil(comunicados.length / comunicadosPorPagina);


    if (totalPaginas <= 1) {

        return;

    }


    // Botón anterior

    const liAnterior =
        document.createElement('li');

    liAnterior.className =
        `page-item ${paginaActual === 1 ? 'disabled' : ''}`;

    liAnterior.innerHTML = `

        <button
            class="page-link"
            aria-label="Página anterior"
            ${paginaActual === 1 ? 'disabled' : ''}>

            <i class="bi bi-chevron-left"></i>

        </button>

    `;


    liAnterior.querySelector('button')
        .addEventListener('click', () => {

            if (paginaActual > 1) {

                paginaActual--;

                actualizarPagina();

            }

        });


    paginacion.appendChild(liAnterior);


    // Botones de páginas

    for (let pagina = 1; pagina <= totalPaginas; pagina++) {

        const li =
            document.createElement('li');

        li.className =
            `page-item ${pagina === paginaActual ? 'active' : ''}`;


        li.innerHTML = `

            <button
                class="page-link"
                aria-label="Ir a la página ${pagina}">

                ${pagina}

            </button>

        `;


        li.querySelector('button')
            .addEventListener('click', () => {

                paginaActual = pagina;

                actualizarPagina();

            });


        paginacion.appendChild(li);

    }


    // Botón siguiente

    const liSiguiente =
        document.createElement('li');

    liSiguiente.className =
        `page-item ${paginaActual === totalPaginas ? 'disabled' : ''
        }`;


    liSiguiente.innerHTML = `

        <button
            class="page-link"
            aria-label="Página siguiente"
            ${paginaActual === totalPaginas
            ? 'disabled'
            : ''
        }>

            <i class="bi bi-chevron-right"></i>

        </button>

    `;


    liSiguiente.querySelector('button')
        .addEventListener('click', () => {

            if (paginaActual < totalPaginas) {

                paginaActual++;

                actualizarPagina();

            }

        });


    paginacion.appendChild(liSiguiente);

}

/*
 * Actualizar listado y paginación
 */

async function actualizarPagina() {
    try {
        const response = await fetch(`../api/public/ultimoscomunicados`);
        if (!response.ok) {
            throw new Error(
                'No se pudo obtener la noticia'
            );
        }
        this.comunicados = await response.json();
        mostrarComunicados();

        crearPaginacion();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    } catch (error) {
        console.error(error);
        // mostrarError();
    }


}


/*
 * Inicializar
 */

document.addEventListener('DOMContentLoaded', () => {

    actualizarPagina();

});