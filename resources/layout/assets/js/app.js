// function lockBody() {
//     const scrollWidth = window.innerWidth - document.body.clientWidth
//
//     document.body.classList.toggle('lock')
//
//     document.body.style.paddingRight = scrollWidth + 'px'
// }
// document.addEventListener('DOMContentLoaded', function() {
//     const slider = new Swiper('.products-slider__body', {
//         slidesPerView: 4,
//
//     })
// })

const burger = document.querySelector('.main-header__burger')
const menu = document.querySelector('.menu')
if (burger) {
    burger.addEventListener('click', function(e) {
        burger.classList.toggle('active')
        menu.classList.toggle('active')
        document.body.classList.toggle('lock')
    })
}
if (document.querySelector('.banners-intro-block__body')) {
    const bannersSlider = new Swiper('.banners-intro-block__body', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        speed: 800,
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            991.98: {
                slidesPerView: 1,
            },
            767.98: {
                slidesPerView: 1.3,
            }
        },
        pagination: {
            el: '.banners-intro-block__dots',
            clickable: true
        }
    })
}

if (document.querySelector('.products-intro-block__body')) {
    const productsSlider = new Swiper('.products-intro-block__body', {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 800,
        loop: true,
        pagination: {
            el: '.products-intro-block__dots',
            clickable: true
        }
    })
}

const productSliders = document.querySelectorAll('.products-slider__body')
const initializedProductSliders = []

if (productSliders.length > 0) {

    for (let index = 0; index < productSliders.length; index++) {

        const element = productSliders[index]

        if (element.classList.contains('products-slider__body_catalog')) {
            const slider = new Swiper(element, {
                slidesPerView: 1.1,
                spaceBetween: 20,
                breakpoints: {
                    991.98: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    767.98: {
                        slidesPerView: 3.2
                    },

                    560.98: {
                        slidesPerView: 2.3,
                        spaceBetween: 7,
                    },

                },
            })


            initializedProductSliders.push(slider)


            continue;
        }
        let options = {}

        if (element.parentElement.querySelector('.products-slider__actions')) {

            options = {
                ...options,
                navigation: {
                    prevEl: element.parentElement.querySelector('.products-slider__button-prev'),
                    nextEl: element.parentElement.querySelector('.products-slider__button-next'),
                }
            }
        } else {
            element.classList.add('static')
        }

        const slider = new Swiper(element, {
            slidesPerView: 1.05,
            spaceBetween: 20,
            breakpoints: {
                991.98: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },

                560.98: {
                    slidesPerView: 2.1,
                    spaceBetween: 7,
                },
                400.98: {
                    slidesPerView: 1.5
                }
            },
            ...options
        })

        initializedProductSliders.push(slider)
    }
}

// Выбор количества товара
document.addEventListener('DOMContentLoaded', function() {
    const quantityButtons = document.querySelectorAll(".quantity__button");

    if (quantityButtons.length > 0) {
        for (let index = 0; index < quantityButtons.length; index++) {
            const quantityButton = quantityButtons[index];
            quantityButton.addEventListener("click", function(e) {
                let value = parseInt(quantityButton.closest('.quantity').querySelector('input').value);
                if (!value) {
                    value = 1
                    quantityButton.closest('.quantity').querySelector('input').value = value;
                    return
                }
                if (quantityButton.classList.contains('quantity__button_plus')) {
                    value++;
                } else {
                    value = value - 1;
                    if (value < 1) {
                        value = 1;
                    }
                }
                quantityButton.closest('.quantity').querySelector('input').value = value;
            });
        }
    }
})
