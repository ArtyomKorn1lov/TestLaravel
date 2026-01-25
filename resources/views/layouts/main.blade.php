@php
    $baseAssets = ['resources/css/styles.css', 'resources/js/scripts.js'];
    $includesAssets = !empty($assets) ? $assets : [];
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    @include('shared.assets', ['assets' => [...$baseAssets, ...$includesAssets]])
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <div class="wrapper">
        <header class="header @yield('header_wrapper_class')">
            <div class="header__container @yield('header_container_class')">
                <x-menu />
                @yield('header_primary_banner')
            </div>
            @yield('header_secondary_banner')
        </header>
        <div class="page @yield('page_wrapper_class')">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="footer__container">
                <x-banner type="footer" />
                <div class="prolog">
                    <x-short-contacts-info />
                    <div class="righ-reserved-container regular-text_opacity">
                        <p class="regular-text">{{ date('Y') }} © All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
