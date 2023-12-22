<x-head title="Главная" />
    <main class="page">
        <div class="page__intro-block intro-block">
            <div class="intro-block__container container">
                <div class="intro-block__banners banners-intro-block">
                    <div class="banners-intro-block__body swiper-build swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($banners as $banner)
                                <div class="banners-intro-block__slide swiper-slide">
                                    <div class="banners-intro-block__image">
                                        <img src="{{asset("storage/" . $banner->imageUrl)}}" alt="">
                                    </div>
                                    <div class="banners-intro-block__content">
                                        <div class="banners-intro-block__title">{{$banner->title}}</div>
                                        <div class="banners-intro-block__text">
                                            <p>{{$banner->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="banners-intro-block__dots dots"></div>
                </div>
                <div class="intro-block__products products-intro-block">

                    <div class="products-intro-block__body swiper">
                        <div class="products-intro-block__slide">
                            <div class="products-intro-block__timer timer-intro-block">
                                <div class="timer-intro-block__label">До конца акции</div>
                                <div class="timer-intro-block__item">
                                    <span>10</span>
                                    <span>15</span>
                                    <span>32</span>
                                    <span>27</span>
                                </div>
                            </div>
                            <div class="products-intro-block__item item-product">
                                <a href="" class="item-product__image">
                                    <img src="assets/images/products/02.png" alt="">
                                </a>
                                <a href="" class="item-product__title">Кондиционер Daichi Peak DA35AVQS1-S</a>
                                <div class="item-product__bottom">
                                    <div class="item-product__price price">
                                        <div class="price__item price__item_old">57 900р.</div>
                                        <div class="price__item price__item_red">40 600р.</div>
                                    </div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="products-intro-block__slide">
                            <div class="products-intro-block__timer timer-intro-block">
                                <div class="timer-intro-block__label">До конца акции</div>
                                <div class="timer-intro-block__item">
                                    <span>10</span>
                                    <span>15</span>
                                    <span>32</span>
                                    <span>27</span>
                                </div>
                            </div>
                            <div class="products-intro-block__item item-product">
                                <a href="" class="item-product__image">
                                    <img src="assets/images/products/02.png" alt="">
                                </a>
                                <a href="" class="item-product__title">Кондиционер Daichi Peak DA35AVQS1-S</a>
                                <div class="item-product__bottom">
                                    <div class="item-product__price price">
                                        <div class="price__item price__item_old">57 900р.</div>
                                        <div class="price__item price__item_red">40 600р.</div>
                                    </div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="products-intro-block__slide">
                            <div class="products-intro-block__timer timer-intro-block">
                                <div class="timer-intro-block__label">До конца акции</div>
                                <div class="timer-intro-block__item">
                                    <span>10</span>
                                    <span>15</span>
                                    <span>32</span>
                                    <span>27</span>
                                </div>
                            </div>
                            <div class="products-intro-block__item item-product">
                                <a href="" class="item-product__image">
                                    <img src="assets/images/products/02.png" alt="">
                                </a>
                                <a href="" class="item-product__title">Кондиционер Daichi Peak DA35AVQS1-S</a>
                                <div class="item-product__bottom">
                                    <div class="item-product__price price">
                                        <div class="price__item price__item_old">57 900р.</div>
                                        <div class="price__item price__item_red">40 600р.</div>
                                    </div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-intro-block__dots dots"></div>
                </div>
            </div>
        </div>

        <div class="page__brands brands-page section">
            <div class="brands-page__container container">
                <div class="brands-page__body">
                    <div class="brands-page__item">
                        <a href="" class="brands-page__link">
                            <img src="assets/images/home/brands/01.svg" alt="">
                        </a>
                    </div>
                    <div class="brands-page__item">
                        <a href="" class="brands-page__link">
                            <img src="assets/images/home/brands/01.svg" alt="">
                        </a>
                    </div>
                    <div class="brands-page__item">
                        <a href="" class="brands-page__link">
                            <img src="assets/images/home/brands/01.svg" alt="">
                        </a>
                    </div>
                    <div class="brands-page__item">
                        <a href="" class="brands-page__link">
                            <img src="assets/images/home/brands/01.svg" alt="">
                        </a>
                    </div>
                    <div class="brands-page__item">
                        <a href="" class="brands-page__link">
                            <img src="assets/images/home/brands/01.svg" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="page__products-slider products-slider">
            <div class="products-slider__container container">

                <div class="products-slider__top top-slider">
                    <h2 class="top-slider__title title">Хиты продаж</h2>
                    <a href="" class="top-slider__more">
                        Показать все
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>

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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                </div>
            </div>
        </div>

        <div class="page__special-offer special-offer section">
            <div class="special-offer__container container">
                <div class="special-offer__body swiper">
                    <div class="special-offer__slide">
                        <div class="special-offer__item item-special-offer">
                            <div class="item-special-offer__content">
                                <div class="item-special-offer__category">Бойлеры</div>
                                <a href="" class="item-special-offer__title">Бойлер косвенного
                                    нагрева Federuca
                                    Bugatti KBS-B 100 л</a>
                                <div class="item-special-offer__price price">
                                    <div class="price__item price__item_old">44 799р.</div>
                                    <div class="price__item price__item_red">33 726р.</div>
                                </div>
                            </div>
                            <a href="" class="item-special-offer__image">
                                <img src="assets/images/home/categories/01.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="special-offer__slide">
                        <div class="special-offer__item item-special-offer">
                            <div class="item-special-offer__content">
                                <div class="item-special-offer__category">Бойлеры</div>
                                <a href="" class="item-special-offer__title">Бойлер косвенного
                                    нагрева Federuca
                                    Bugatti KBS-B 100 л</a>
                                <div class="item-special-offer__price price">
                                    <div class="price__item price__item_old">44 799р.</div>
                                    <div class="price__item price__item_red">33 726р.</div>
                                </div>
                            </div>
                            <a href="" class="item-special-offer__image">
                                <img src="assets/images/home/categories/02.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="special-offer__slide">
                        <div class="special-offer__item item-special-offer">
                            <div class="item-special-offer__content">
                                <div class="item-special-offer__category">Бойлеры</div>
                                <a href="" class="item-special-offer__title">Бойлер косвенного
                                    нагрева Federuca
                                    Bugatti KBS-B 100 л</a>
                                <div class="item-special-offer__price price">
                                    <div class="price__item price__item_old">44 799р.</div>
                                    <div class="price__item price__item_red">33 726р.</div>
                                </div>
                            </div>
                            <a href="" class="item-special-offer__image">
                                <img src="assets/images/home/categories/03.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page__products-slider products-slider">
            <div class="products-slider__container container">

                <div class="products-slider__top top-slider">
                    <h2 class="top-slider__title title">Новинки</h2>
                    <a href="" class="top-slider__more">
                        Показать все
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>

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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                </div>
            </div>
        </div>

        <div class="page__products-slider products-slider">
            <div class="products-slider__container container">

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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
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
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                        <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                            <svg>
                                                <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="reviews-item-product__count">159 отзывов</div>
                                </div>
                                <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                    и промышленных помещения.</div>
                                <div class="item-product__bottom">
                                    <div class="item-product__price">1 666р.</div>
                                    <a href="" class="item-product__button button button_stroke">В корзину</a>
                                </div>
                            </div>

                        </article>

                    </div>
                </div>
            </div>
        </div>

        <div class="page__subscription subscription-page-page section">
            <div class="subscription-page__container container">
                <div class="subscription-page__body">
                    <div class="subscription-page__content">
                        <h3 class="subscription-page__title title">Узнавайте о новинках в нашем
                            <br>
                            интернет магазине - первыми!
                        </h3>
                        <div class="subscription-page__mobile-title title">Узнавайте о&nbsp;новинках первыми!</div>
                        <div class="subscription-page__text text">
                            <p>Подпишитесь на бесплатную рассылку и будьте
                                <br>
                                вкурсе акции, бесплатной доставки и бонусов!
                            </p>
                        </div>
                        <form action="#" class="subscription-page__form">
                            <div class="subscription-page__input">
                                <input placeholder="Введите электронную почту" type="text" class="input">
                            </div>
                            <button data-da=".subscription-page__container,480.98,last" class="subscription-page__button button">Подписаться</button>
                        </form>
                    </div>
                    <div class="subscription-page__image">
                        <img src="assets/images/home/subscription.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="page__blog blog-page section">
            <div class="blog-page__container container">
                <div class="blog-page__top top-slider">
                    <h2 class="top-slider__title title">Наш блог</h2>
                    <a href="" class="top-slider__more">
                        Показать все
                        <svg>
                            <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="blog-page__body swiper">
                    <div class="blog-page__slide">
                        <a href="" class="blog-page__image">
                            <img src="assets/images/home/blog/01.jpg" alt="">
                        </a>
                        <h4 class="blog-page__title">Кухня</h4>
                        <p class="blog-page__text">Наверняка, каждая домохозяйка мечтает о стиль-
                            ной и в то же время функциональной кухне. Нахо-
                            диться на такой кухне приятно, а готовить – легко.</p>
                        <a href="" class="blog-page__link">
                            Читать подробнее
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="blog-page__slide">
                        <a href="" class="blog-page__image">
                            <img src="assets/images/home/blog/02.jpg" alt="">
                        </a>
                        <h4 class="blog-page__title">Кондиционер или сплит-система?</h4>
                        <p class="blog-page__text">В сплит-системах внешний компонент устанавли-
                            вается под окнами с наружной части здания
                            и выполняет функции конденсата.</p>
                        <a href="" class="blog-page__link">
                            Читать подробнее
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="blog-page__slide">
                        <a href="" class="blog-page__image">
                            <img src="assets/images/home/blog/03.jpg" alt="">
                        </a>
                        <h4 class="blog-page__title">Сантехника</h4>
                        <p class="blog-page__text">Под бытовой сантехникой подразумеваются изделия,
                            предназначенные для кухонь, ванных комнат и убор-
                            ных: ванны, раковины, мойки и умывальники...</p>
                        <a href="" class="blog-page__link">
                            Читать подробнее
                            <svg>
                                <use xlink:href="assets/images/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page__products-slider products-slider">
            <div class="products-slider__container container">
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                            <div class="reviews-item-product__star reviews-item-product__star_unfilled stroke">
                                                <svg>
                                                    <use xlink:href="assets/images/icons/icons.svg#star-unfilled"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="reviews-item-product__count">159 отзывов</div>
                                    </div>
                                    <a href="" class="item-product__title">Инфракрасный обогреватель РИО 04, 400 Вт, 4 м2</a>
                                    <div class="item-product__description">Предназначен для создания комфорт ных условий в жилых
                                        и промышленных помещения.</div>
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
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/pages/home.js')}}"></script>

</body>

</html>


