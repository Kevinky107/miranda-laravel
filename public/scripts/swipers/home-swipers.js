let swiper = new Swiper('.swiper1', {
    navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
    },
    breakpoints: {
        320: {
            slidesPerView: 1
        },
        1000: {
            slidesPerView: 3,
        },
    },
    centeredSlides: true,
    centeredSlidesBounds: true
    
});

let swiperFood = new Swiper('.swiper3', {
    navigation: {
        nextEl: '.swiper-button-next3',
        prevEl: '.swiper-button-prev3',
    }
});

let swiperFoodDesktop = new Swiper('.swiper5', {
    navigation: {
        nextEl: '.swiper-button-next5',
        prevEl: '.swiper-button-prev5',
    }
});

let slider = new Swiper('.swiper2', {
    pagination: {
        el: '.swiper-pagination2',
        clickable: true
    }
});

let sliderFood = new Swiper('.swiper4', {
    pagination: {
        el: '.swiper-pagination4',
        clickable: true
    }
});