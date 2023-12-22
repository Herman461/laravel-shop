<x-head css-file="auth" title="Регистрация"/>
<main class="page">
    <div class="page__container container">
        <div class="auth section">
            <form method="POST" action="{{ route("user.store") }}" class="auth__form">
                @csrf
                <h1 class="auth__title">Регистрация на&nbsp;сайте</h1>
                <div class="auth__items">

                        <div class="auth__item">
                            <label for="first_name" class="auth__label">Ваше имя<span>*</span>
                            </label>
                            <div class="auth__input">
                                <input value="Герман" name="first_name" id="first_name" type="text" class="input">
                            </div>
                            @if ($errors->has('first_name'))
                                <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('first_name')}}</div>
                            @endif
                        </div>

                    <div class="auth__item">
                        <label for="last_name" class="auth__label">Ваша фамилия<span>*</span>
                        </label>
                        <div class="auth__input">
                            <input value="Жуковский" name="last_name" id="last_name" type="text" class="input">
                        </div>
                        @if ($errors->has('last_name'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('last_name')}}</div>
                        @endif
                    </div>
                    <div class="auth__item">
                        <label for="company" class="auth__label">Название организации</label>
                        <div class="auth__input">
                            <input value="Компания" name="company" id="company" type="text" class="input">
                        </div>
                        @if ($errors->has('company'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('company')}}</div>
                        @endif
                    </div>
                    <div class="auth__item">
                        <label for="inn" class="auth__label">ИНН организации</label>
                        <div class="auth__input">
                            <input value="123" name="inn" id="inn" type="text" class="input">
                        </div>
                        @if ($errors->has('inn'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('inn')}}</div>
                        @endif
                    </div>
                    <div class="auth__item">
                        <label for="email" class="auth__label">Ваш email<span>*</span>
                        </label>
                        <div class="auth__input">
                            <input value="zhu@gmail.com" name="email" id="email" type="text" class="input">
                        </div>
                        @if ($errors->has('email'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('email')}}</div>
                        @endif
                    </div>
                    <div class="auth__item">
                        <label for="phone_number" class="auth__label">Номер телефона<span>*</span>
                        </label>
                        <div class="auth__input">
                            <input value="+7 329 938 28 49" name="phone_number" placeholder="+7" id="phone_number"
                                   type="text" class="input phone">
                        </div>
                        @if ($errors->has('phone_number'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('phone_number')}}</div>
                        @endif
                    </div>
                    <div class="auth__item">
                        <label for="address" class="auth__label">Ваш адрес<span>*</span>
                        </label>
                        <div class="auth__input">
                            <input value="This is my address" name="address" placeholder="Город, адрес, номер дома"
                                   id="address" type="text" class="input">
                        </div>
                        @if ($errors->has('address'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('address')}}</div>
                        @endif
                    </div>

                    <div class="auth__item">
                        <label for="password" class="auth__label">Ваш пароль<span>*</span>
                        </label>
                        <div class="auth__input">
                            <input value="Герман" name="password" id="password" type="text" class="input">
                        </div>
                        @if ($errors->has('password'))
                            <div style="color: red;font-size: 12px;" class="base-error">{{$errors->first('password')}}</div>
                        @endif
                    </div>
                </div>
                <div class="auth__actions">
                    <a href="" class="auth__link">Уже зарегистрирован</a>
                    <button type="submit" class="auth__submit button button_big">Зарегистрироваться</button>
                </div>
                <div class="auth__agreement">Нажимая кнопку Зарегистрироваться я даю согласение на обработку
                    персональных данный и соглашаюсь с <a href="">пользовательским&nbsp;соглашением</a>
                </div>
            </form>

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
<script src="assets/js/plugins/phone-mask.js?_v=20230301025217"></script>
<script src="assets/js/script.js?_v=20230301025217"></script>
<script src="assets/js/app.js?_v=20230301025217"></script>
</body>

</html>
