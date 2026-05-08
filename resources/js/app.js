import "./bootstrap";

import { createIcons, icons } from "lucide";

import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
} from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

createIcons({ icons });

document.addEventListener("DOMContentLoaded", () => {

    // HERO SWIPER
    new Swiper(".heroSwiper", {

        modules: [Navigation, Pagination, Autoplay],

        slidesPerView: 1,
        loop: true,
        speed: 1200,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

    });



    // SERVICE SWIPER
    new Swiper(".serviceSwiper", {

        modules: [Navigation, Pagination, Autoplay],

        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".service-next",
            prevEl: ".service-prev",
        },

        pagination: {
            el: ".service-pagination",
            clickable: true,
        },

        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },

    });



    // CLIENT SWIPER
    new Swiper(".clientSwiper", {

        modules: [Autoplay],

        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },

        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 5 },
        },

    });



    // PARTNER SWIPER
    new Swiper(".partnerSwiper", {

        modules: [Navigation, Autoplay],

        loop: true,
        spaceBetween: 25,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".partner-next",
            prevEl: ".partner-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
            },

            1024: {
                slidesPerView: 3,
            },
        },

    });

});