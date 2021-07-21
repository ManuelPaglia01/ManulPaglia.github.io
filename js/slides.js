var swiper = new Swiper('.swiper-container',{
    slidesperView: 'auto',
    centerSlides: true,
    grabCuros: true,
    loop: false,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});