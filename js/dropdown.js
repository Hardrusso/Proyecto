
const usuariosTitle = document.querySelector('.drop_title');
const usuariosList = document.querySelector('.drop_list');
const dropArrow = document.querySelector('.drop_arrow');

usuariosTitle.addEventListener('click', () => {
    if(usuariosTitle.style.backgroundColor != 'red'){
        usuariosTitle.style.backgroundColor = 'red';
    }else{
        usuariosTitle.style.backgroundColor = '#24272F';
    }
    usuariosList.classList.toggle('active');
    dropArrow.classList.toggle('drop_arrow--rotate');
});

//segundo dropdown

const productoTitle = document.querySelector('.drop_title_product');
const productoList = document.querySelector('.drop_list_product');
const dropArrow2 = document.querySelector('.drop_arrow2');

productoTitle.addEventListener('click', () => {
    if(productoTitle.style.backgroundColor != 'red'){
        productoTitle.style.backgroundColor = 'red';
    }else{
        productoTitle.style.backgroundColor = '#24272F';
    }
    productoList.classList.toggle('active2');
    dropArrow2.classList.toggle('drop_arrow--rotate2');
});


const ocultarBtn = document.getElementById("ocultar");
const containerNav = document.querySelector(".container_nav");
const containerDerecha = document.querySelector(".contenedor_derecha");

ocultarBtn.addEventListener("click", () => {
  containerNav.classList.toggle("container-hide");
  containerDerecha.classList.toggle("container-full");
});


// modal

document.addEventListener('DOMContentLoaded', () => {
    // Functions to open and close a modal
    function openModal($el) {
      $el.classList.add('is-active');
    }
  
    function closeModal($el) {
      $el.classList.remove('is-active');
    }
  
    function closeAllModals() {
      (document.querySelectorAll('.modal') || []).forEach(($modal) => {
        closeModal($modal);
      });
    }
  
    // Add a click event on buttons to open a specific modal
    (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
      const modal = $trigger.dataset.target;
      const $target = document.getElementById(modal);
  
      $trigger.addEventListener('click', () => {
        openModal($target);
      });
    });
  
    // Add a click event on various child elements to close the parent modal
    (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
      const $target = $close.closest('.modal');
  
      $close.addEventListener('click', () => {
        closeModal($target);
      });
    });
  
    // Add a keyboard event to close all modals
    document.addEventListener('keydown', (event) => {
      const e = event || window.event;
  
      if (e.keyCode === 27) { // Escape key
        closeAllModals();
      }
    });
  });