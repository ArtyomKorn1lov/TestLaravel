<div class="home-banner">
    <div class="home-banner__text-box">
        <h1 class="large-header">
            {{ $item['name'] }}
        </h1>
        <p class="regular-text regular-text_banner">
            {{ $item['description'] }}
        </p>
        @if(!empty($item['link']))
            <a
                href="{{ $item['link'] }}"
                class="primary-button primary-button_home-banner"
                title="See Our Project"
            >
                See Our Project
            </a>
        @endif
    </div>
    @if(!empty($item['picture']))
        <img
            class="home-banner__image"
            src="{{ asset('storage/' . $item['picture']) }}"
            alt="{{ $item['name'] }}"
        >
    @endif
</div>
