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

    const heroSwiper = new Swiper('.heroswiper', {
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
            nextEl: '.heroswiper-button-next',
            prevEl: '.heroswiper-button-prev',
        },

        pagination: {
            el: '.heroswiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    if(heroSwiper && swiper){
        heroSwiper.controller.control = swiper;
        swiper.controller.control = heroSwiper;
    }

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


    // KnowledgeBase Search
    const search_input = document.querySelector('[data-behaviour="knowledgebase-search"]');
    if(search_input){
        const search_entries = document.querySelectorAll('[data-behaviour="knowledgebase-entry"]');
        search_input.addEventListener('keyup', (event) => {
            const search_term = event.target.value.toLowerCase();
            console.log("Searching for: " + search_term);
            search_entries.forEach((entry) => {
                const entry_title = entry.getAttribute('data-title').toLowerCase();
                const entry_description = entry.getAttribute('data-description').toLowerCase();
                if(entry_title.includes(search_term) || entry_description.includes(search_term)) {
                    entry.classList.remove('hidden');
                } else {
                    entry.classList.add('hidden');
                }
            });
        });
    }
});
