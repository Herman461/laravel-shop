
const subSlider = new Swiper('.gallery-product__subslider', {
    slidesPerView: 1,
    spaceBetween: 20,

})

const mainSlider = new Swiper('.gallery-product__mainslider', {
    slidesPerView: 1,
    spaceBetween: 20,
    thumbs: {
        swiper: subSlider
    },
    pagination: {
        el: '.product__dots',
        clickable: true
    }
    // breakpoints: {
    //     991.98: {
    //         slidesPerView: 3
    //     },
    //     767.98: {
    //         slidesPerView: 2.4,
    //     },
    //     480.98: {
    //         slidesPerView: 1.4
    //     },
    //
    // }
})



// Табы
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll("[data-tab-title]");
    const tabContent = document.querySelectorAll("[data-tab-content]");


    if (tabContent.length > 0)  {
        tabLinks.forEach(function(el) {
            el.addEventListener("click", openTabs);
        });

    }

    function openTabs(el) {
        el.preventDefault()
        const btnTarget = el.currentTarget;
        const title = btnTarget.dataset.tabTitle;
        const category = btnTarget.dataset.tabCategory

        const tabContent = document.querySelectorAll(`[data-tab-content][data-tab-category="${category}"]`);
        const tabLinks = document.querySelectorAll(`[data-tab-title][data-tab-category="${category}"]`);

        tabContent.forEach(function(el) {
            el.classList.remove("active");
        });

        tabLinks.forEach(function(el) {
            el.classList.remove("active");
        });

        const activeContent = document.querySelectorAll(`[data-tab-content="${title}"][data-tab-category="${category}"]`)
        activeContent.forEach(function(el) {
            el.classList.add('active')
        })
        document.querySelector(`[data-tab-content="${title}"]`).classList.add("active");

        btnTarget.classList.add("active");

    }
})
