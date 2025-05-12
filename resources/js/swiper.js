import Swiper from 'swiper'
import {Autoplay, Navigation, Pagination} from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';


document.addEventListener('DOMContentLoaded', function () {

    // document.getElementById('hero-swiper').classList.remove('hidden');
    // document.getElementById('product-slider').classList.remove('hidden');
    // document.getElementById('offer').classList.remove('hidden');


    new Swiper(".hero-swiper", {
        modules: [Pagination, Autoplay, Navigation],
        slidesPerView: 1,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        speed: 750,
        loop: true,
        pagination: {
            el: ".swiper-pagination",

            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    new Swiper(".cat-swiper", {
        modules: [Autoplay, Navigation],
        slidesPerView: 2,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        speed: 750,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            450: {
                slidesPerView: 2.5,
                spaceBetween: 15,
            },
            650: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            800: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            950: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1100: {
                slidesPerView: 5.5,
                spaceBetween: 20,
            },

        },

    });

    new Swiper(".banner-swiper", {
        modules: [Autoplay, Navigation],
        slidesPerView: 2,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        speed: 750,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1500: {
                slidesPerView: 3,
                spaceBetween: 20,
            },

        },

    });

    new Swiper(".product-gallery", {
        modules: [Pagination, Autoplay],
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 500,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    new Swiper(".product-slider", {
        modules: [Navigation, Autoplay],
        slidesPerView: 2,
        spaceBetween: 5,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 1000,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            425: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 15,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 20,
            },

        },
    });

})

