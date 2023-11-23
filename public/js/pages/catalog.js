if (document.querySelector('.catalog__side')) {
    const priceSlider = document.getElementById('price-slider');

    const priceMinPriceInput = document.getElementById('min-price');
    const priceMaxPriceInput = document.getElementById('max-price');
    const priceInputs = [priceMinPriceInput, priceMaxPriceInput];

    noUiSlider.create(priceSlider, {
        start: [0, 3000],
        connect: true,
        range: {
            'min': 0,
            'max': 3000
        }
    })

    priceSlider.noUiSlider.on('update', function (values, handle) {

        const updatedPrices = updatePrices(values)

        priceInputs[handle].value = updatedPrices[handle];
    });

    function updatePrices(values) {
        const minPrice = Number(values[0]).toFixed(0).toString()
        const maxPrice = Number(values[1]).toFixed(0).toString()

        return [minPrice, maxPrice]
    }

    priceInputs.forEach(function(input, handle) {

        input.addEventListener('input', function () {
            priceSlider.noUiSlider.setHandle(handle, this.value);
        });

    })

    const filterOpenButton = document.querySelector('.sort-actions-catalog__filter')
    filterOpenButton.addEventListener('click', function(e) {
        document.querySelector('.side-catalog').classList.add('active')
        document.body.classList.add('lock')
    })

    const filterCloseButton = document.querySelector('.top-side-catalog__close')
    filterCloseButton.addEventListener('click', function(e) {
        document.querySelector('.side-catalog').classList.remove('active')
        document.body.classList.remove('lock')
    })
}

if (document.querySelector('.actions-catalog__view')) {
    const gridButton = document.querySelector('.view-catalog__item_grid')
    const listButton = document.querySelector('.view-catalog__item_list')
    const catalogPage = document.querySelector('.catalog')

    gridButton.addEventListener('click', function(e) {
        if (catalogPage.classList.contains('list')) {
            catalogPage.classList.remove('list')
        }
    })
    listButton.addEventListener('click', function(e) {
        if (!catalogPage.classList.contains('list')) {
            catalogPage.classList.add('list')
        }
    })
}

if (document.querySelector('.catalog__actions')) {
    const sortItem = document.querySelector('.sort-actions-catalog__item_list')

    sortItem.addEventListener('click', function() {
        const list = sortItem.parentElement.querySelector('.sort-actions-catalog__list')
        if (list.classList.contains('active')) {
            list.classList.remove('active')
            sortItem.classList.remove('active')
        } else {
            list.classList.add('active')
            sortItem.classList.add('active')
        }

    })
    window.addEventListener('click', function(e) {

        if (e.target.closest('.sort-actions-catalog__subitem')) {
            document.querySelector('.sort-actions-catalog__list.active').classList.remove('active')
            sortItem.classList.remove('active')
            return
        }

        if (e.target.closest('.sort-actions-catalog__item_list')) return

        if (document.querySelector('.sort-actions-catalog__list.active')) {
            document.querySelector('.sort-actions-catalog__list.active').classList.remove('active')
            sortItem.classList.remove('active')
            return
        }

    })
}
