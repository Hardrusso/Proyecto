// Obtener el campo de entrada de texto y el contenedor de resultados
var campoBusqueda = $("#buscar_articulos");
var contenedorResultados = $("#resultado-articulos");

// Escuchar el evento "input" para realizar la búsqueda en tiempo real
campoBusqueda.on("input", function() {
// Obtener el texto de búsqueda y escapar caracteres especiales
var busqueda = campoBusqueda.val().replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");

// Verificar si el campo de búsqueda está vacío
if (busqueda.trim() === "") {
    // Mostrar todos los resultados de la consulta
    contenedorResultados.empty(); // Limpiar el contenedor de resultados o mostrar un mensaje de "sin resultados"
    return;
}

// Enviar la solicitud de búsqueda mediante AJAX
$.ajax({
    url: "php/modal_articulos.php",
    method: "POST",
    data: { busqueda: busqueda },
    success: function(response) {
    // Mostrar los resultados de la búsqueda en el contenedor
    contenedorResultados.html(response);
    console.log(response)
    }
});
});

$(document).ready(function() {
    $('#guardar').click(function() {
    var primerCheckboxSeleccionado = $('input[type="checkbox"]:checked').first().val();
    $('#InputArticulos').val(primerCheckboxSeleccionado); // Mostrar el primer valor seleccionado en el input

    $('input[name="id_articulo"]').val(primerCheckboxSeleccionado);
    $('#miFormulario').submit();
    $('#modal_titu').removeClass('is-active'); // Cierra el modal
    });
});


