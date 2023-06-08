
const abrirbtn = document.getElementById('modal-tituladas');
const modal = document.getElementById('buscador');
const cerrarbtn = document.querySelector('.delete');


abrirbtn.addEventListener('click', function(){
    modal.style = `display:block;`
})

cerrarbtn.addEventListener('click', function(){
    modal.style = `display:none;`
})
