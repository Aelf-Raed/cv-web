import './myjs.js';
import AOS from 'aos';
import bootstrap from 'bootstrap';
import SmoothScroll from 'smooth-scroll';

/*Inicializador AOS*/
AOS.init({
    duration: 1000,
});

/*Inicializador SmoothScroll*/
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
});
