document.addEventListener("DOMContentLoaded", function () {
    cargarExperiencia();
    cargarEstudios();
    cargarMenus();
    cargarRedesSociales();
});

function cargarExperiencia() {
    fetch('/PaginaHZ/controller/experiencia.php?op=listar')
        .then((response) => response.json())
        .then((experiencias) => {
            const contenedor = document.querySelector(".contenedor-experiencia");
            contenedor.innerHTML = experiencias.map(exp => `
                <div class="card-experiencia">
                    <h3>${exp.titulo}</h3>
                    <h4>${exp.empresa}</h4>
                    <p><strong>Desde:</strong> ${exp.fecha_inicio} - <strong>Hasta:</strong> ${exp.fecha_fin}</p>
                    <p>${exp.descripcion}</p>
                </div>
            `).join('');
        })
        .catch((error) => console.error("Error cargando la experiencia:", error));
}

function cargarEstudios() {
    fetch('/PaginaHZ/controller/estudios.php?op=listar')
        .then((response) => response.json())
        .then((estudios) => {
            console.log(estudios);
            
            const contenedor = document.querySelector(".contenedor-estudios");
            contenedor.innerHTML = estudios.map(estudio => `
                <div class="card-estudio">
                    <h3>${estudio.titulo}</h3>
                    <h4>${estudio.institucion}</h4>
                    <p><strong>Desde:</strong> ${estudio.fecha_inicio} - <strong>Hasta:</strong> ${estudio.fecha_fin}</p>
                    <p>${estudio.descripcion}</p>
                </div>
            `).join('');
        })
        .catch((error) => console.error("Error cargando los estudios:", error));
}

function cargarMenus() {
    fetch('/PaginaHZ/controller/menu.php?op=listar')
        .then((response) => response.json())
        .then((menus) => {
            const navbar = document.querySelector(".navbar");
            navbar.innerHTML = menus.map(menu => `<a href="${menu.url}">${menu.opcion}</a>`).join('');
        })
        .catch((error) => console.error("Error cargando los menús:", error));
}

function cargarRedesSociales() {
    fetch('/PaginaHZ/controller/social_media.php?op=listar')
        .then((response) => response.json())
        .then((redes) => {
            const icons = document.querySelector(".icons");
            icons.innerHTML = redes.map(red => 
                `<a href="${red.socmed_url}" target="_blank" class="bx ${red.socmed_icono}"></a>`
            ).join('');
        })
        .catch((error) => console.error("Error cargando redes sociales:", error));
}
