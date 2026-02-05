@php
    if (empty($items)) {
        return;
    }
@endphp
<div class="what-we-do">
    <div class="what-we-do__title">
        <h3 class="medium-header">What we do to help our client grow in digital&nbsp;era</h3>
    </div>
    <div class="what-we-do-list">
        @foreach($items as $item)
            <div class="what-we-do-list__item">
                <div class="what-we-do-list__element">
                    <div class="what-we-do-element__content">
                        <div class="what-we-do-element__image-container">
                            @if(!empty($item['picture']))
                                <img
                                    src="{{ asset('storage/' . $item['picture']) }}"
                                    alt="{{ $item['name'] }}"
                                >
                            @endif
                        </div>
                        <h4 class="small-header small-header_what-we-do">
                            {{ $item['name'] }}
                        </h4>
                        <p class="regular-text">
                            {{ $item['description'] }}
                        </p>
                    </div>
                    @if(!empty($item['link']))
                        <a href="{{ $item['link'] }}" class="learn-more" target="_blank" title="{{ $item['name'] }}">
                            Learn more
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
