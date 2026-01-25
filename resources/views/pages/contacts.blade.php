@extends('layouts.main', ['assets' => ['resources/css/pages/contacts.css']])

@section('title', 'Contact Us')

@section('header_wrapper_class', 'header_contacts')
@section('header_container_class', 'header__container_contacts')

@section('header_secondary_banner')
    <div class="header__contact-banner">
        <h2 class="big-header">Contact Us</h2>
        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
@endsection

@section('page_wrapper_class', 'page_contacts')

@section('content')
    <div class="contacts">
        <div class="contacts__section">
            <div class="contacts__image"></div>
            <div class="contacts__adress">
                <h4 class="small-header uppercase-text">ADDRESS</h4>
                <p class="regular-text">
                    Id convallis placerat sit sed duis id amet volutpat quam a, pharetra.
                </p>
            </div>
            <div class="contacts__phones contact-phones">
                <h4 class="contact-phones__title small-header uppercase-text">Phone</h4>
                <ul class="contact-phones__elements c-phones">
                    <li class="c-phones__element">
                        <div class="c-phones__icon contacts-service-icon"></div>
                        <a class="c-phones__link" href="tel:79088888888" title="+7(908)-888-88-88">+7(908)-888-88-88</a>
                    </li>
                    <li class="c-phones__element">
                        <div class="c-phones__icon contacts-service-icon"></div>
                        <a class="c-phones__link" href="tel:79077777777" title="+7(908)-777-77-77">+7(908)-777-77-77</a>
                    </li>
                </ul>
            </div>
            <div class="contact__services contact-services">
                <h4 class="contact-services__title small-header uppercase-text">Online service</h4>
                <ul class="contact-services__elements online-services">
                    <li class="online-services__element">
                        <div class="online-services__icon_site contacts-service-icon"></div>
                        <a class="online-services__link" href="https://ya.ru/" title="Yandex.ru" target="_blank">Yandex.ru</a>
                    </li>
                    <li class="online-services__element">
                        <div class="online-services__icon_mail contacts-service-icon"></div>
                        <a class="online-services__link" href="mailto:mail@mail.ru" title="mail@mail.ru">mail@mail.ru</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="contacts__form form" method="get">
            <div class="form__body">
                <h4 class="small-header uppercase-text">Send us message</h4>
                <span class="form__label">Full Name</span>
                <input name="name" class="form__field" type="text" placeholder="Full Name" minlength="4" required />
                <span class="form__error">Field "Full Name" is invalid! Enter min 4 symbols</span>
                <span class="form__label form__label_margine-top32">Email</span>
                <input name="email" class="form__field" type="email" placeholder="Email" required />
                <span class="form__error">Field "Email" is invalid!</span>
                <span class="form__label form__label_margine-top32">Message</span>
                <textarea name="message" class="form__field" cols="30" rows="3" placeholder="Message"></textarea>
                <div id="formResults" class="form__result-group result-group">
                    <h5 class="result-group__title">Form result:</h5>
                    <span id="nameValue" class="result-group__item"></span>
                    <span id="emailValue" class="result-group__item"></span>
                    <span id="messageValue" class="result-group__item"></span>
                </div>
            </div>
            <button class="primary-button form__submit" type="submit">Submit</button>
        </form>
    </div>
    <div class="yandex-map">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A656018bf6c77eb71a5af80889dde4e16952a8f84c64a12075bdd9f32b2a03760&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
@endsection
