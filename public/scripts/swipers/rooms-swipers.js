let slider = new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                fill: 'column',
                rows: 1
            },
        },
    },
});