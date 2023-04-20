// Seleccionar el elementos HTML con la clase 'drop_title' y almacenarlo en una variable
const usuariosTitle = document.querySelector('.drop_title');
const usuariosList = document.querySelector('.drop_list');
const dropArrow = document.querySelector('.drop_arrow');

// Agregar un 'escucha de eventos' al elemento 'usuariosTitle' que escucha por clics
usuariosTitle.addEventListener('click', () => {

  // Si el color de fondo actual del elemento 'usuariosTitle' no es 'rojo'
  if(usuariosTitle.style.backgroundColor != 'red'){
    // Establecer el color de fondo del elemento 'usuariosTitle' como 'rojo'
    usuariosTitle.style.backgroundColor = 'red';
  }else{
    // Establecer el color de fondo del elemento 'usuariosTitle' como '#24272F'
    usuariosTitle.style.backgroundColor = '#24272F';
  }

  // Alternar la clase 'active' en el elemento 'usuariosList'
  usuariosList.classList.toggle('active');

  // Alternar la clase 'drop_arrow--rotate' en el elemento 'dropArrow'
  dropArrow.classList.toggle('drop_arrow--rotate');
});

//segundo dropdown

// Seleccionar el elemento HTML con la clase 'drop_title_product' y almacenarlo en una variable
const productoTitle = document.querySelector('.drop_title_product');
const productoList = document.querySelector('.drop_list_product');
const dropArrow2 = document.querySelector('.drop_arrow2');

productoTitle.addEventListener('click', () => {

  // Si el color de fondo actual del elemento 'productoTitle' no es 'rojo'
  if(productoTitle.style.backgroundColor != 'red'){
    // Establecer el color de fondo del elemento 'productoTitle' como 'rojo'
    productoTitle.style.backgroundColor = 'red';
  }else{
    // Establecer el color de fondo del elemento 'productoTitle' como '#24272F'
    productoTitle.style.backgroundColor = '#24272F';
  }

  // Alternar la clase 'active2' en el elemento 'productoList'
  productoList.classList.toggle('active2');

  // Alternar la clase 'drop_arrow--rotate2' en el elemento 'dropArrow2'
  dropArrow2.classList.toggle('drop_arrow--rotate2');
});


//funcion para ocultar el menu lateral

// Seleccionar el elemento HTML con el id 'ocultar' y almacenarlo en una variable
const ocultarBtn = document.getElementById("ocultar");
const containerNav = document.querySelector(".container_nav");
const containerDerecha = document.querySelector(".contenedor_derecha");

// Agregar un 'escucha de eventos' al elemento 'ocultarBtn' que escucha por clics
ocultarBtn.addEventListener("click", () => {

  // Alternar la clase 'container-hide' en el elemento 'containerNav'
  containerNav.classList.toggle("container-hide");

  // Alternar la clase 'container-full' en el elemento '
  containerDerecha.classList.toggle("container-full");
});

// modal para el formulario de actualizacion de la  pagina empresa

  // Espera a que se cargue el contenido de la página
document.addEventListener('DOMContentLoaded', () => {
  // Define una función que abre un modal
  function openModal($el) {
  $el.classList.add('is-active');
  }
  
  // Define una función que cierra un modal
  function closeModal($el) {
  $el.classList.remove('is-active');
  }
  
  // Define una función que cierra todos los modals
  function closeAllModals() {
  // Obtiene todos los elementos con la clase 'modal' y los cierra
  (document.querySelectorAll('.modal') || []).forEach(($modal) => {
  closeModal($modal);
  });
  }
  
  // Escucha el evento click en todos los elementos con la clase 'js-modal-trigger'
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
  // Obtiene el modal al que se refiere el atributo 'data-target' del elemento clickeado
  const modal = $trigger.dataset.target;
  const $target = document.getElementById(modal);
  // Abre el modal al que se refiere el elemento clickeado
$trigger.addEventListener('click', () => {
  openModal($target);
});
});

// Escucha el evento click en los elementos que cierran los modals
(document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
// Obtiene el modal que contiene el botón clickeado
const $target = $close.closest('.modal');
// Cierra el modal que contiene el botón clickeado
$close.addEventListener('click', () => {
  closeModal($target);
});
});

// Agrega un evento de teclado para cerrar todos los modals cuando se presiona la tecla 'Escape'
document.addEventListener('keydown', (event) => {
const e = event || window.event;
if (e.keyCode === 27) { // La tecla 'Escape' cierra todos los modals
  closeAllModals();
}
});
});