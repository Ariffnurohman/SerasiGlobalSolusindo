import "./bootstrap";

import { createIcons, icons } from "lucide";

import Swiper from "swiper";
import { Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

new Swiper(".heroSwiper", {
    slidesPerView: 1,
    loop: true,

    autoplay: {
        delay: 5000,
    },
    slidesPerView: 1,
    loop: true,

    speed: 1200,

    autoplay: {
        delay: 5000,
    },

    effect: "slide",
});

createIcons({ icons });

document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".serviceSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 4000,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });

    new Swiper(".clientSwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 5 },
        },
    });
});
