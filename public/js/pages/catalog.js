

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
