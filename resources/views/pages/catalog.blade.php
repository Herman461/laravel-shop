<x-head title="Каталог" css-file="catalog"/>
<main class="page">
    <div class="page__container container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li>
                    <a href="" class="breadcrumbs__link">Главная</a>
                </li>
                <li>
                    <a href="" class="breadcrumbs__link">Отопление</a>
                </li>
                <li>
                    <span class="breadcrumbs__item">Инфракрасные обогреватели</span>
                </li>
            </ul>
        </div>
        <div class="catalog section">
            <aside data-spoilers="" class="catalog__side side-catalog">
                <div class="side-catalog__top top-side-catalog">
                    <div class="top-side-catalog__title">Фильтр</div>
                    <div class="top-side-catalog__close">
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#close-bold"></use>
                        </svg>
                    </div>
                </div>
                <form action="#" class="side-catalog__form">
                    <div class="side-catalog__item item-side-catalog">
                        <div data-spoiler="" class="item-side-catalog__button active">
                            <span>Подбор по параметрам</span>
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                            </svg>
                        </div>
                        <div class="item-side-catalog__content">
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">400 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">600 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">800 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">1000 вт</span>
                            </label>
                        </div>
                    </div>
                    <div class="side-catalog__item item-side-catalog">
                        <div data-spoiler="" class="item-side-catalog__button active">
                            <span>Цена, Р</span>
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                            </svg>
                        </div>
                        <div class="item-side-catalog__content">
                            <div class="item-side-catalog__price price-side-catalog">
                                <div id="price-slider" class="price-side-catalog__slider"></div>
                                <div class="price-side-catalog__row">
                                    <div class="price-side-catalog__column">
                                        <div class="price-side-catalog__input">
                                            <label class="price-side-catalog__label" for="min-price">от</label>
                                            <input value="199" id="min-price" type="number" class="input">
                                        </div>
                                    </div>
                                    <div class="price-side-catalog__column">
                                        <div class="price-side-catalog__input">
                                            <label class="price-side-catalog__label" for="max-price">до</label>
                                            <input value="1599" id="max-price" type="number" class="input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-catalog__actions">
                        <div class="item-side-catalog__action action-side-catalog">
                            <div class="action-side-catalog__icon">
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#warn"></use>
                                </svg>
                            </div>
                            <div class="action-side-catalog__label">Товары по акции</div>
                            <label class="action-side-catalog__switch switch">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="item-side-catalog__action action-side-catalog">
                            <div class="action-side-catalog__icon">
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#warn"></use>
                                </svg>
                            </div>
                            <div class="action-side-catalog__label">Бесплатная доставка</div>
                            <label class="action-side-catalog__switch switch">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="item-side-catalog__action action-side-catalog">
                            <div class="action-side-catalog__icon">
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#warn"></use>
                                </svg>
                            </div>
                            <div class="action-side-catalog__label">Подарок при заказе</div>
                            <label class="action-side-catalog__switch switch">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="side-catalog__item item-side-catalog">
                        <div data-spoiler="" class="item-side-catalog__button">
                            <span>Номинальная мощность</span>
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                            </svg>
                        </div>
                        <div class="item-side-catalog__content">
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">400 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">600 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">800 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">1000 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">1350 вт</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">1500 вт</span>
                            </label>
                        </div>
                    </div>
                    <div class="side-catalog__item item-side-catalog">
                        <div data-spoiler="" class="item-side-catalog__button">
                            <span>Отапливаемая площадь (осн)</span>
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                            </svg>
                        </div>
                        <div class="item-side-catalog__content">
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">4 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">6 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">8 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">10 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">13 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">15 м2</span>
                            </label>
                        </div>
                    </div>
                    <div class="side-catalog__item item-side-catalog">
                        <div data-spoiler="" class="item-side-catalog__button">
                            <span>Отапливаемая площадь (доп)</span>
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                            </svg>
                        </div>
                        <div class="item-side-catalog__content">
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">4 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">6 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">8 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">10 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">13 м2</span>
                            </label>
                            <label class="item-side-catalog__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox">
                                <span class="checkbox__text">15 м2</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="side-catalog__submit button button_big">Применить</button>
                    <button type="reset" class="side-catalog__reset button button_big button_stroke">Сбросить все
                    </button>
                </form>
            </aside>
            <div class="catalog__content">
                <div class="catalog__actions actions-catalog">
                    <div class="actions-catalog__top">
                        <h1 class="actions-catalog__title title">Инфракрасные обогреватели</h1>
                        <div class="actions-catalog__count">159 товаров</div>
                        <div class="actions-catalog__view view-catalog">
                            <label class="view-catalog__item view-catalog__item_grid">
                                <input checked name="view" type="radio">
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#grid"></use>
                                </svg>
                            </label>
                            <label class="view-catalog__item view-catalog__item_list">
                                <input name="view" type="radio">
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#list"></use>
                                </svg>
                            </label>
                        </div>
                    </div>
                    <form action="#" class="actions-catalog__sort sort-actions-catalog">
                        <div class="sort-actions-catalog__filter">
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#filter"></use>
                            </svg>
                            <span>2</span>
                        </div>
                        <div class="sort-actions-catalog__label">Сортировать по:</div>
                        <div class="sort-actions-catalog__categories">
                            <label class="sort-actions-catalog__item">
                                <input checked name="sort" type="radio">
                                <span>по популярности</span>
                            </label>
                            <label class="sort-actions-catalog__item">
                                <input name="sort" type="radio">
                                <span>по рейтингу</span>
                            </label>
                            <label class="sort-actions-catalog__item">
                                <input name="sort" type="radio">
                                <span>по отзывам</span>
                            </label>
                            <div class="sort-actions-catalog__item sort-actions-catalog__item_list">
                                <span>по цене</span>
                                <svg>
                                    <use xlink:href="assets/images/icons/icons.svg#angle-down"></use>
                                </svg>
                                <ul class="sort-actions-catalog__list">
                                    <li>
                                        <label class="sort-actions-catalog__subitem">
                                            <input name="sort" type="radio">
                                            <span>по возрастанию</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="sort-actions-catalog__subitem">
                                            <input name="sort" type="radio">
                                            <span>по убыванию</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <label class="sort-actions-catalog__item sort-actions-catalog__item_price">
                                <input name="sort" type="radio">
                                <span>по цене</span>
                            </label>
                        </div>

                    </form>
                </div>
                <div class="page__products-slider products-slider">
                    <div class="products-slider__body products-slider__body_catalog swiper">
                        @foreach($products as $product)
                            <div class="products-slider__slide">
                                <article class="item-product">

                                    <div class="item-product__actions">
                                        <div class="item-product__favorite">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                            </svg>
                                        </div>
                                        <div class="item-product__compare">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="product/{{$product->slug}}" class="item-product__image">
                                        <img loading="lazy" src="{{$product->imageUrl}}" alt="">
                                    </a>
                                    <div class="item-product__content">
                                        <div class="item-product__labels">
                                            <div class="item-product__label item-product__label_red">Акция</div>
                                            <div class="item-product__label">Хит</div>
                                        </div>
                                        <div class="item-product__pin">Артикул: {{$product->sku}}</div>
                                        <div class="item-product__reviews reviews-item-product">
                                            <div class="reviews-item-product__stars">
                                                <div class="reviews-item-product__star">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{asset('storage/images/icons/icons.svg#star')}}"></use>
                                                    </svg>
                                                </div>
                                                <div class="reviews-item-product__star">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{asset('storage/images/icons/icons.svg#star')}}"></use>
                                                    </svg>
                                                </div>
                                                <div class="reviews-item-product__star">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{asset('storage/images/icons/icons.svg#star')}}"></use>
                                                    </svg>
                                                </div>
                                                <div
                                                    class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{asset('storage/images/icons/icons.svg#unfilled')}}"></use>
                                                    </svg>
                                                </div>
                                                <div
                                                    class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{asset('storage/images/icons/icons.svg#unfilled')}}"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="reviews-item-product__count">159 отзывов</div>
                                        </div>
                                        <a href="catalog/{{$product->slug}}"
                                           class="item-product__title">{{$product->title}}</a>

                                        <div class="item-product__bottom">
                                            <div class="item-product__price">1 666р.</div>
                                            <a href="catalog/{{$product->slug}}"
                                               class="item-product__button button button_stroke">В корзину</a>
                                        </div>
                                    </div>

                                </article>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="page__products-slider products-slider">
            <div class="products-slider__top top-slider">
                <h2 class="top-slider__title title">Вы смотрели</h2>
                <a href="" class="top-slider__more">
                    Показать все
                    <svg>
                        <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div class="products-slider__wrapper">
                <div class="products-slider__body swiper">
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="products-slider__slide">
                        <article class="item-product">

                            <div class="item-product__actions">
                                <div class="item-product__favorite">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#favorite"></use>
                                    </svg>
                                </div>
                                <div class="item-product__compare">
                                    <svg>
                                        <use xlink:href="assets/images/icons/icons.svg#compare"></use>
                                    </svg>
                                </div>
                            </div>
                            <a href="" class="item-product__image">
                                <img loading="lazy" src="assets/images/products/01.png" alt="">
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__labels">
                                    <div class="item-product__label item-product__label_red">Акция</div>
                                    <div class="item-product__label">Хит</div>
                                </div>
                                <div class="item-product__pin">Артикул: 0794</div>
                                <div class="item-product__reviews reviews-item-product">
                                    <div class="reviews-item-product__stars">
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div
                                            class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4
                                    м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в
                                    жилых
                                    и промышленных помещения.
                                </div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                </div>
                <div class="products-slider__actions">
                    <div class="products-slider__button-prev stroke">
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#angle-right"></use>
                        </svg>
                    </div>
                    <div class="products-slider__button-next stroke">
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#angle-right"></use>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>
<div class="footer">
    <div class="footer__top top-footer">
        <div class="top-footer__container container">
            <div class="top-footer__main main-footer">
                <a href="" class="main-footer__logo">
                    <img src="assets/images/logo-white.svg" alt="">
                </a>
                <div class="main-footer__copy">(с) 2023 Интернет магазин отопительных
                    <br>
                    систем KLONDAYK в Луганске и ЛНР
                </div>
                <a href="tel:70720722222" class="main-footer__phone">+7 072 072 2222</a>
                <div class="main-footer__schedule">Пн-Пт: с 9:00 до 18:00 Сб: с 10:00 до 17:00</div>
            </div>
            <div class="top-footer__menu menu-footer">
                <div class="menu-footer__column">
                    <div class="menu-footer__title footer-title">Покупателям</div>
                    <ul class="menu-footer__list">
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">О компании</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Оплата и доставка</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Сервис и монтаж</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Гарантия и возврат</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Отзывы</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Контакты</a>
                        </li>
                    </ul>
                </div>


                <div class="menu-footer__column">
                    <div class="menu-footer__title footer-title">Полезное</div>
                    <ul class="menu-footer__list">
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Акции</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Бренды</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Новинки</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Гарантия и возврат</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Отзывы</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Хиты продаж</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="top-footer__contacts contacts-footer">
                <div class="contacts-footer__title footer-title">Контакты</div>
                <div class="contacts-footer__items">
                    <div class="contacts-footer__item">
                        <span class="contacts-footer__label">Почта:</span>
                        <a href="mailto:zakaz@klondayk.lg.ua" class="contacts-footer__value">zakaz@klondayk.lg.ua</a>
                    </div>
                    <div class="contacts-footer__item">
                        <span class="contacts-footer__label">Телефон:</span>
                        <a href="tel:70720722222" class="contacts-footer__value">+7 (072) 072 2222</a>
                    </div>
                </div>
                <div data-da=".top-footer__container,991.98,2" class="contacts-footer__payment">
                    <div class="contacts-footer__text">Мы принимаем к оплате:</div>
                    <div class="contacts-footer__cards">
                        <img src="assets/images/payment.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer__bottom bottom-footer">
        <div class="bottom-footer__container container">
            <div class="bottom-footer__copy">(c) 2023 KLONDAYK.ru Все права защищены.</div>
            <a href="" class="bottom-footer__politics">Политика конфенденциальности</a>
            <a href="" class="bottom-footer__rules">Правила использования сайта</a>
        </div>
    </div>
</div>

</div>

<script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/js/plugins/nouislider.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/pages/catalog.js')}}"></script>

</body>

</html>
