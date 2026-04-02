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

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");
    let started = false;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !started) {
                    counters.forEach((counter) => {
                        let target = +counter.getAttribute("data-target");
                        let duration = 2000; // 2 detik
                        let startTime = null;

                        function animate(time) {
                            if (!startTime) startTime = time;

                            let progress = time - startTime;
                            let percent = Math.min(progress / duration, 1);

                            // easing smooth (biar ga kaku)
                            let ease = 1 - Math.pow(1 - percent, 3);

                            counter.innerText = Math.floor(ease * target);

                            if (progress < duration) {
                                requestAnimationFrame(animate);
                            } else {
                                counter.innerText = target;
                            }
                        }

                        requestAnimationFrame(animate);
                    });

                    started = true;
                }
            });
        },
        {
            threshold: 0.4, // trigger saat 40% terlihat
        }
    );

    const section = document.querySelector(".counter");

    if (section) {
        observer.observe(section);
    }
});

// Home - Mitra Lab

function scrollSlider(amount) {
    document.getElementById("slider").scrollBy({
        left: amount,
        behavior: "smooth",
    });
}
setInterval(() => {
    scrollSlider(300);
}, 3000);
