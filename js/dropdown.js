
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