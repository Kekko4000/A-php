// // Trova il contenitore e leggi la configurazione
// const swiperContainer = document.getElementById("inEvidenzia");
// if (swiperContainer) {
//     const config = JSON.parse(swiperContainer.dataset.swiperConfig);
//     const swiper = new Swiper(".inEvidenzia", {
//         slidesPerView: 1,
//         spaceBetween: 30,
//         pagination: {
//             el: ".swiper-pagination",
//             clickable: true,
//         },
//         navigation: {
//             nextEl: ".swiper-button-next",
//             prevEl: ".swiper-button-prev",
//         },
//         breakpoints: config.breakpoints,
//     });
// } else {
//     console.error("Swiper container not found!");
// }


document.addEventListener("DOMContentLoaded", () => {
    const swiperContainers = document.querySelectorAll(".swiper-container");
    
    swiperContainers.forEach((container) => {
        let swiperChild = container.firstElementChild;
        if (swiperChild && swiperChild.id) {
            const swiperContainer = document.getElementById(swiperChild.id);
            if (swiperContainer) {
                const config = JSON.parse(swiperContainer.dataset.swiperConfig);
                const swiper = new Swiper(`#${swiperChild.id}`, {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: config.breakpoints, 
                });
            } else {
                console.error("Swiper container non trovato!");
            }
        } else {
            console.error("Il primo figlio non ha un ID!");
        }
    });
});


