/*Script para agregar y eliminar la clase active en el nav*/
let navbar = document.querySelector('#navbarNav').querySelectorAll('a');

let lastitem = navbar[0];

navbar.forEach((item) => {
   item.addEventListener('click', function(){
     lastitem.classList.remove('active');
     lastitem = this;
     this.classList.add('active');
   });
});
