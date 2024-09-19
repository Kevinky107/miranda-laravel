let slider = new Swiper('.swiper2', {
    pagination: {
        el: '.swiper-pagination2',
        clickable: true
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                fill: 'row',
                rows: 2
            },
        },
    },
});
let slider1 = new Swiper('.swiper1', {
    pagination: {
        el: '.swiper-pagination1',
        clickable: true
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 20
        },
    },
});