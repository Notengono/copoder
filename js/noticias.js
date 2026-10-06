/*
 * noticias.js
 *
 * Ejemplo de paginación local.
 * Posteriormente los datos pueden venir de Slim Framework.
*/

let noticias = []

//     {
//         id: 1,
//         titulo: 'Jornada de actualización profesional',
//         fecha: '2026-09-15',
//         imagen: 'images/noticia-01.jpg',
//         resumen: 'Información sobre la próxima jornada del Colegio.'
//     },

//     {
//         id: 2,
//         titulo: 'Novedades para profesionales matriculados',
//         fecha: '2026-09-12',
//         imagen: 'images/noticia-02.jpg',
//         resumen: 'Comunicaciones y novedades institucionales.'
//     },

//     {
//         id: 3,
//         titulo: 'Actualización de documentación',
//         fecha: '2026-09-08',
//         imagen: 'images/noticia-03.jpg',
//         resumen: 'Documentación y trámites del Colegio.'
//     },

//     {
//         id: 4,
//         titulo: 'Nuevas propuestas de capacitación',
//         fecha: '2026-09-04',
//         imagen: 'images/noticia-04.jpg',
//         resumen: 'Conocé las actividades de formación continua.'
//     },

//     {
//         id: 5,
//         titulo: 'Información institucional importante',
//         fecha: '2026-09-01',
//         imagen: 'images/noticia-05.jpg',
//         resumen: 'Comunicados y novedades de interés.'
//     },

//     {
//         id: 6,
//         titulo: 'Actividades del Colegio',
//         fecha: '2026-08-28',
//         imagen: 'images/noticia-06.jpg',
//         resumen: 'Repaso de las últimas novedades institucionales.'
//     },

//     {
//         id: 7,
//         titulo: 'Reunión de autoridades',
//         fecha: '2026-08-25',
//         imagen: 'images/noticia-07.jpg',
//         resumen: 'Información de la reunión institucional.'
//     },

//     {
//         id: 8,
//         titulo: 'Nuevos convenios institucionales',
//         fecha: '2026-08-22',
//         imagen: 'images/noticia-08.jpg',
//         resumen: 'Conocé los nuevos convenios y beneficios.'
//     },

//     {
//         id: 9,
//         titulo: 'Comunicado a los matriculados',
//         fecha: '2026-08-19',
//         imagen: 'images/noticia-09.jpg',
//         resumen: 'Información de interés para profesionales.'
//     },

//     {
//         id: 10,
//         titulo: 'Actividades de formación continua',
//         fecha: '2026-08-15',
//         imagen: 'images/noticia-10.jpg',
//         resumen: 'Propuestas de formación para profesionales.'
//     },

//     {
//         id: 11,
//         titulo: 'Actualización de aranceles',
//         fecha: '2026-08-12',
//         imagen: 'images/noticia-11.jpg',
//         resumen: 'Información sobre aranceles profesionales.'
//     },

//     {
//         id: 12,
//         titulo: 'Información sobre matriculación',
//         fecha: '2026-08-08',
//         imagen: 'images/noticia-12.jpg',
//         resumen: 'Requisitos y procedimientos de matriculación.'
//     },

//     {
//         id: 13,
//         titulo: 'Nuevas disposiciones institucionales',
//         fecha: '2026-08-05',
//         imagen: 'images/noticia-13.jpg',
//         resumen: 'Disposiciones y novedades del Colegio.'
//     },

//     {
//         id: 14,
//         titulo: 'Agenda de actividades',
//         fecha: '2026-08-01',
//         imagen: 'images/noticia-14.jpg',
//         resumen: 'Próximas actividades institucionales.'
//     },

//     {
//         id: 15,
//         titulo: 'Reunión con profesionales',
//         fecha: '2026-07-28',
//         imagen: 'images/noticia-15.jpg',
//         resumen: 'Encuentro de profesionales matriculados.'
//     },

//     {
//         id: 16,
//         titulo: 'Novedades sobre legislación',
//         fecha: '2026-07-25',
//         imagen: 'images/noticia-16.jpg',
//         resumen: 'Información sobre legislación profesional.'
//     },

//     {
//         id: 17,
//         titulo: 'Actividades de capacitación',
//         fecha: '2026-07-20',
//         imagen: 'images/noticia-17.jpg',
//         resumen: 'Nuevas propuestas de capacitación.'
//     },

//     {
//         id: 18,
//         titulo: 'Comunicado institucional',
//         fecha: '2026-07-15',
//         imagen: 'images/noticia-18.jpg',
//         resumen: 'Información institucional del Colegio.'
//     }

// ];


const noticiasPorPagina = 6;
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
 * Mostrar noticias de la página actual
 */

function mostrarNoticias() {
    const contenedor = document.getElementById('contenedorNoticias');
    const sinNoticias = document.getElementById('sinNoticias');
    contenedor.innerHTML = '';
    const inicio = (paginaActual - 1) * noticiasPorPagina;
    const fin = inicio + noticiasPorPagina;
    console.log(this.noticias)
    const noticiasPagina = this.noticias.slice(inicio, fin);

    if (noticiasPagina.length === 0) {
        sinNoticias.classList.remove('d-none');
        return;
    }
    sinNoticias.classList.add('d-none');
    noticiasPagina.forEach(noticia => {
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
        document.getElementById('paginacionNoticias');

    paginacion.innerHTML = '';


    const totalPaginas =
        Math.ceil(noticias.length / noticiasPorPagina);


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
        const response = await fetch(`./api/public/ultimasnoticias`);
        if (!response.ok) {
            throw new Error(
                'No se pudo obtener la noticia'
            );
        }
        this.noticias = await response.json();
        mostrarNoticias();

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