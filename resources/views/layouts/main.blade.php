<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <div class="wrapper">
        <header class="header @yield('header_wrapper_class')">
            <div class="header__container @yield('header_container_class')">
                <div class="main-menu">
                    <a class="main-menu__icon home-icon" href="{{ route('home') }}" title="Home"></a>
                    <a class="main-menu__icon contacts-icon" href="{{ route('contacts') }}" title="Contacts"></a>
                </div>
                @yield('header_primary_banner')
            </div>
            @yield('header_secondary_banner')
        </header>
        <div class="page @yield('page_wrapper_class')">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__block-banner">
                    <div class="footer-banner">
                        <h3 class="medium-header">Intersted to woek with our team?</h3>
                        <p class="regular-text regular-text_opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <a href="#" class="secondary-button" target="_blank" title="Let’s Talk">Let’s Talk</a>
                </div>
                <div class="prolog">
                    <ul class="footer-contacts">
                        <li class="footer-contacts__element">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                        </li>
                        <li class="footer-contacts__element footer-contacts__element_tel"><a href="tel:79088888888" title="+7(908)-888-88-88">+7(908)-888-88-88</a></li>
                        <li class="footer-contacts__element footer-contacts__element_mail"><a href="mailto:mail@mail.ru" title="mail@mail.ru">mail@mail.ru</a></li>
                    </ul>
                    <div class="righ-reserved-container regular-text_opacity">
                        <p class="regular-text">{{ date('Y') }} © All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
