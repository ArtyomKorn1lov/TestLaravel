@extends('layouts.main', ['assets' => ['resources/css/pages/home.css']])

@section('title', 'New Automation Tool for Your')

@section('header_primary_banner')
    <div class="home-banner">
        <div class="home-banner__text-box">
            <h1 class="large-header">New Automation Tool for Your</h1>
            <p class="regular-text regular-text_banner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus tristique vulputate ultrices ut mauris tellus at. Posuere sollicitudin odio tellus elit.</p>
            <a href="#fineshedProjects" class="primary-button primary-button_home-banner" title="See Our Project">See Our Project</a>
        </div>
        <img class="home-banner__image" src="{{ asset('static/illustration.svg') }}" alt="Изображение главного баннера">
    </div>
@endsection

@section('content')
    <div class="what-we-do">
        <div class="what-we-do__title">
            <h3 class="medium-header">What we do to help our client grow in digital&nbsp;era</h3>
        </div>
        <div class="what-we-do-list">
            <div class="what-we-do-list__item">
                <div class="what-we-do-list__element">
                    <div class="what-we-do-element__content">
                        <div class="what-we-do-element__image-container">
                            <img src="{{ asset('static/what-we-do1.svg') }}" alt="Изображение 1">
                        </div>
                        <h4 class="small-header small-header_what-we-do">Make Your business To Be Better Famous In Internet</h4>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <a href="#" class="learn-more" target="_blank" title="Make Your business To Be Better Famous In Internet">Learn more</a>
                </div>
            </div>
            <div class="what-we-do-list__item">
                <div class="what-we-do-list__element">
                    <div class="what-we-do-element__content">
                        <div class="what-we-do-element__image-container">
                            <img src="{{ asset('static/what-we-do2.svg') }}" alt="Изображение 2">
                        </div>
                        <h4 class="small-header small-header_what-we-do">Bring Technology To Your Comfrotable Home</h4>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <a href="#" class="learn-more" target="_blank" title="Bring Technology To Your Comfrotable Home">Learn more</a>
                </div>
            </div>
            <div class="what-we-do-list__item">
                <div class="what-we-do-list__element">
                    <div class="what-we-do-element__content">
                        <div class="what-we-do-element__image-container">
                            <img src="{{ asset('static/what-we-do3.svg') }}" alt="Изображение 3">
                        </div>
                        <h4 class="small-header small-header_what-we-do">Build Your Digital Product That Suitable For Your Need</h4>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <a href="#" class="learn-more" target="_blank" title="Build Your Digital Product That Suitable For Your Need">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="our-finished-project" id="fineshedProjects">
        <h3 class="medium-header">Our Finished Project</h3>
        <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <a class="our-finished-project__block" href="#" title="Smart Home Installation">
            <img class="our-finished-project__image" src="{{ asset('static/smart-home.webp') }}" alt="Изображение 1" />
            <span class="our-finished-project__text">Smart Home Installation</span>
        </a>
        <div class="our-finished-project__group">
            <a class="our-finished-project__block our-finished-project__block_small" href="#" title="Sparklite App">
                <img class="our-finished-project__image" src="{{ asset('static/sparklite-app.webp') }}" alt="Изображение 2" />
                <span class="our-finished-project__text our-finished-project__text_left">Sparklite App</span>
            </a>
            <a class="our-finished-project__block our-finished-project__block_small" href="#" title="Car-Rapetition App">
                <img class="our-finished-project__image" src="{{ asset('static/car-rapetition-app.webp') }}" alt="Изображение 3" />
                <span class="our-finished-project__text our-finished-project__text_left">Car-Rapetition App</span>
            </a>
        </div>
    </div>
@endsection
