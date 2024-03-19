import Swiper from 'swiper/bundle';
import { Autoplay, EffectFade, Navigation, Pagination } from 'swiper/modules';
import GLightbox from "glightbox";

document.addEventListener("DOMContentLoaded", function (event) {

    // INIT MENUBUTTON
    const menu_button = document.querySelector('[data-behaviour="toggle-menu"]');
    menu_button.addEventListener('click', () => {
        document.body.classList.toggle('body--show');
    })

    // INIT LIGHTBOX
    const lightbox = GLightbox({
        selector: '[data-gallery="gallery"]',
        touchNavigation: true,
        loop: true,
    });

    // INIT SWIPER
    const swiper = new Swiper('.swiper', {
        // configure Swiper to use modules
        modules: [Pagination, Navigation, Autoplay, EffectFade],
        effect: 'slide',
        fadeEffect: {
            crossFade: true
        },
        direction: 'horizontal',
        loop: true,

        autoplay: false,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    //Fixed Menu
    window.addEventListener('scroll', () => {
        if (document.documentElement.scrollTop > 59 || document.body.scrollTop > 59){
            document.body.classList.add('menu--fixed');
        } else {
            document.body.classList.remove('menu--fixed');
        }
    });

    // INIT Eventlist Collapsibles
    const eventlist_collapsibles = document.querySelectorAll('[data-behaviour="eventlist_collapsible"]');
    eventlist_collapsibles.forEach((collapsible) => {
        collapsible.addEventListener('click', () => {
            collapsible.classList.toggle('eventlist__item--active');
        });
    });
});
