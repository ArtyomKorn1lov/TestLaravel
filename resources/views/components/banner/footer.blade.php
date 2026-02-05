<div class="footer__block-banner">
    <div class="footer-banner">
        <h3 class="medium-header">
            {{ $item['name'] }}
        </h3>
        <p class="regular-text regular-text_opacity">
            {{ $item['description'] }}
        </p>
    </div>
    @if(!empty($item['link']))
        <a
            href="{{ $item['link'] }}"
            class="secondary-button"
            title="Let’s Talk"
        >
            Let’s Talk
        </a>
    @endif
</div>
