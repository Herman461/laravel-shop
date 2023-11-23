

if (document.querySelector('.special-offer__body')) {

    const specialOfferSlider = new Swiper('.special-offer__body', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            991.98: {
                slidesPerView: 3,
            },
            767.98: {
                slidesPerView: 2.5
            },
            480.98: {
                slidesPerView: 1.5
            },

        }
    })
}


if (document.querySelector('.blog-page__body')) {

    const blogSlider = new Swiper('.blog-page__body', {
        slidesPerView: 1.1,
        spaceBetween: 20,
        breakpoints: {
            991.98: {
                slidesPerView: 3
            },
            767.98: {
                slidesPerView: 2.4,
            },
            480.98: {
                slidesPerView: 1.4
            },

        }
    })
}

